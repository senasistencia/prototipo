<?php
//clase inicializada
  class Cliente{
    //atributos de la tabla
    private $id_cliente;
    private $documento_cliente;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    #las siguiente variables corresponden
    #a llaves foraneas de la tabla
    private $id_tipo_documento;
    private $id_cargo;
    private $id_usuario;
    private $usuario;

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
