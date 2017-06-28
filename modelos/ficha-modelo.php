<?php
    class FichaModelo{
       private $PDO;
       public function __construct()
       {
           try{
              $this->PDO = new PDO("mysql:host=localhost;dbname=senasistencia;charset=utf8","root","");
              $this->PDO->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

            }
            catch(PDOException $error){
                echo "No hay conexion con la base de datos ";
                die($error->getMessage());
            }

       }

       public function crearFicha($campos)
       {
           $consulta = "INSERT INTO ficha (ID_Ficha, Num_Ficha, Ambiente_ID_Ambiente, programa_formacion_ID_Programa, jornada_ID_Jornada, trimestre_ID_Trimestre) VALUES (?,?,?,?,?,?)";
           $respuesta=$this->PDO->prepare($consulta);
           $respuesta->execute(array($campos->__GET("id_ficha"),$campos->__GET("num_ficha"),$campos->__GET("id_ambiente"),$campos->__GET("id_programa_formacion"),$campos->__GET("id_jornada"),$campos->__GET("id_trimestre")));
       }

       public function actualizar($campos)
       {
         try
         {
            $consulta = "UPDATE ficha SET Num_Ficha=?,Ambiente_ID_Ambiente=?,programa_formacion_ID_Programa=?,jornada_ID_Jornada=?,trimestre_ID_Trimestre= ? WHERE ID_Ficha = ?";
            $respuesta = $this->PDO->prepare($consulta);
            $respuesta->execute(array($campos->__GET('num_ficha'),$campos->__GET('id_ambiente'),$campos->__GET('id_programa_formacion'),$campos->__GET('id_jornada'),$campos->__GET('id_trimestre'),$campos->__GET('id_ficha'),));
         } catch (Exception $e) {
            die($e->getMessage());
         }
       }

       public function editar($id)
       {
         try
         {
            $consulta = "SELECT * FROM ficha WHERE ID_Ficha = ?";
            $respuesta = $this->PDO->prepare($consulta);
            $respuesta->execute(array($id));
            $campo= $respuesta->fetch(PDO::FETCH_OBJ);
            $ficha = new Ficha();
            $ficha->__SET('id_ficha',$campo->ID_Ficha);
            $ficha->__SET('num_ficha',$campo->Num_Ficha);
            $ficha->__SET('id_ambiente',$campo->Ambiente_ID_Ambiente);
            $ficha->__SET('id_programa_formacion',$campo->programa_formacion_ID_Programa);
            $ficha->__SET('id_jornada',$campo->jornada_ID_Jornada);
            $ficha->__SET('id_trimestre',$campo->trimestre_ID_Trimestre);

          } catch (Exception $e) {
           die($e->getMessage());
         }
         return $ficha;
       }


       public function eliminar($id)
       {
         try
         {
            $consulta = "DELETE FROM ficha WHERE ID_Ficha = ?";
            $respuesta = $this->PDO->prepare($consulta);
            $respuesta->execute(array($id));
         } catch (Exception $e) {
           echo "<b>¡NO SE PUEDE ELIMINAR EL REGISTRO DEBIDO A QUE OTRAS TABLAS DEPENDE DE ESTE!</b><br /> CAMBIE SU INFORMACION O BORRE LAS TABLAS DEPENDIAENTES<br /> codigo de error: <br />";
           die($e->getMessage());
         }

       }


     public function imprimirTabla()
     {
        try
        {

          $consulta="SELECT * FROM ficha";
          $respuesta=$this->PDO->prepare($consulta);
          $respuesta->execute();
          $tabla=$respuesta->fetchAll(PDO::FETCH_OBJ);
          foreach ($tabla as $fila)
          {
              $ficha = new Ficha();
              $ficha->__SET('id_ficha',$fila->ID_Ficha);
              $ficha->__SET('num_ficha',$fila->Num_Ficha);
              $ficha->__SET('id_ambiente',$fila->Ambiente_ID_Ambiente);
              $ficha->__SET('id_programa_formacion',$fila->programa_formacion_ID_Programa);
              $ficha->__SET('id_jornada',$fila->jornada_ID_Jornada);
              $ficha->__SET('id_trimestre',$fila->trimestre_ID_Trimestre);
              $result[] = $ficha;
          }

        } catch (Exception $e) {
          die($e->getMessage());
        }
        return $result;
     }
     public function consultarAmbiente()
     {
         $respuesta=$this->PDO->prepare("SELECT * FROM ambiente_formacion");
         $respuesta->execute();
         $tabla=$respuesta->fetchAll(PDO::FETCH_OBJ);
         return $tabla;
     }
    public function consultarPrograma()
     {
         $respuesta=$this->PDO->prepare("SELECT * FROM programa_formacion");
         $respuesta->execute();
         $tabla=$respuesta->fetchAll(PDO::FETCH_OBJ);
         return $tabla;
     }
     public function consultarJornada()
     {
         $respuesta=$this->PDO->prepare("SELECT * FROM jornada");
         $respuesta->execute();
         $tabla=$respuesta->fetchAll(PDO::FETCH_OBJ);
         return $tabla;
     }

     public function consultarTrimestre()
     {
         $respuesta=$this->PDO->prepare("SELECT * FROM trimestre");
         $respuesta->execute();
         $tabla=$respuesta->fetchAll(PDO::FETCH_OBJ);
         return $tabla;
     }






















}
?>
