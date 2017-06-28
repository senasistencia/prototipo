<?php
class Enrutador{

  public function Enrutar($op)
  {


    switch ($op) {
      case 'centro':
        $archivo = "vistas/centro-vista.php";
      break;

      case 'sede':
        $archivo = "vistas/sede-vista.php";
      break;

      case 'ambiente':
        $archivo = "vistas/ambiente-vista.php";
      break;

      case 'ficha':
        $archivo = "vistas/ficha-vista.php";
      break;

      case 'jornada':
        $archivo = "vistas/jornada-vista.php";
      break;

      case 'programa':
        $archivo = "vistas/programa-vista.php";
      break;

      case 'trimestre':
        $archivo = "vistas/trimestre-vista.php";
      break;

      case 'aprendices':
        $archivo = "vistas/aprendices-vista.php";
      break;

      case 'asistencia':
        $archivo = "vistas/asistencia-vista.php";
      break;

      case 'cargo':
        $archivo = "vistas/cargo-vista.php";
      break;

      case 'cliente':
        $archivo = "vistas/cliente-vista.php";
      break;

      case 'estadoA':
        $archivo = "vistas/estadoA-vista.php";
      break;

      case 'estadoU':
        $archivo = "vistas/estadoU-vista.php";
      break;

      case 'excusa':
        $archivo = "vistas/excusa-vista.php";
      break;

      case 'formato':
        $archivo = "vistas/formato-vista.php";
      break;

      case 'genero':
        $archivo = "vistas/genero-vista.php";
      break;

      case 'grupo':
        $archivo = "vistas/grupo-vista.php";
      break;

      case 'notificacion':
        $archivo = "vistas/notificacion-vista.php";
      break;

      case 'pass':
        $archivo = "vistas/password-vista.php";
      break;

      case 'perfiles':
        $archivo = "vistas/perfiles-vista.php";
      break;

      case 'tipoDoc':
        $archivo = "vistas/tipoDoc-vista.php";
      break;

      case 'usuario':
        $archivo = "vistas/usuarios-vista.php";
      break;
   
      default:
        //$archivo = "index.php";
      break;

    }
    return $archivo;
  }



}


?>
