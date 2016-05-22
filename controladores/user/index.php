<?php
require_once  '../../configs/session.php';


if(user_autenticado()) {

   

if(isset($_GET['type']))
{
    $data=(object)$_GET;
    
    switch ($_GET['type'])
    {
        
            

       
        
        
    }
    
    
   





}
$smarty->display('user/index.tpl');
}