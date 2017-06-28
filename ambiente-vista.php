<?php include("header.php"); ?>
 <?php include("menu.php"); ?>
 <?php require("modelo/ambiente-modelo.php"); $modelo = new AmbienteModelo(); ?>
<div class="prog">
    <?php foreach( $modelo->consultarAmbiente($id) as $ambiente) {?>
    <a href="ficha-vista.php?id=<?php echo $ambiente->ID_Ambiente; ?>" class="centro"><?php echo $ambiente->Num_Ambiente; ?></a>
  <?php } ?>
</div>
