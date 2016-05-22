<?php

require "class.phpmailer.php";
require ("class.smtp.php");

class Mailer {

    public $nombre;
    public $apellidos;
    public $email;
    public $asunto;
    public $texto;

    function __construct($data) {

        $this->nombre = $data->nombre;
        $this->apellidos = $data->apellidos;
        $this->email = $data->mail;
        $this->asunto = $data->asunto;
        $this->texto = $data->correo;
    }

    function cargaMail() {




        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->SMTPAuth = true;


        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->Username = "superterro92@gmail.com";
        $mail->Password = "terropuzol1975";
        //$mail->SMTPDebug = 1;	
        $mail->AddAddress("superterro92@gmail.com");


        $mail->From = "superterro92@gmail.com";

        $mail->FromName = "terro";
        
        
      
        
       
        
        
      
      
        

        $mail->Subject = $this->asunto;
        $mail->Body = $this->nombre . " " . $this->apellido . " te a enviado un correo desde " . $this->email;
        $mail->AltBody = $this->nombre . " " . $this->apellido . " te a enviado un correo desde " . $this->email;

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }

}
