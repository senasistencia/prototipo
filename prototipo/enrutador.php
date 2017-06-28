<?php
class Enrutador
{
  public function enrutar($ruta)
  {
    switch ($ruta)
    {
      case 'ambiente':
          $ruta = "ambientes.php";
        break;

      default:

        break;
    }
    return $ruta;
  }

}

if (isset($_GET['ac'])) {
  $ruta = $_GET['ac'];
  $enrutador = new Enrutador();
  $url =$enrutador->enrutar($ruta);
}

?>
