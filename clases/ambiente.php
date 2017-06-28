<?php 
//se crea la clase ambiente
  class Ambiente{
    //atributos de la tabla
      private $id_ambiente;
      private $num_ambiente;
      #la siguiente variable corresponde
      #a llaves foraneas de la tabla
      private $id_sede;
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
