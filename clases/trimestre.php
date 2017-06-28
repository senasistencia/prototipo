<?php
//clase inicializada
class Trimestre{
  //atributos de la tabla
  private $id_trimestre;
  private $num_trimestre;
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
