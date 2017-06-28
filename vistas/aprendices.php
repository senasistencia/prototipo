<?php
require("../controlador/aprendices-control.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/estilos.css?1.1.0" type="text/css" rel="stylesheet">
    </head>
    <body>
        <form action="?ac=<?php echo $aprendiz->__GET('id_aprendiz') > 0 ? 'actualizar': 'registrar'?>" method="post">
          <input type="hidden" name="id" value="<?php echo $aprendiz->__GET('id_aprendiz');?>">
          <label>Nombre:</label>
          <input type="text" name="nombre" value="<?php echo $aprendiz->__GET('nombre');?>" required="true"><br />
          <label>Apellido:</label>
          <input type="text" name="apellido" value="<?php echo $aprendiz->__GET('apellido');?>" required="true"><br />
          <label>Correo:</label>
          <input type="email" name="correo" value="<?php echo $aprendiz->__GET('correo');?>" required="true"><br />
          <label>Telefono:</label>
          <input type="number" name="tel" value="<?php echo $aprendiz->__GET('telefono');?>" required="true"><br />

          <label>No.Doc:</label>
          <input type="number" name="doc" value="<?php echo $aprendiz->__GET('documento_aprendiz');?>"required="true">
          <label>tipo.doc:</label>
          <select name="tipoDoc">
              <?php  foreach ($modelo->consultarDocumento() as $datos) {?>
               <option value='<?php echo $datos->ID_Tipo_Documento;?>' <?php echo $aprendiz->__GET('id_tipo_documento') ==$datos->ID_Tipo_Documento ? 'selected':'';?> ><?php echo $datos->Descripcion_Doc; ?></option>
              <?php } ?>
          </select><br>

          <label>Genero:</label>
          <select name="genero">|
              <?php  foreach ($modelo->consultarGenero() as $datos) {?>
               <option value='<?php echo $datos->ID_Genero ;?>' <?php echo $aprendiz->__GET('id_genero') ==$datos->ID_Genero ? 'selected':'';?> ><?php echo $datos->Descripcion_Genero; ?></option>
              <?php } ?>
          </select><br>

          <label>Estado aprendiz:</label>
          <select name="estado">
              <?php  foreach ($modelo->consultarEstado() as $datos) {?>
               <option value='<?php echo $datos->ID_Estado ;?>' <?php echo $aprendiz->__GET('id_estado_aprendiz') ==$datos->ID_Estado ? 'selected':'';?> ><?php echo $datos->Descripcion_Estado; ?></option>
              <?php } ?>
          </select><br>

          <label>No.Ficha:</label>
          <select name="ficha">
            <?php  foreach ($modelo->consultarFicha() as $datos) {?>
             <option value='<?php echo $datos->ID_Ficha ;?>' <?php echo $aprendiz->__GET('id_ficha') ==$datos->ID_Ficha ? 'selected':'';?> ><?php echo $datos->Num_Ficha; ?></option>
            <?php } ?>
          </select><br>
          <button class="bt" type="submit">Guardar</button>
       <form>
                <table>
                    <thead>
                    <th>Documento</th>
                    <th>Tipo de Documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>correo</th>
                    <th>tel.</th>
                    <th>Genero</th>
                    <th>Estado</th>
                    <th>ficha</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>
                    <?php foreach($modelo->imprimirTabla() as $campo){?>
                        <tr>
                            <td><?php echo $campo->__GET('documento_aprendiz')?></td>
                            <td><?php echo $campo->__GET('id_tipo_documento')?></td>
                            <td><?php echo $campo->__GET('nombre')?></td>
                            <td><?php echo $campo->__GET('apellido')?></td>
                            <td><?php echo $campo->__GET('correo')?></td>
                            <td><?php echo $campo->__GET('telefono')?></td>
                            <td><?php echo $campo->__GET('id_genero')?></td>
                            <td><?php echo $campo->__GET('id_estado_aprendiz')?></td>
                            <td><?php echo $campo->__GET('id_ficha')?></td>
                            <td>
                            <button type="button" class="bt" ><a href="?ac=editar&id=<?php echo $campo->__GET('id_aprendiz');?>">Editar</a></button>
                            </td>
                            <td>
                            <button type="button" class="eliminar" ><a href="?ac=eliminar&id=<?php echo $campo->__GET('id_aprendiz');?>">Eliminar</a></button>
                            </td>
                        </tr>
                    <?php }?>
                </table>
             </form>
         </form>
    </body>
</html>
