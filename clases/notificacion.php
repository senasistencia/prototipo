<?php
//clase inicializada
class Notificacion{
  //atributos de la tabla
  private $id_notificacion;
  private $mensaje;
  private $fecha;
  #las siguientes variables corresponden
  #a llaves foraneas de la tabla
  private $id_formato;
  private $id_cliente;
  private $documento_cliente;
  private $id_aprendiz;
  private $documento_aprendiz;
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
