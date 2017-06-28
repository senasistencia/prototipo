<?php include("header.php"); ?>
 <?php include("menu.php"); ?>
 <?php require("modelo/aprendiz-modelo.php"); $modelo = new AprendizModelo(); ?>
<div class="listas">
  <h2>Listado de aprendices</h2>
  <div class="listado">
    <table class="tabla" >
      <tr>
        <td>Identificacion</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Asistio</td>
      </tr>
      <?php foreach ($modelo->consultarAprendiz($id) as $aprendiz) {?>
        <tr id="datos">
          <td><?php echo $aprendiz->Documento_Aprendiz;?></td>
          <td><?php echo $aprendiz->Nombre;?></td>
          <td><?php echo $aprendiz->Apellido;?></td>
          <td><input type="checkbox" id="<?php echo $aprendiz->ID_Aprendiz?>">
            <label for="<?php echo $aprendiz->ID_Aprendiz?>"></label></td>
        </tr>
    <?php } ?>


    </table>
  </div>
  <section id="main">
  <a href="#ventana" id="envio">Enviar</a>
  </section>
<!--<script type="text/javascript" >
  var mensaje = document.getElementById('envio').addEventListener("click",mensaje);
  function mensaje(){
    alert("su listado se a enviado exitosamente");
  }
</script>
--->
</div>

<section id="ventana">
  <section id="contenido">
    <a href="#closed"><i class="fa fa-window-close" aria-hidden="true" id="x"></i></a>
    <h2>listado</h2>
    <p>el registro de asistencia se a enviado de forma satisfactoria</p>
<i class="fa fa-check" aria-hidden="true" id="chulo"></i>
  </section>
</section>
