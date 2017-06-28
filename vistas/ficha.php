<?php
require("../controlador/ficha-control.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/estilos.css" type="text/css" rel="stylesheet">
    </head>
    <body>
      <h1>fichas</h1>
        <form action="?ac=<?php echo $ficha->__GET('id_ficha') > 0 ? 'actualizar':'registrar';?>" method="post">
          <input type="hidden" name="id" value="<?php echo $ficha->__GET('id_ficha');?>">
          <label>Numero de ficha</label>
          <input type="text" name="num_ficha" value="<?php echo $ficha->__GET('num_ficha');?>" required="true"><br />
          <label>No.Ambiente:</label>
          <select name="ambiente">
            <?php foreach($modelo->consultarAmbiente() as $datos) {?>
                <option value='<?php echo $datos->ID_Ambiente?>' <?php echo $ficha->__GET('id_ambiente') == $datos->ID_Ambiente ? 'selected':'';?> > <?php echo $datos->Num_Ambiente; ?></option>;

            <?php } ?>
          </select><br>
          <label>Programa formacion:</label>
          <select name="programa">
              <?php foreach ($modelo->consultarPrograma() as $datos) {?>
                  <option value='<?php echo $datos->ID_Programa;?>' <?php echo $ficha->__GET('id_programa_formacion')== $datos->ID_Programa ? 'selected':''; ?> ><?php echo $datos->Nombre; ?></option>
            <?php }?>
          </select><br>
          <label>Jornada:</label>
          <select name="jornada">
              <?php foreach ($modelo->consultarJornada() as $datos) { ?>
                  <option value='<?php echo $datos->ID_Jornada ;?>' <?php echo $ficha->__GET('id_jornada') == $datos->ID_Jornada ? 'selected':''; ?>><?php echo $datos->Descripcion_Jornada; ?></option>

              <?php } ?>
          </select><br>
          <label>No.Trimestre</label>
          <select name="trimestre">
              <?php foreach ($modelo->consultarTrimestre() as $datos) {?>
                  <option value='<?php echo $datos->ID_Trimestre ;?>' <?php echo $ficha->__GET('id_trimestre') == $datos->ID_Trimestre ? 'selected':'';?>><?php echo $datos->Num_Trimestre ;?></option>

              <?php } ?>
          </select><br>
          <button class="bt" type="submit">Guardar</button>
        </form>
        <table>
          <thead>
            <th>id</th>
            <th> No.Ficha</th>
            <th>ambiente</th>
            <th>programa</th>
            <th>jornada</th>
            <th>trimestre</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </thead>
          <?php foreach($modelo->imprimirTabla() as $campo){?>
            <tr>
              <td><?php echo $campo->__GET('id_ficha'); ?></td>
              <td><?php echo $campo->__GET('num_ficha');?></td>
              <td><?php echo $campo->__GET('id_ambiente');?></td>
              <td><?php echo $campo->__GET('id_programa_formacion');?></td>
              <td><?php echo $campo->__GET('id_jornada');?></td>
              <td><?php echo $campo->__GET('id_trimestre');?></td>
              <td>
                <button type="button" class="bt" name="button"><a href="?ac=editar&id=<?php echo $campo->__GET('id_ficha');?>">Editar</a></button>
              </td>
              <td>
                <button type="button" class="eliminar" name="button"><a href="?ac=eliminar&id=<?php echo $campo->__GET('id_ficha');?>">Eliminar</a></button>

              </td>
            </tr>
            <?php }?>
        </table>
    </body>
</html>
