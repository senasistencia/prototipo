<?php
class AmbienteModelo{
      private $PDO;

      public function __construct()
      {
        try
        {
          $this->PDO = new PDO("mysql:host=localhost;dbname=senasistencia;charset=utf8","root","");
          $this->PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $error)
        {
          echo "no se conecto a la base de datos codigo de error: ";
          die($error->getMessage());

        }

      }


      public function imprimirTabla()
      {
        try
        {

            $consulta = "SELECT*FROM ambiente_formacion";
            $objeto = $this->PDO->prepare($consulta);
            $objeto->execute();
            $tabla = $objeto->fetchAll(PDO::FETCH_OBJ);
            foreach ($tabla as $fila)
            {
              $ambiente = new Ambiente();
              $ambiente->__SET('id_ambiente',$fila->ID_Ambiente);
              $ambiente->__SET('num_ambiente',$fila->Num_Ambiente);
              $ambiente->__SET('id_sede',$fila->Sede_ID_Sede);
              $result[] = $ambiente;
            }
        }
        catch(Exception $e){
          die($e->getMessage());
        }
        return $result;

      }

      public function crear($datos)
      {
        try
        {
          $consulta = "INSERT INTO ambiente_formacion (ID_Ambiente, Num_Ambiente, Sede_ID_Sede) VALUES (?,?,?)";
          $objeto = $this->PDO->prepare($consulta);
          $objeto->execute(array($datos->__GET('id_ambiente'),$datos->__GET('num_ambiente'),$datos->__GET('id_sede')));

        } catch (Exception $e) {
          die($e->getMessage());
        }

      }

      public function actualizar($datos)
      {
        try
        {
          $consulta = "UPDATE ambiente_formacion SET Num_Ambiente = ?, Sede_ID_Sede = ? WHERE ID_Ambiente = ?";
          $objeto = $this->PDO->prepare($consulta);
          $objeto->execute(array($datos->__GET('num_ambiente'),$datos->__GET('id_sede'),$datos->__GET('id_ambiente')));

        } catch (Exception $e) {
          die($e->getMessage());
        }

      }

      public function editar($id)
      {
        try
        {
          $consulta = "SELECT*FROM ambiente_formacion WHERE ID_Ambiente = ?";
          $objeto = $this->PDO->prepare($consulta);
          $objeto->execute(array($id));
          $campo = $objeto->fetch(PDO::FETCH_OBJ);

          $ambiente = new Ambiente();
          $ambiente->__SET('id_ambiente',$campo->ID_Ambiente);
          $ambiente->__SET('num_ambiente',$campo->Num_Ambiente);
          $ambiente->__SET('id_sede',$campo->Sede_ID_Sede);


        } catch (Exception $e) {
            die($e->getMessage());
        }
        return $ambiente;
      }

      public function eliminar($id)
      {
        try
        {
          $consulta = "DELETE FROM ambiente_formacion WHERE ID_Ambiente = ?";
          $objeto = $this->PDO->prepare($consulta);
          $objeto->execute(array($id));
        }catch(Exception $e){
          echo "<b>¡NO SE PUEDE ELIMINAR EL REGISTRO DEBIDO A QUE OTRAS TABLAS DEPENDE DE ESTE!</b><br /> CAMBIE SU INFORMACION O BORRE LAS TABLAS DEPENDIAENTES<br /> codigo de error: <br />";
          die($e->getMessage());
        }
      }


      public function consultarSede()
      {
        try
        {
          $consulta = "SELECT*FROM sede";
          $objeto= $this->PDO->prepare($consulta);
          $objeto->execute();
          $sede = $objeto->fetchAll(PDO::FETCH_OBJ);
          return $sede;
        } catch (Exception $e) {
          die($e->getMessage());
        }
      }









}


 ?>
