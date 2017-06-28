<?php
//clase inicializada
class PasswordToken{
  //atributos de la tabla
  private $id_passwordtoken;
  private $token_hash;
  #las siguientes variables corresponden
  #a llaves foraneas de la tabla
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
