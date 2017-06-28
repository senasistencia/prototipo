<?php
require("../modelos/aprendices-modelo.php");
require("../clases/aprendices.php");
$modelo= new aprendicesModelo();
$aprendiz = new Aprendices();

if (isset($_REQUEST['ac']))
{
  switch ($_REQUEST['ac']) {
    case 'registrar':
        $aprendiz->__SET('id_aprendiz',$_REQUEST['id']);
        $aprendiz->__SET('documento_aprendiz',$_REQUEST['doc']);
        $aprendiz->__SET('nombre',$_REQUEST['nombre']);
        $aprendiz->__SET('apellido',$_REQUEST['apellido']);
        $aprendiz->__SET('correo',$_REQUEST['correo']);
        $aprendiz->__SET('telefono',$_REQUEST['tel']);
        $aprendiz->__SET('id_genero',$_REQUEST['genero']);
        $aprendiz->__SET('id_estado_aprendiz',$_REQUEST['estado']);
        $aprendiz->__SET('id_tipo_documento',$_REQUEST['tipoDoc']);
        $aprendiz->__SET('id_ficha',$_REQUEST['ficha']);
        $modelo->crear($aprendiz);
        header("Location: aprendices-vista.php");
    break;
    case 'actualizar':
        $aprendiz->__SET('id_aprendiz',$_REQUEST['id']);
        $aprendiz->__SET('documento_aprendiz',$_REQUEST['doc']);
        $aprendiz->__SET('nombre',$_REQUEST['nombre']);
        $aprendiz->__SET('apellido',$_REQUEST['apellido']);
        $aprendiz->__SET('correo',$_REQUEST['correo']);
        $aprendiz->__SET('telefono',$_REQUEST['tel']);
        $aprendiz->__SET('id_genero',$_REQUEST['genero']);
        $aprendiz->__SET('id_estado_aprendiz',$_REQUEST['estado']);
        $aprendiz->__SET('id_tipo_documento',$_REQUEST['tipoDoc']);
        $aprendiz->__SET('id_ficha',$_REQUEST['ficha']);
        $modelo->actualizar($aprendiz);
        header("Location: aprendices-vista.php");
    break;
    case 'editar':
      $aprendiz = $modelo->editar($_REQUEST['id']);//la variable que contiene la clase sera igual a lo que devuelve la funcion del modelo llamada editar
    break;
    case 'eliminar':
      $modelo->eliminar($_REQUEST['id']);
      header("Location: aprendices-vista.php");
    break;
    default:

    break;
  }
}
?>
