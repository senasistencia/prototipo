<?php
  require("../controlador/ambiente-control.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ambiente</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  </head>
  <body>
    <div class="contenedor">
      <h1>Entrada de registros a ambiente</h1>
        <form  action="?ac=<?php echo $ambiente->__GET('id_ambiente') > 0 ? 'actualizar' : 'registrar';?>" method="post">
            <input type="hidden" name="id" value="<?php echo $ambiente->__GET('id_ambiente');?>"><br />
            <label >Numero de ambiente:</label>
            <input type="text" name="num_ambiente" value="<?php echo $ambiente->__GET('num_ambiente');?>"required="true" ><br />
            <label >Sede:</label>
            <select name="sede">

                <?php
                foreach ($modelo->consultarSede() as $campo )
                {?>
                  <option value="<?php echo $campo->ID_Sede ?>" <?php echo $ambiente->__GET('id_sede') == $campo->ID_Sede ? 'selected' : '';?> > <?php echo $campo->Nombre;?></option>


                <?php }?>

            </select><br />
            <button type="submit" class="bt" name="button">Guardar</button>
        </form>

        <table >
          <thead>
            <th>id</th>
            <th>Numero de ambiente</th>
            <th>Sede</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </thead>
          <?php foreach ( $modelo->imprimirTabla() as $campo) {?>
          <tr>
              <td><?php echo $campo->__GET('id_ambiente'); ?></td>
              <td><?php echo $campo->__GET('num_ambiente'); ?></td>
              <td><?php echo $campo->__GET('id_sede'); ?></td>
              <td>
                <button class="bt" type="button" name="button"><a href="?ac=editar&id=<?php echo $campo->__GET('id_ambiente');?>">Editar</a></button>
              </td>
              <td>
                <button type="button" class="eliminar"><a href="?ac=eliminar&id=<?php echo $campo->__GET('id_ambiente');?>" >Eliminar</a></button>
              </td>
              <?php } ?>
          </tr>
        </table>
    </div>

  </body>
</html>
