<?php
//clase inicializada con datos
  class CentroFormacion{
      //atributos de la tabla
      private $id_centro;
      private $nombre;
      private $direccion;
      private $telefono;
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
