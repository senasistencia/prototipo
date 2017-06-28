<?php
  require("../controlador/centro-control.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CentroFormacion</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  </head>
  <body>
    <div class="contenedor">
      <h1>Entrada de registros centro de formacion </h1>
        <form  action="?ac=<?php echo $centro->__GET('id_centro') > 0 ? 'actualizar' : 'registrar';?>" method="post">
            <input type="hidden" name="id" value="<?php echo $centro->__GET('id_centro');?>"><br />
            <label >Nombre del Centro de Formacion:</label>
            <input type="text" name="nombre" value="<?php echo $centro->__GET('nombre');?>"required="true" ><br />
            <label >Direccion:</label>
            <input type"text" name="dir" value="<?php echo $centro->__GET('direccion');?>"required="true" ><br />
            <label >Telefono:</label>
            <input type"text" name="tel" value="<?php echo $centro->__GET('telefono');?>"required"=true" ><br />

            <button type="submit" class="bt" name="button">Guardar</button>
        </form>

        <table >
          <thead>
            <th>id</th>
            <th>Nombre del Centro de Formacion</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </thead>
          <?php foreach ( $modelo->imprimirTabla() as $campo) {?>
          <tr>
              <td><?php echo $campo->__GET('id_centro'); ?></td>
              <td><?php echo $campo->__GET('nombre'); ?></td>
              <td><?php echo $campo->__GET('direccion'); ?></td>
              <td><?php echo $campo->__GET('telefono'); ?></td>
              <td>
                <button class="bt" type="button" name="button"><a href="?ac=editar&id=<?php echo $campo->__GET('id_centro');?>">Editar</a></button>
              </td>
              <td>
                <button type="button" class="eliminar"><a href="?ac=eliminar&id=<?php echo $campo->__GET('id_centro');?>" >Eliminar</a></button>
              </td>
              <?php } ?>
          </tr>
        </table>
    </div>

  </body>
</html>
