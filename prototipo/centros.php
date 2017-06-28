
<?php include("header.php"); ?>
 <?php include("menu.php"); ?>
 <?php require("modelos/centros-modelo.php");  $modelo = new Centro();?>
 <div class="prog">

   <?php foreach ($modelo->consultaCentros() as $centro) {?>
      <a href="?ac=ambiente&id=<?php echo $centro->ID_Centro; ?>" class="centro"><?php echo $centro->Nombre ;?></a>
   <?php }?>





 </div>
