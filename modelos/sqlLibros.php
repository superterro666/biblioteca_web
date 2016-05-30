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
   private $isbn;
   function __construct($data,$db){
       
      $this->db = $db; 
      $this->isbn = $data->id;
       
       
       
   } 
   
   
   public function listaLibros(){
      
       $sql="SELECT libros.titulo, aquiler.fecha_alta, aquiler.fecha_baja, aquiler.id_libro FROM aquiler INNER JOIN  libros
               ON libros.isbn=aquiler.id_libro WHERE aquiler.id_user=?";
   
       $datos = array($_SESSION['salt']);
       
      
       
       if(!$result = $this->db->sacaVariasFilas($sql,$datos))
               return false;
       
          
       
       return $result;
       
       
   }
   
   
   public function renovar(){
       
       $sql="SELECT aquiler.fecha_baja, aquiler.ampliaciones FROM aquiler WHERE id_libro=?";
      
       $datos= array ($this->isbn);
      
       if(!$result = $this->db->sacaUnaFila($sql,$datos))
               return false;
       
       
         
       
      if($result->ampliaciones==0){
           
           $fecha = date_create($result->fecha_baja);
           $fecha->add(new DateInterval('P14D'));
           
           $fecha = $fecha->format('Y-m-d') . "\n";
           
           $sql = "UPDATE aquiler SET fecha_baja=?, ampliaciones=? WHERE id_libro=?";
           $datos = array($fecha,1,$this->isbn);
           if(!$result = $this->db->consulta($sql,$datos))
                   return false;
           return true;
          
       }   
     
       return false;

          
           
  
       
   }
    
    
}
