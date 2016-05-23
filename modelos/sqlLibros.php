<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sqlLibros
 *
 * @author terro
 */
class sqlLibros {
   private $db;
   private $data;
   function __construct($data,$db){
       
      $this->db = $db; 
      $this->data = $data;
       
       
       
   } 
   
   
   public function listaLibros(){
      
       $sql="SELECT libros.titulo, aquiler.fecha_alta, aquiler.fecha_baja FROM aquiler INNER JOIN  libros"
               . "ON libros.isbn=aquiler.id_libros WHERE aquiler.id_usuario=?";
       
       $datos = array($_SESSION['id_user']);
       
       if($result = $this->db->sacaVariasFilas($sql,$datos))
               return false;
       
           var_dump($result);
       
       return $result;
       
       
   }
    
    
}
