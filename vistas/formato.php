<?php
require("../controlador/formato-control.php");
?>
<html>
<head>
    <title>formato ftp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
    <h1>formato ftp</h1>
    <form action="?ac=<?php echo $formato->__GET('id_formato') > 0 ? 'actualizar':'registrar'; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $formato->__GET('id_formato') ;?>">
        <label >Nombre Notificacion</label>
        <input type="text" name="nombreN" value="<?php echo $formato->__GET('nombre_notificacion') ;?>" required="true"><br />
        <label> URL del formato</label>
        <input type="text" name="url" value="<?php echo $formato->__GET('url_ftp') ;?>"><br />
        <label >asistencia </label>
        <select name="idAs">

            <?php foreach ( $modelo->consultarAsistencia() as $dato) {?>
               <option value="<?php echo $dato->ID_Asistencia ?>" <?php echo $formato->__GET('id_asistencia') == $dato->ID_Asistencia ? 'selected':''?> ><?php echo $dato->Descripcion_Asistencia ?></option>
            <?php }?>

        </select><br />
        <button class="bt" type="submit">Guardar</button>
    </form>

    <table>
        <thead>
            <th>id</th>
            <th colspan="2">nombre notificaion</th>
            <th>url formato</th>
            <th>asistencia</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <?php foreach ($modelo->imprimirTabla() as $campo) {?>
            <tr>
                <td><?php echo $campo->__GET('id_formato');?></td>
                <td colspan="2"><?php echo $campo->__GET('nombre_notificacion');?></td>
                <td><?php echo $campo->__GET('url_ftp');?></td>
                <td><?php echo $campo->__GET('id_asistencia');?></td>
                <td>
                <button type="button" class="bt" ><a href="?ac=editar&id=<?php echo $campo->__GET('id_formato');?>">Editar</a></button>
                </td>
                <td>
                <button type="button" class="eliminar" ><a href="?ac=eliminar&id=<?php echo $campo->__GET('id_formato');?>">Eliminar</a></button>
                </td>
            </tr>
       <?php }?>
    </table>




</body>
</html>
