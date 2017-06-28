<?php
class CentroFormacionModelo{
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

            $consulta = "SELECT*FROM centro_formacion";
            $objeto = $this->PDO->prepare($consulta);
            $objeto->execute();
            $tabla = $objeto->fetchAll(PDO::FETCH_OBJ);
            foreach ($tabla as $fila)
            {
              $centro = new CentroFormacion();
              $centro->__SET('id_centro',$fila->ID_Centro);
              $centro->__SET('nombre',$fila->Nombre);
              $centro->__SET('direccion',$fila->Direccion); 
              $centro->__SET('telefono',$fila->Telefono);
              $result[] = $centro;
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
          $consulta = "INSERT INTO centro_formacion (ID_Centro, Nombre, Direccion, Telefono) VALUES (?,?,?,?)";
          $objeto = $this->PDO->prepare($consulta);
          $objeto->execute(array($datos->__GET('id_centro'),$datos->__GET('nombre'),$datos->__GET('direccion'),$datos->__GET('telefono')));

        } catch (Exception $e) {
          die($e->getMessage());
        }

      }

      public function actualizar($datos)
      {
        try
        {
          $consulta = "UPDATE centro_formacion SET Nombre = ?, Direccion = ?, Telefono = ? WHERE ID_Centro = ?";
          $objeto = $this->PDO->prepare($consulta);
          $objeto->execute(array($datos->__GET('nombre'),$datos->__GET('direccion'),$datos->__GET('telefono'),$datos->__GET('id_centro')));

        } catch (Exception $e) {
          die($e->getMessage());
        }

      }

      public function editar($id)
      {
        try
        {
          $consulta = "SELECT*FROM centro_formacion WHERE ID_Centro = ?";
          $objeto = $this->PDO->prepare($consulta);
          $objeto->execute(array($id));
          $campo = $objeto->fetch(PDO::FETCH_OBJ);

          $centro = new CentroFormacion();
          $centro->__SET('id_centro',$campo->ID_Centro);
          $centro->__SET('nombre',$campo->Nombre);
          $centro->__SET('direccion',$campo->Direccion);
          $centro->__SET('telefono',$campo->Telefono);

        } catch (Exception $e) {
            die($e->getMessage());
        }
        return $centro;
      }

      public function eliminar($id)
      {
        try
        {
          $consulta = "DELETE FROM centro_formacion WHERE ID_Centro = ?";
          $objeto = $this->PDO->prepare($consulta);
          $objeto->execute(array($id));
        }catch(Exception $e){
          echo "<b>¡NO SE PUEDE ELIMINAR EL REGISTRO DEBIDO A QUE OTRAS TABLAS DEPENDE DE ESTE!</b><br /> CAMBIE SU INFORMACION O BORRE LAS TABLAS DEPENDIAENTES<br /> codigo de error: <br />";
          die($e->getMessage());
        }
      }

}


 ?>