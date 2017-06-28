<?php
//clase inicializada
class TipoDocumento{
  //atributos de la tabla
  private $id_documento;
  private $descripcion_documento;
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
