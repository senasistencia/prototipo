<?php
  require ("../modelos/centro-modelo.php");
  require("../clases/centroformacion.php");
  $modelo = new CentroFormacionModelo();
  $centro = new CentroFormacion();

  if (isset($_REQUEST['ac']))
  {

      switch ($_REQUEST['ac'])
      {
        case 'registrar':
          $centro->__SET('id_centro',$_REQUEST['id']);
          $centro->__SET('nombre',$_REQUEST['nombre']);
          $centro->__SET('direccion',$_REQUEST['dir']);
          $centro->__SET('telefono',$_REQUEST['tel']);
          $modelo->crear($centro);
          header('Location: centro-vista.php');
          break;
        case 'actualizar':
          $centro->__SET('id_centro',$_REQUEST['id']);
          $centro->__SET('nombre',$_REQUEST['nombre']);
          $centro->__SET('direccion',$_REQUEST['dir']);
          $centro->__SET('telefono',$_REQUEST['tel']);
          $modelo->actualizar($centro);
          header('Location: centro-vista.php');
        break;
        case 'editar':
            $centro= $modelo->editar($_REQUEST['id']);
        break;
        case 'eliminar':
          $modelo->eliminar($_REQUEST['id']);
          header('Location: centro-vista.php');
          break;
        default:
          # code...
          break;
      }
  }
?>
