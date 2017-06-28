<?php
require("../clases/jornada.php");
require("../modelos/jornada-modelo.php");
$jornada = new Jornada();
$model = new JornadaModelo();
if(isset($_REQUEST['ac']))
{
    switch ($_REQUEST['ac']) {
        case 'registrar':
            $jornada->__SET('id_jornada',$_REQUEST['id']);
            $jornada->__SET('descripcion_jornada',$_REQUEST['jornada']);
            $model->crear($jornada);
            header( "Location: jornada-vista.php");
        break;

        case 'actualizar':
            $jornada->__SET('id_jornada',$_REQUEST['id']);
            $jornada->__SET('descripcion_jornada',$_REQUEST['jornada']);
            $model->actualizar($jornada);
            header( "Location: jornada-vista.php");

            break;


        case 'editar':
            $jornada = $model->editar($_REQUEST['id']);
          
            break;


         case 'eliminar':
            $model->eliminar($_REQUEST['id']);
            header( "Location: jornada-vista.php");
            break;

        default:
            #
            break;
    }



}


?>
