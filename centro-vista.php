
<?php include("header.php"); ?>
 <?php include("menu.php"); ?>
 <?php require("modelo/centro-modelo.php");  $modelo = new Centro();?>
  <div class="prog">

   <?php foreach ($modelo->consultaCentros() as $centro) {?>
      <a href="sede-vista.php?id=<?php echo $centro->ID_Centro ;?>" class="centro"><?php echo $centro->Nombre ;?></a>
   <?php }?>

 </div>
