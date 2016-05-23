<?php
require_once  '../../configs/session.php';


if(user_autenticado()) {

   

if(isset($_GET['type']))
{
    $data=(object)$_GET;
    
    switch ($_GET['type'])
    {
        
      case "cargar":
        
        $datos = new sqlLibros($data,$db);  
        $result = $datos->listaLibros();
        $smarty->assign("items", $items=$result);
          
          break;

       
        
        
    }
    
    
   





}
$smarty->display('user/index.tpl');
}