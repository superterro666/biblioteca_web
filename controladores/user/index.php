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

      case "renovar":
      
          $datos = new sqlLibros($data,$db);
          if(!$datos->renovar())
          {
              
              $smarty->assign("ampliacion",$ampliacion=true);
       
              
          }else{
              
              $smarty->assign("ampliacion_ok", $ampliacion_ok=true);
          }
          
           $result = $datos->listaLibros();
           $smarty->assign("items", $items=$result); 
        break;
        
      case "cerrar":
          
          logout();
          header("Location:../../index.php");
          
          
          break;
       
        
        
    }
    
    
   





}
$smarty->display('user/index.tpl');
}