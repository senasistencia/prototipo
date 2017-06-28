<?php
//clase inicializada
class Perfiles{
  //atributos de la tabla
  private $id_perfil;
  private $perfil;
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
