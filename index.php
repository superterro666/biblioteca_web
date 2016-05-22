<?php
require 'configs/session.php';


if(isset($_GET["action"]))
{
  
    $smarty->assign("login",$login=true);
}

if(isset($_GET['email'])){
    
    $smarty->assign("email",$email=true);
    $smarty->assign("login",$login=true);
    
   
    
    
}

 if($_POST['email']=="email"){
        
       $data = (object) $_POST;
    
     
        $mail = new Mailer($data);
        
        $mail->cargaMail();
        
    }




if(isset($_POST['submit']))
{
    
    $data=(object)$data;
    $data->email=$_POST['email'];
    $data->password=$_POST['password'];
    
 
    
    $login= new Login($data,$db);
    if($result=$login->login())
    {
       
        if($_SESSION['type']=='admin')
        {
            
             header('location:controladores/admin/index.php');  
           
        }else
        {
           
            header('location:controladores/user/index.php');  
        }
        
        
     
      
      
    }
        
}




  $smarty->display("index.tpl");