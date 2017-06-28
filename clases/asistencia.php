<?php
//clase inicializada
  class Asistencia{
    //atributos de la tabla
    private $id_asistencia;
    private $asistio;
    private $fecha;
    #las siguientes variables corresponden
    #a llaves foraneas de la tabla
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
