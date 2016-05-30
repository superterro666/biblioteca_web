<?php
header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");



function sec_session_start() 
{
    
    $session_name = 'sec_session_id'; //Configura un nombre de sesión personalizado
    $secure = false; //Configura en verdadero (true) si utilizas https
    $httponly = true; //Esto detiene que javascript sea capaz de accesar la identificación de la sesión.
    ini_set('session.use_only_cookies', 1); //Forza a las sesiones a sólo utilizar cookies.
    $cookieParams = session_get_cookie_params(); //Obtén params de cookies actuales.
    session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
    session_name($session_name); //Configura el nombre de sesión a el configurado arriba.
    session_start(); //Inicia la sesión php
    session_regenerate_id(true); //Regenera la sesión, borra la previa.
}




function logOut() {
    session_unset();
    session_destroy();
    session_start();
    session_regenerate_id(true);
}

sec_session_start();
$nombre_fichero = '../../configs/config.php';
$nombre_fichero_2 = '../configs/config.php';

if (file_exists($nombre_fichero)) {
  
    
    
    include '../../configs/config.php';
    include '../../configs/check.php';
   
} 


elseif(file_exists($nombre_fichero_2)) {
  
     include '../configs/config.php';
     include '../configs/check.php';
    
}
else 
{
   
     include 'configs/config.php';
     include 'configs/check.php';
}
