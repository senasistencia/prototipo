<?php
//clase inicializada
  class EstadoUsuario{
    //atributos de la tabla
    private $id_estado_usuario;
    private $estado;
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
