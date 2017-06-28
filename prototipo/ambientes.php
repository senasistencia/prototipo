<?php include("header.php"); ?>
<?php include("menu.php"); ?>
<?php require("modelos/ambiente-modelo.php"); $modelo = new AmbienteFormacion();?>
<div class="prog">
  <?php foreach ($modelo->consultarAmbiente() as $campo) {?>
    <a href="" class="centro"><?php echo $campo->Num_Ambiente?></a>
  <?php } ?>

</div>
