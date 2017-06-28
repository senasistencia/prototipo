<?php 

class FormatoModelo{

    private $PDO;

    public function __construct()
    {
        try
        {
            $this->PDO = new PDO("mysql:host=localhost;dbname=senasistencia;charset=utf8","root","");
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo "No pudo conectarse a la base de datos";
            die($e->getMessage());
        }
    }

    //funcion para imprimir la tabla
    public function imprimirTabla()
    {
        try
        {
            $consulta = "SELECT*FROM formato_ftp";
            $objeto = $this->PDO->prepare($consulta);
            $objeto->execute();
            $tabla = $objeto->fetchAll(PDO::FETCH_OBJ);
           foreach ($tabla as $fila) 
           {
                $formato = new FormatoFtp();
                $formato->__SET('id_formato',$fila->ID_Formato);
                $formato->__SET('nombre_notificacion',$fila->Nombre_Notificacion);
                $formato->__SET('url_ftp',$fila->Url_Ftp);   
                $formato->__SET('id_asistencia',$fila->Asistencia_ID_Asistencia);

                $result[]=$formato;   
                   
           }
        }catch(Exception $e)
        {
            die($e->getMessage());
        }
        return $result;
    }

    //funcion para crear un registro en la tabla

    public function crear($datos)
    {
        try
        {
            $consulta = "INSERT INTO formato_ftp (ID_Formato, Nombre_Notificacion, Url_Ftp, Asistencia_ID_Asistencia) VALUES (?,?,?,?)";
            $objeto = $this->PDO->prepare($consulta);
            $objeto->execute(array($datos->__GET('id_formato'),$datos->__GET('nombre_notificacion'),$datos->__GET('url_ftp'),$datos->__GET('id_asistencia')));
            
        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    //funcion para actualizar
    public function actualizar($datos)
    {
        try
        {
            $consulta = "UPDATE formato_ftp SET Nombre_Notificacion = ?,Url_Ftp = ?,Asistencia_ID_Asistencia = ? WHERE ID_Formato = ?";
            $objeto = $this->PDO->prepare($consulta);
            $objeto->execute(array($datos->__GET('nombre_notificacion'),$datos->__GET('url_ftp'),$datos->__GET('id_asistencia'),$datos->__GET('id_formato')));
        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    //funcion para editar
    public function editar($id)
    {
        try
        {
            $consulta = "SELECT*FROM formato_ftp WHERE ID_Formato = ?";
            $objeto = $this->PDO->prepare($consulta);
            $objeto->execute(array($id));
            $campo = $objeto->fetch(PDO::FETCH_OBJ);
            
            $formato = new FormatoFtp();
            $formato->__SET('id_formato',$campo->ID_Formato);
            $formato->__SET('nombre_notificacion',$campo->Nombre_Notificacion);
            $formato->__SET('url_ftp',$campo->Url_Ftp);   
            $formato->__SET('id_asistencia',$campo->Asistencia_ID_Asistencia);
        }catch(Exception $e)
        {
            die($e->getMessage());
        }
        return $formato;
    }

    //funcion para eliminar 
    public function eliminar($id)
    {
        try
        {
            $consulta = "DELETE FROM formato_ftp WHERE ID_Formato = ?";
            $objeto = $this->PDO->prepare($consulta);
            $objeto->execute(array($id));
        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    }


    //funcion para llamar llaves foraneas
    public function consultarAsistencia()
    {
        try
        {
            $consulta = "SELECT*FROM asistencia";
            $objeto = $this->PDO->prepare($consulta);
            $objeto->execute();
            $tabla = $objeto->fetchAll(PDO::FETCH_OBJ);
            return $tabla;
        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

}



?>