<?php
//clase inicializada
  class Jornada{
    //atributos de la tabla
    private $id_jornada;
    private $descripcion_jornada;
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
