<?php
require("../modelos/ficha-modelo.php");
require("../clases/ficha.php");
$modelo= new FichaModelo();
$ficha = new Ficha();

if (isset($_REQUEST['ac']))
{
    switch ($_REQUEST['ac']) {
      case 'registrar':
          $ficha->__SET('id_ficha',$_REQUEST['id']);
          $ficha->__SET('num_ficha',$_REQUEST['num_ficha']);
          $ficha->__SET('id_ambiente',$_REQUEST['ambiente']);
          $ficha->__SET('id_programa_formacion',$_REQUEST['programa']);
          $ficha->__SET('id_jornada',$_REQUEST['jornada']);
          $ficha->__SET('id_trimestre',$_REQUEST['trimestre']);
          $modelo->crearFicha($ficha);
          header("Location: ficha-vista.php");
        break;
      case 'actualizar':
        $ficha->__SET('id_ficha',$_REQUEST['id']);
        $ficha->__SET('num_ficha',$_REQUEST['num_ficha']);
        $ficha->__SET('id_ambiente',$_REQUEST['ambiente']);
        $ficha->__SET('id_programa_formacion',$_REQUEST['programa']);
        $ficha->__SET('id_jornada',$_REQUEST['jornada']);
        $ficha->__SET('id_trimestre',$_REQUEST['trimestre']);
        $modelo->actualizar($ficha);
        header("Location: ficha-vista.php");

        break;
      case 'editar':
        $ficha = $modelo->editar($_REQUEST['id']);
      break;

      case 'eliminar':
      $modelo->eliminar($_REQUEST['id']);
      header("Location: ficha-vista.php");

      break;

      default:
        # code...
        break;
    }



}


?>
