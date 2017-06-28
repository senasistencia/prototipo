<?php
//clase inicializada
class ProgramaFormacion{
  //atributos de la tabla
  private $id_programa_formacion;
  private $nombre;
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
