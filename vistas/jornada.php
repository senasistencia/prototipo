<?php
include("header.php");
include("menu.php");
require("controlador/jornada-control.php");
?>


    <div class="prog">

        <h1>Ingreso de registros a la tabla jornada</h1>
        <form action="?ac=<?php echo $jornada->__GET('id_jornada') > 0 ? 'actualizar' : 'registrar' ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $jornada->__GET('id_jornada');?>">
            <label>Descripcion jornada:</label>
            <input type="text" name="jornada" value="<?php echo $jornada->__GET('descripcion_jornada');?>" required="true"><br />
            <button type="submit" class="bt">Guardar</button>
            <!--<button type="button" class="bt"><a href="../index.php">Atras</a></button><br />-->
        </form>


          <div class="listado">
            <table class="tabla">
            <tr>
            <th>ID</th>
            <th>JORNADA</th>
             <th>EDITAR</th>
              <th>ELIMINAR</th>
            </tr>

            <?php
                foreach($model->imprimirTabla() as $campo){?>
                <tr id="datos">
                  <td><?php echo $campo->__GET('id_jornada'); ?></td>
                  <td><?php echo $campo->__GET('descripcion_jornada');?></td>
                  <td>
                  <button type="button" class="bt"><a href="?ac=editar&id=<?php echo $campo->__GET('id_jornada');?>" >Editar</a></button>
                </td>
                  <td>
                  <button type="button" class="eliminar"><a href="?ac=eliminar&id=<?php echo $campo->__GET('id_jornada');?>" >Eliminar</a></button>
                  </td>
                </tr>
                <?php } ?>
            </table>
            </div>

    </div>
