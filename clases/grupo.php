<?php
//clase inicializada
  class Grupo{
    //atriutos de la tabla
    private $id_grupo;
    private $descripcion_grupo;
    #la siguiente variable corresponden
    #a llaves foraneas de la tabla
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
