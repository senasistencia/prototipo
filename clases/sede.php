<?php
//clase inicializada
class Sede{
  //atributos de la tabla
  private $id_sede;
  private $nombre;
  private $direccion;
  private $telefono;
  #la siguiente variable corresponde
  #a llaves foraneas de la tabla
  private $id_centro;
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
