<?php
//clase inicializada
  class Aprendices{
    //atributos de la tabla
     private $id_aprendiz;
     private $documento_aprendiz;
     private $nombre;
     private $apellido;
     private $correo;
     private $telefono;
     #las siguientes variables corresponden
     #a llaves foraneas de la tabla
     private $id_genero;
     private $id_estado_aprendiz;
     private $id_tipo_documento;
     private $id_ficha;
     //metodos
     public function __SET($atributo,$valor)
     {
         return $this->$atributo = $valor;
     }

     public function __GET($atributo)
     {
       return $this->$atributo;
     }

  }

?>
