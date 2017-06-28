<?php include("header.php"); ?>
<?php include("menu.php"); ?>
<?php require("modelo/sede-modelo.php"); $modelo = new SedeModelo();?>

<div class="prog">

  <?php foreach ( $modelo->consultarSede($id) as $sede) {?>
    <a href="ambiente-vista.php?id=<?php echo $sede->ID_Sede;?>" class="centro"><?php echo $sede->Nombre ?></a>
  <?php } ?>
</div>
