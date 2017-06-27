<?php include("header.php"); ?>
 <?php include("menu.php"); ?>
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
      <tr id="datos">
        <td>1085914485</td>
        <td>MAURICIO JAVIER</td>
        <td>BRAVO OBANDO</td>
        <td><input type="checkbox" id="a">
          <label for="a"></label></td>
      </tr>
      <tr id="datos">
        <td>1061705482</td>
        <td>MONICA ANDREA</td>
        <td>CABRERA BEDOYA</td>
        <td><input type="checkbox" id="b">
          <label for="b"></label></td>
      </tr>
      <tr id="datos">
        <td>1061734250</td>
        <td>ERAZO CASTRO</td>
        <td>LUIS FELIPE</td>
        <td><input type="checkbox" id="c">
          <label for="c"></label></td>
      </tr>
      <tr id="datos">
        <td>1060989140</td>
        <td>JIMENEZ JIMENEZ</td>
        <td>CLAUDIA SOCORRO</td>
        <td><input type="checkbox" id="d">
          <label for="d"></label></td>
      </tr>
      <tr id="datos">
        <td>1120561633</td>
        <td>DEBORA</td>
        <td>CABEZAS PARADA</td>
        <td><input type="checkbox" id="e">
          <label for="e"></label></td>
      </tr><tr id="datos">
        <td>1143949628</td>
        <td>JULIAN CAMILO</td>
        <td>VELASQUEZ PAZ</td>
        <td><input type="checkbox" id="f">
          <label for="f"></label></td>
      </tr>
      <tr id="datos">
        <td>1061707177</td>
        <td>KAROL JOE</td>
        <td>SANCHEZ ROJAS</td>
        <td><input type="checkbox" id="g">
          <label for="g"></label></td>
      </tr>
      <tr id="datos">
        <td>1004418510</td>
        <td>AMANDA</td>
        <td>PARRA CAMPOS</td>
        <td><input type="checkbox" id="h">
          <label for="h"></label></td>
      </tr>
      <tr id="datos">
        <td>1061707177</td>
        <td>MEYLIN VIVIANA</td>
        <td>BARRERA MURIEL</td>
        <td><input type="checkbox" id="i">
          <label for="i"></label></td>
      </tr>
      <tr id="datos">
        <td>1023017475</td>
        <td>ALMA MARCELA</td>
        <td>SILVA DE ALEGRIA</td>
        <td><input type="checkbox" id="j">
          <label for="j"></label></td>
      </tr>
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
