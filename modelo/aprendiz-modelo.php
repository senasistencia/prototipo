<?php
class AprendizModelo{
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

  public function consultarAprendiz($id)
  {
    try
    {
        $sql = "SELECT*FROM aprendices WHERE ficha_ID_Ficha = ?";
        $stm = $this->PDO->prepare($sql);
        $stm->execute(array($id));
        $aprendiz = $stm->fetchAll(PDO::FETCH_OBJ);
        return $aprendiz;
    } catch (Exception $e) {
      die($e->getMessage());
    }

  }
}


?>
