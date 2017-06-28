<?php
  require ("../modelos/ambiente-modelo.php");
  require("../clases/ambiente.php");
  $modelo = new AmbienteModelo();
  $ambiente = new Ambiente();

  if (isset($_REQUEST['ac']))
  {

      switch ($_REQUEST['ac'])
      {
        case 'registrar':
          $ambiente->__SET('id_ambiente',$_REQUEST['id']);
          $ambiente->__SET('num_ambiente',$_REQUEST['num_ambiente']);
          $ambiente->__SET('id_sede',$_REQUEST['sede']);
          $modelo->crear($ambiente);
          header('Location: ambiente-vista.php');
          break;
        case 'actualizar':
          $ambiente->__SET('id_ambiente',$_REQUEST['id']);
          $ambiente->__SET('num_ambiente',$_REQUEST['num_ambiente']);
          $ambiente->__SET('id_sede',$_REQUEST['sede']);
          $modelo->actualizar($ambiente);
          header('Location: ambiente-vista.php');
        break;
        case 'editar':
            $ambiente= $modelo->editar($_REQUEST['id']);
        break;
        case 'eliminar':
          $modelo->eliminar($_REQUEST['id']);
          header('Location: ambiente-vista.php');
          break;
        default:
          # code...
          break;
      }
  }
?>
