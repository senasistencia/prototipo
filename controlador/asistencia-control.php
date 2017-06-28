<?php
require("../modelos/asistencia-modelo.php");
require("../clases/asistencia.php");
$modelo= new asistenciaModelo();
$datos=new Asistencia();
if (isset($_REQUEST['action'])) {
    $datos->__SET('id_asistencia',$_REQUEST['id']);
    $datos->__SET('asistio',$_REQUEST['asistio']);
    $datos->__SET('fecha',$_REQUEST['fecha']);
    $datos->__SET('id_aprendiz',$_REQUEST['id_aprendiz']);
    $datos->__SET('documento_aprendiz',$_REQUEST['documento_aprendiz']);
    $modelo->crearAsistencia($datos);
    header("Location:asistencia-vista.php");
}
?>