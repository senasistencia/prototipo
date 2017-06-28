<?php
//clase inicializada
  class Cargo{
    //atributos de la tabla
    private $id_cargo;
    private $tipo_cargo;
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
