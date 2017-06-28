<?php
//clase inicializada
class Ficha{
  //atributos de la tabla
  private $id_ficha;
  private $num_ficha;
  #las siguientes variables corresponden
  #a llaves foraneas de la tabla
  private $id_ambiente;
  private $id_programa_formacion;
  private $id_jornada;
  private $id_trimestre;

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
