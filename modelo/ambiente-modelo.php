<?php
class AmbienteModelo
{
  private $PDO;

  public function __construct()
  {
      try
      {
          $this->PDO = new PDO("mysql:host=localhost;dbname=senasistencia;charset=utf8","root","");
          $this->PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      }
      catch(Exception $e)
      {
          echo "no se pudo conectar a la base de datos codigo de error: ";
          die($e->getMessage());
      }
  }

  public function consultarAmbiente($id)
  {
    try
    {
      $sql = "SELECT*FROM ambiente_formacion WHERE Sede_ID_Sede = ?";
      $stm = $this->PDO->prepare($sql);
      $stm->execute(array($id));
      $ambiente = $stm->fetchAll(PDO::FETCH_OBJ);
      return $ambiente;
    } catch (Exception $e) {
      die($e->getMessage());
    }

  }
}


?>
