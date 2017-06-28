<?php
//clase inicializada
class FormatoFtp{
  //atributos de la tabla
  private $id_formato;
  private $nombre_notificacion;
  private $url_ftp;
  #la siguiente variable corresponden
  #a llaves foraneas de la tabla
  private $id_asistencia;

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
