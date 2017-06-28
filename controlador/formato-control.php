<?php 
require("../clases/formatoftp.php");
require("../modelos/formato-modelo.php");
$formato = new FormatoFtp();
$modelo = new FormatoModelo();

if(isset($_REQUEST['ac']))
{
    switch($_REQUEST['ac'])
    {
       case 'registrar':
            $formato->__SET('id_formato',$_REQUEST['id']);
            $formato->__SET('nombre_notificacion',$_REQUEST['nombreN']);
            $formato->__SET('url_ftp',$_REQUEST['url']);
            $formato->__SET('id_asistencia',$_REQUEST['idAs']);
            $modelo->crear($formato);
            header("Location: formato-vista.php");
        break; 
        case 'actualizar':
            $formato->__SET('id_formato',$_REQUEST['id']);
            $formato->__SET('nombre_notificacion',$_REQUEST['nombreN']);
            $formato->__SET('url_ftp',$_REQUEST['url']);
            $formato->__SET('id_asistencia',$_REQUEST['idAs']);
            $modelo->actualizar($formato);
            header("Location: formato-vista.php");
        break;
        case 'editar':
                $formato = $modelo->editar($_REQUEST['id']);
        break;
        case 'eliminar':
            $modelo->eliminar($_REQUEST['id']);
            header("Location: formato-vista.php");
            break;
    }
}
?>