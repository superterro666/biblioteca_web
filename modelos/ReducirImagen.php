<?php
# Guia con Pasos a Seguir en " Imagenes_Ejercicio/reducir_img.php "
// FUNCION PARA EL RECORTE DE IMAGEN
/**
*Escala la imagen pasada
*
*@param string $img ruta de la imagen que vamos a escalar
*
*@param string $rutaDestino directorio de salida de la imagen escalada, donde se va a guardar la imagen
*
*@param int $size tamaño deseado de la imagen en pixeles, el Tamaño que queremos para nuestra imagen
*
*@param string $nombre nombre de la imagen resultante
*
*@param string $formato opcional formato de la imagen de salida jpg|png|gif predeterminado a jpg
*
*
*@return array
*
*@example img('original/foto1.png', 'imgFinal/', '1500', 'Pepe', 'gif')
*
**@example img('original/foto1.png', 'imgFinal/', '1500', 'Pepe' )
*
*/

function img ( $img, $rutaDestino, $size_ancho,$size_alto, $nombre, $formato='jpg' ){
	if( file_exists( $img ) ){
		// file_exists = Le Preguntamos si Existe/Lleno, Nos devuelve True ó False, si esta ó no esta lleno.
		if( file_exists( $rutaDestino ) ){
			if( is_writable( $rutaDestino ) ){
				// is_writable = Sirve para saber si se puede escribir en la carpeta, seguiremos dentro de True, si no fuese asi saltaria al Error mas abajo.
				$gis = getimagesize( $img );
				if( $gis[2] >= 1 && $gis[2] <= 3 ){
					switch( $gis[2] ){
						// SI es un jpg, png o gif
						case 1 :
							$imgV = imagecreatefromgif($img); //$imgV => Imagen Virtual de la Original
							break;
						case 2 :
							$imgV = imagecreatefromjpeg($img);
							break;
						case 3 :
							$imgV = imagecreatefrompng($img);
							break;
					}
					
					if( $gis[0] > $gis[1]  ){
						$anchoMarco = $size_ancho;
						$altoMarco = $size_alto;
					}else{
						$altoMarco = $size_ancho;
						$anchoMarco = $size_alto;
					}
					#Creamos el Marco
					$marco = imagecreatetruecolor($anchoMarco, $altoMarco);
					#Mete la Imagen Original, dentro del Marco que hemos Creado.
					imagecopyresampled($marco, $imgV, 0,0,0,0, $anchoMarco, $altoMarco, $gis[0], $gis[1]);
					#Liberar Memoria Ram, Eliminando FotoOriginal
					imagedestroy($imgV); 
					#Preguntamos si viene VACIO $nombre, si es True le añadira el nombre 'imagen'.
					if( empty($nombre) ){
						$nombre = 'imagen';
					}else{
						#Creamos un Array dentro de la Variable $noValido, sirvira para reemplzar Texto en Mayusculas en Minusculas mas abajo.
						$noValido = array('Á'=>'a', 'À'=>'a', 'Ä'=>'a', 'Â'=>'a',   'á'=>'a', 'à'=>'a', 'ä'=>'a', 'â'=>'a', 
										  'É'=>'e', 'È'=>'e', 'Ë'=>'e', 'Ê'=>'e',   'é'=>'e', 'è'=>'e', 'ë'=>'e', 'ê'=>'e',
										  'Í'=>'i', 'Ì'=>'i', 'Ï'=>'i', 'Î'=>'i',   'í'=>'i', 'ì'=>'i', 'ï'=>'i', 'î'=>'i', 
										  'Ó'=>'o', 'Ò'=>'o', 'Ö'=>'o', 'Ô'=>'o',   'ó'=>'o', 'ò'=>'o', 'ö'=>'o', 'ô'=>'o',
										  'Ú'=>'u', 'Ù'=>'u', 'Ü'=>'u', 'Û'=>'u',   'ú'=>'u', 'ù'=>'u', 'ü'=>'u', 'û'=>'u',
										  					'Ç'=>'s', 'ç'=>'s', 'Ñ'=>'n', 'ñ'=>'n');
						#mb_strtoupper - Convierte el Texto en Mayusculas
						$nombre = mb_strtoupper($nombre, 'UTF-8');
						#foreach se lo hacemos al Array de Arriba, que Cambie el {INDICE($i)'Á'} por el {VALOR($v)'a'}
						foreach( $noValido as $i=>$v ){
							$nombre = str_replace($i, $v, $nombre);
						}
						#mb_strtolower - Convierte el Texto en Minusculas
						$nombre = mb_strtolower($nombre, 'UTF-8');
						#preg_replace — Realiza una búsqueda y sustitución de una expresión regular.Añadira guiones Excepto de [a-z0-9], Gracias al circunflejo
						$nombre = preg_replace('/[^a-z0-9]/','-', $nombre);
						# Reemplazara  el + o caracteres raros le añadira un Guion'-',
						$nombre = preg_replace('/[\-+]/','-', $nombre);
						# trim - Esta función devuelve una cadena con los espacios en blanco eliminados del inicio y final, añadiendole un '-'(GUION)
						$nombre = trim($nombre, '-');
						if( empty($nombre) ){
							$nombre = 'imagen';
						}
					}
					#---------------------------------------------------------------------------------------
					# Comprobando que el Titulo de la IMAGEN no se REPITA dentro del DIRECTORIO RUTA DESTINO
					#---------------------------------------------------------------------------------------
					
					#$nombref - Contiene ya limpio el Titulo de la foto sin acentos ni caracteres raros.
						//$conta++;
						//$nombref = $nombre.'-'.$conta;
							#Mejorada
							$nombref = $nombre.'-0001'.$conta;
							$conta = 1;
					
					// example - ($rutaDestino.$nombref.'.'.$formato )
					// example - ('imgFinal/'.'Pepe-152'.'.'.'jpg )
					while( file_exists($rutaDestino.$nombref.'.'.$formato ) ){
						//$conta++;
						//$nombref = $nombre.'-'.$conta;
							#Mejorada
							///////////
							$conta++;
							if( $conta < 10){
								$ceros = '000';
							}elseif( $conta >= 10 && $conta < 100){
								$ceros = '00';
							}elseif( $conta >= 100 && $conta < 1000){
								$ceros = '0';
							}
							
							$nombref = $nombre.'-'.$ceros.$conta;
						
					}
					#Guardamos en el Disco Duro.
					switch( $formato ){
						case 'jpg';
								imagejpeg($marco, $rutaDestino.$nombref.'.jpg');
								imagedestroy($marco);
								break;
						case 'png';
								imagepng($marco, $rutaDestino.$nombref.'.png');
								imagedestroy($marco);
								break;
						case 'gif';
								imagegif($marco, $rutaDestino.$nombref.'.gif');
								imagedestroy($marco);
								break;
					}
					
					
					$res[0] = true;
					$res[1] = 'Imagen Procesada Correctamente, ya la Tienes Guardada.';
					$res[2] = $nombref.'.'.$formato;
					return $res;
					
					# unlink - Si deseamos Eliminar la Foto Original
					// unlink($imgV);
										
					
				}else{
					// NO es jpg, png o gif
					$res[0] = false;
					$res[1] = 'Solo jpg, png o gif';
					return $res;
				}
			}else{
				// en el directorio de salida no tenemos permisos de escritura
				$res[0] = false;
				$res[1] = 'directorio de salida no escribible, debes darles permiso de escritura.';	
				return $res;
			}
		}else{
			// el directorio de salida no existe
			$res[0] = false;
			$res[1] = 'el directorio de salida no existe';
			return $res;
		}
	}else{
		// El Archivo original no existe
		$res[0] = false;
		$res[1] = 'el archivo original no existe';	
		return $res;
	}
}
?>