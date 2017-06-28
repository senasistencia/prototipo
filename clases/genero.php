<?php
//clase inicializada
class Genero{
  //atributos de la tabla
  private $id_genero;
  private $descripcion_genero;
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
