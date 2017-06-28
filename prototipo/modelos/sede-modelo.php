<?php
class SedeModelo
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

  public function consultarSede($id)
  {
    $sql = "SELECT * FROM sede WHERE Centro_Formacion_ID_Centro = ?";
    $stm = $this->PDO->prepare($sql);
    $stm->execute(array($id));
    $sede = $stm->fetchAll(PDO::FETCH_OBJ);
    return $sede;
  }
}


 ?>
