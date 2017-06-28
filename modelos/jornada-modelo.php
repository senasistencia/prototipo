<?php
class JornadaModelo{

    private $PDO;

    public function __construct()
    {
      try
      {
          $this->PDO = new PDO("mysql:host=localhost;dbname=senasistencia;charset=utf8","root","");
          $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch(PDOException $error)
      {
          echo "no se púdo conectar a la base de datos ";
          die($error->getMessage());
      }
    }
#imprime la tabla
    public function imprimirTabla()
    {
      try
      {
        $sql = "SELECT*FROM jornada";
        $stm = $this->PDO->prepare($sql);
        $stm->execute();
        $tabla = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach($tabla as $c)
        {
            $jor = new Jornada();
            $jor->__SET('id_jornada',$c->ID_Jornada);
            $jor->__SET('descripcion_jornada',$c->Descripcion_Jornada);
            $resultado[]=$jor;
        }
      } catch (Exception $e) {
        die($e->getMessage());
      }


        return $resultado;
    }

#hace una consulta segun el id seleccionado y lo pone en los campos
    public function editar($id)
    {
      try
      {
        $sql = "SELECT * FROM jornada WHERE ID_Jornada = ?";
        $stm = $this->PDO->prepare($sql);
        $stm->execute(array($id));
        $campo = $stm->fetch(PDO::FETCH_OBJ);
        $jornada = new Jornada();
        $jornada->__SET('id_jornada',$campo->ID_Jornada);
        $jornada->__SET('descripcion_jornada',$campo->Descripcion_Jornada);

      } catch (Exception $e) {
        die($e->getMessage());
      }

        return $jornada;


    }

#crea de cero un registro en la base de datos
   public  function crear($datos)
   {
      try
      {
        $sql = "INSERT INTO jornada  (ID_Jornada,Descripcion_Jornada) VALUES (?,?)";
        $stm = $this->PDO->prepare($sql);
        $stm->execute( array($datos->__GET('id_jornada'),$datos->__GET('descripcion_jornada')));
      } catch (Exception $e) {
        die($e->getMessage());
      }
    }
    #actualiza los datos de un registro ya existente
    public function actualizar($datos)
    {
      try
      {
        $sql = "UPDATE jornada SET Descripcion_Jornada = ? WHERE ID_Jornada = ?";
        $stm = $this->PDO->prepare($sql);
        $stm->execute(array($datos->__GET('descripcion_jornada'),$datos->__GET('id_jornada')));
      } catch (Exception $e) {
        die($e->getMessage());
      }
    }
#elimina un registro
    public function eliminar($id)
    {
      try
      {
        $sql = "DELETE FROM jornada WHERE ID_Jornada = ?";
        $stm = $this->PDO->prepare($sql);
        $stm->execute(array($id));

      } catch (Exception $e) {
        echo "<b>¡NO SE PUEDE ELIMINAR EL REGISTRO DEBIDO A QUE OTRAS TABLAS DEPENDE DE ESTE!</b><br /> CAMBIE SU INFORMACION O BORRE LAS TABLAS DEPENDIAENTES<br /> codigo de error: <br />";
        die($e->getMessage());
      }
    }


}


?>
