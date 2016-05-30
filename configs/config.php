<?php

error_reporting(1);
 ini_set('display_errors',1);

$debug =true;


date_default_timezone_set("Europe/Madrid" ) ;
setlocale(LC_ALL,'es_ES');



# BASE DE DATOS
if($_SERVER['REMOTE_ADDR'] == '127.0.0.1'){
    
    $bd_servidor = "localhost";
    $bd_usuario = "root";
    $bd_clave = "terro1975";
    $bd_base_datos = "proyecto";
} else {
    
    $bd_servidor = "localhost";
    $bd_usuario = "jose";
    $bd_clave = "Dam2016$";
    $bd_base_datos = "jose";
}


if($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
  
   
error_reporting(E_ALL ^ E_NOTICE);


    define("RUTA_SMARTY", "/var/www/html/biblioteca_web/smarty/");
    define("RUTA_BASE", "/var/www/html/biblioteca_web/");
    define("URL_BASE", "");

} else {
   

    define("RUTA_SMARTY", "/var/www/vhosts/nimelec.com/jose/smarty/");
    define("RUTA_BASE","/var/www/vhosts/nimelec.com/jose/");
    define("URL_BASE", "");
}







require_once(RUTA_SMARTY.'libs/Smarty.class.php');




$smarty= new Smarty();


$smarty->setTemplateDir(RUTA_SMARTY.'templates/');
$smarty->setCompileDir(RUTA_SMARTY.'templates_c/');
$smarty->setConfigDir(RUTA_SMARTY.'configs/');
$smarty->setCacheDir(RUTA_SMARTY.'cache/');


 if($_SERVER['REMOTE_ADDR'] == '127.0.0.1')
 {
     $smarty->assign('baseUrl',$baseUrl='/addlink/controladores');
     $smarty->assign('baseCss',$baseCss='addlink/css/');
 }
 else
 {
     $smarty->assign('baseUrl',$baseUrl='/controladores');
 }






function mi_carga($class_name)
{

    require_once RUTA_BASE."modelos/{$class_name}.php";
    
}





spl_autoload_register('mi_carga');
$db = new miDB($bd_servidor,$bd_usuario,$bd_clave,$bd_base_datos);











