<?php
class FichaModelo
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



  public function consultarFicha($id)
  {
    try
    {
        $sql = "SELECT*FROM ficha WHERE Ambiente_ID_Ambiente = ?";
        $stm = $this->PDO->prepare($sql);
        $stm->execute(array($id));
        $ficha= $stm->fetchAll(PDO::FETCH_OBJ);
        return $ficha;
    } catch (Exception $e) {
      die($e->getMessage());
    }

  }
  public function grupo($id)
  {
    try
    {
      $sql = "SELECT*FROM grupo WHERE Ficha_ID_Ficha = ?";
      $stm = $this->PDO->prepare($sql);
      $stm->execute(array($id));
      $grupo = $stm->fetchAll(PDO::FETCH_OBJ);
      return $grupo;
    } catch (Exception $e) {

    }

  }
}


?>
