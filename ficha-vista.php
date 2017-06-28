<?php include("header.php"); ?>
 <?php include("menu.php"); ?>
 <?php require("modelo/ficha-modelo.php"); $modelo = new FichaModelo(); ?>
<div class="prog">
<?php foreach($modelo->consultarFicha($id) as $ficha) {?>
  <div class="desplegar">
    <a class="btn-ficha">ficha:<?php echo $ficha->Num_Ficha;?></a>
        <div class="grupos">
          <?php foreach ($modelo->grupo($ficha->ID_Ficha) as $grupo) {?>
            <a href="listado.php?id=<?php echo $ficha->ID_Ficha?>&grup=<?php echo $grupo->ID_Grupo; ?>"><?php echo $grupo->Descripcion_Grupo; ?></a>
          <?php } ?>

        </div>
    </div>
    <?php } ?>
</div>
