<?php
class asistenciaModelo{
    private $PDO;
  public function __construct()
    {
      try{
            $this->PDO= new PDO("mysql:host=localhost;dbname=senasistencia;charset=utf8","root","");
              $this->PDO->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $error){
                echo "No hay conexion con la base de datos ";
                die($error->getMessage());
            }
    }
public function crearAsistencia($campos)
{
    $consulta= "INSERT INTO asistencia (ID_Asistencia,Descripcion_Asistencia,Fecha,Aprendices_ID_Aprendiz,Aprendices_Documento_Aprendiz) INTO (?,?,?,?,?)";
    $respuesta=$this->PDO->prepare($consulta);
    $respuesta->execute(array($campos->__GET("id_asistencia"),$campos->__GET("asistio"),$campos->__GET("fecha"),$campos->__GET("id_aprendiz"),$campos->__GET("documento_aprendiz")));
}
public function consultarAprendiz()
{
    $consulta= "SELECT * FROM aprendices";
    $respuesta->execute();
    $tabla=$respuesta->fetchAll(PDO::FETCH_OBJ);
         foreach ($tabla as $fila)
         {
             echo "<option values='$fila->ID_Aprendiz'>$fila->Documento_Aprendiz</option><br>";
         }
}
}
?>
