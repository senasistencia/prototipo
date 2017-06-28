<?php
//clase inicializada
class Usuarios{
  //atributos de la tabla
  private $id_usuario;
  private $usuario;
  private $password_hash;
  private $caducidad_password;
  #las siguientes variables corresponden
  #a llaves foraneas de la tabla
  private $id_estado_usuario;
  private $id_perfil;
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
