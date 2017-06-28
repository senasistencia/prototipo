<?php
class aprendicesModelo{
  private $PDO;
  public function __construct()
    {
      try{
            $this->PDO= new PDO("mysql:host=localhost;dbname=senasistencia;charset=utf8","root","");
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
              echo "No hay conexion con la base de datos ";
              die($e->getMessage());
            }
    }
    //imprimir tabla
    public function imprimirTabla()
    {
      try
      {
        $consulta="SELECT * FROM aprendices";
        $respuesta=$this->PDO->prepare($consulta);
        $respuesta->execute();
        $tabla=$respuesta->fetchAll(PDO::FETCH_OBJ);
        foreach ($tabla as $fila)
        {
          $aprendiz = new Aprendices();
          $aprendiz->__SET('id_aprendiz',$fila->ID_Aprendiz);
          $aprendiz->__SET('documento_aprendiz',$fila->Documento_Aprendiz);
          $aprendiz->__SET('nombre',$fila->Nombre);
          $aprendiz->__SET('apellido',$fila->Apellido);
          $aprendiz->__SET('correo',$fila->Correo);
          $aprendiz->__SET('telefono',$fila->Telefono);
          $aprendiz->__SET('id_genero',$fila->Genero_ID_Genero);
          $aprendiz->__SET('id_estado_aprendiz',$fila->Estado_aprendiz_ID_Estado);
          $aprendiz->__SET('id_tipo_documento',$fila->Tipo_Documento_ID_Tipo_Documento);
          $aprendiz->__SET('id_ficha',$fila->ficha_ID_Ficha);
          $result[]=$aprendiz;
        }
      } catch (Exception $e) {
        die($e->getMessage());
      }
      return $result;
    }


     public function crear($campos)
     {
       try
       {
         $consulta="INSERT INTO aprendices (ID_Aprendiz,Documento_Aprendiz,Nombre,Apellido,Correo,Telefono,Genero_ID_Genero,Estado_aprendiz_ID_Estado,Tipo_Documento_ID_Tipo_Documento,Ficha_ID_Ficha ) VALUES (?,?,?,?,?,?,?,?,?,?)";
         $respuesta=$this->PDO->prepare($consulta);
         $respuesta->execute(array($campos->__GET("id_aprendiz"),$campos->__GET("documento_aprendiz"),$campos->__GET("nombre"),$campos->__GET("apellido"),$campos->__GET("correo"),$campos->__GET("telefono"),$campos->__GET("id_genero"),$campos->__GET("id_estado_aprendiz"),$campos->__GET("id_tipo_documento"),$campos->__GET("id_ficha")));
       } catch (Exception $e) {
         die($e->getMessage());
       }
     }

     public function actualizar($campos)
     {
       try
       {
        $consulta = "UPDATE aprendices SET Documento_Aprendiz = ?,Nombre = ?,Apellido = ?,Correo = ?,Telefono = ?,Genero_ID_Genero = ?,Estado_aprendiz_ID_Estado = ?,Tipo_Documento_ID_Tipo_Documento = ?,ficha_ID_Ficha = ? WHERE ID_Aprendiz = ?";
        $respuesta=$this->PDO->prepare($consulta);
        $respuesta->execute(array($campos->__GET('documento_aprendiz'),$campos->__GET("nombre"),$campos->__GET("apellido"),$campos->__GET("correo"),$campos->__GET("telefono"),$campos->__GET("id_genero"),$campos->__GET("id_estado_aprendiz"),$campos->__GET("id_tipo_documento"),$campos->__GET("id_ficha"),$campos->__GET("id_aprendiz")));
       } catch (Exception $e) {
         die($e->getMessage());
       }
     }

     public function editar($id)
    {
      try
      {
          $consulta ="SELECT*FROM aprendices WHERE ID_Aprendiz = ?";
          $objeto = $this->PDO->prepare($consulta);
          $objeto->execute(array($id));
          $campo = $objeto->fetch(PDO::FETCH_OBJ);

          $aprendiz = new Aprendices();
          $aprendiz->__SET('id_aprendiz',$campo->ID_Aprendiz);
          $aprendiz->__SET('documento_aprendiz',$campo->Documento_Aprendiz);
          $aprendiz->__SET('nombre',$campo->Nombre);
          $aprendiz->__SET('apellido',$campo->Apellido);
          $aprendiz->__SET('correo',$campo->Correo);
          $aprendiz->__SET('telefono',$campo->Telefono);
          $aprendiz->__SET('id_genero',$campo->Genero_ID_Genero);
          $aprendiz->__SET('id_estado_aprendiz',$campo->Estado_aprendiz_ID_Estado);
          $aprendiz->__SET('id_tipo_documento',$campo->Tipo_Documento_ID_Tipo_Documento);
          $aprendiz->__SET('id_ficha',$campo->ficha_ID_Ficha);
       
      } catch (Exception $e) {
          die($e->getMessage());
      }
      return $aprendiz;
    }

    public function eliminar($id)
    {
      try
      {
        $consulta = "DELETE FROM aprendices WHERE ID_Aprendiz = ?";
        $objeto = $this->PDO->prepare($consulta);
        $objeto->execute(array($id));

      } catch (Exception $e) {
        echo "<b>¡NO SE PUEDE ELIMINAR EL REGISTRO DEBIDO A QUE OTRAS TABLAS DEPENDE DE ESTE!</b><br /> CAMBIE SU INFORMACION O BORRE LAS TABLAS DEPENDIAENTES<br /> codigo de error: <br />";
        die($e->getMessage());
      }
    }

     public function consultarFicha()
     {
          $consulta="SELECT * FROM ficha";
          $respuesta=$this->PDO->prepare($consulta);
          $respuesta->execute();
          $tabla=$respuesta->fetchAll(PDO::FETCH_OBJ);
          return $tabla;
     }
     public function consultarDocumento()
     {
            $consulta="SELECT * FROM tipo_documento";
            $respuesta=$this->PDO->prepare($consulta);
            $respuesta->execute();
            $tabla=$respuesta->fetchAll(PDO::FETCH_OBJ);
            return $tabla;
     }
     public function consultarGenero()
     {
          $consulta="SELECT * FROM genero";
          $respuesta=$this->PDO->prepare($consulta);
          $respuesta->execute();
          $tabla=$respuesta->fetchAll(PDO::FETCH_OBJ);
          return $tabla;
     }
     public function consultarEstado()
     {
          $consulta="SELECT * FROM estado_aprendiz";
          $respuesta=$this->PDO->prepare($consulta);
          $respuesta->execute();
          $tabla=$respuesta->fetchAll(PDO::FETCH_OBJ);
          return $tabla;
    }
}
?>
