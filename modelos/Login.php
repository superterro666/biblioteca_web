<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author terro
 */
class Login {
    
    private $email;
    private $password;
    private $db;
    
    
    public function __construct($data,$db) {
        $this->email=$data->email;
        $this->password=$data->password;
        $this->db=$db; 
    }
    
    
    
    public function login()
    {
        
        $sql="SELECT id, username, password, salt ,role
        FROM usuario
        WHERE email = ?
        LIMIT 1";
       
        $datos=array($this->email);
        $valores=$this->db->sacaUnaFila($sql,$datos);
        
       
        
        if($valores)
        {
           
           
                $password=hash('sha512',$this->password);
                
                
                
               
                
                
            if ($this->checkbrute($valores->id) == true) {
           
                return false;
            } else {
                
                
                // Revisa que la contraseña en la base de datos coincida 
                // con la contraseña que el usuario envió.
                if ($password == $valores->password) {
                    
                    
                    
                    
                    if($valores->rango=='admin')
                    {
                      
                    $_SESSION['type']='admin';
                    
                    }else
                    {
                         
                    $_SESSION['type']='user';
                   
                    }
                       
                    

                 
                    // ¡La contraseña es correcta!
                    // Obtén el agente de usuario del usuario.
                    $user_browser = $_SERVER['HTTP_USER_AGENT'];
                    //  Protección XSS ya que podríamos imprimir este valor.
                    $valores->id = preg_replace("/[^0-9]+/", "", $valores->id);
                    $_SESSION['user_id'] = $valores->id;
                    $_SESSION['salt']=$valores->salt;
                    // Protección XSS ya que podríamos imprimir este valor.
                    $valores->username = preg_replace("/[^a-zA-Z0-9_\-]+/", 
                                                                "", 
                                                                $valores->username);
                    $_SESSION['username'] = $valores->username;
                    $_SESSION['login_string'] = hash('sha512', 
                              $password . $user_browser);
                    // Inicio de sesión exitoso
                    return true;
                } else {
                    // La contraseña no es correcta.
                    // Se graba este intento en la base de datos.
                    $now = time();
                    $sql="INSERT INTO login_attempts(user_id, time)
                                    VALUES ('$valores->id', '$now')";
                    $datos=array($valores->id,$now);
                    $this->db->consulta($sql,$datos);
                    return false;
                }
            }
        } else {
            // El usuario no existe.
            return false;
        } 
        }
        
   
    
  
    
        
    
    
    
    
 private function checkbrute() {
    // Obtiene el timestamp del tiempo actual.
    $now = time();
 
    // Todos los intentos de inicio de sesión se cuentan desde las 2 horas anteriores.
    $valid_attempts = $now - (2 * 60 * 60);
 
                     $sql = "SELECT time 
                             FROM login_attempts 
                             WHERE user_id = ? 
                             AND time > ?";
                     $datos=array($this->id,$valid_attempts);
                     if($this->db->rowCount($sql,$datos)>5)
                     {
                         return true;
                     }else
                     {
                         return false;
                     }


        
        
}
   
    
    
    
}





    