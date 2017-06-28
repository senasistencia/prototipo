<?php
//clase inicializada
  class EstadoAprendiz{
    //atributos de la tabla
    private $id_estadoaprendiz;
    private $descripcion_estado;

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
