<?php

function user_autenticado() {
    
  if (isset($_SESSION["type"])=='user')
        {
      
       return true;
            
        }    
           
           
       
   
    
}
/*AUTENTIFICAR ADMINISTRADORES CENTROS ESCOLARES*/
function admin_autenticado()
{
    
  if(isset($_SESSION['type'])=='admin')
    {
        return true;
        
    }
}


