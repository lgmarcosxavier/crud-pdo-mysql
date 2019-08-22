<?php
require_once "Conexion.php";

class Crud extends Conexion
{
    public function mostrarDatos()
    {
        $sql = "SELECT id, nombre, sueldo, edad, fRegistro from t_crud";
        $query = Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query->fetchAll(); // obtener los registros de la consulta
        $query->close();
    }

    public function insertarDatos($datos)
    {
        $sql = "INSERT INTO t_crud(nombre, sueldo, edad, fRegistro) VALUES (:nombre, :sueldo, :edad, :fRegistro);";
        $query = Conexion::conectar()->prepare($sql);
        $query->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
        $query->bindParam(":sueldo", $datos['sueldo'], PDO::PARAM_STR);
        $query->bindParam(":edad", $datos['edad'], PDO::PARAM_INT);
        $query->bindParam(":fRegistro", $datos['fecha'], PDO::PARAM_STR);

        return $query->execute();
        $query->close();
    }

    public function obtenerDatos($id)
    {
        $sql = "SELECT id, nombre, sueldo, edad, fRegistro from t_crud WHERE  t_crud.id = :id";
        $query = Conexion::conectar()->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);

        $query->execute();
        return $query->fetch();
        $query->close();
    }

    public function actualizarDatos($datos)
    {
        $sql = "UPDATE t_crud SET t_crud.nombre = :nombre, t_crud.sueldo = :sueldo, t_crud.edad = :edad, t_crud.fRegistro = :fRegistro WHERE t_crud.id = :id";
        $query = Conexion::conectar()->prepare($sql);
        $query->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
        $query->bindParam(":sueldo", $datos['sueldo'], PDO::PARAM_STR);
        $query->bindParam(":edad", $datos['edad'], PDO::PARAM_INT);
        $query->bindParam(":fRegistro", $datos['fecha'], PDO::PARAM_STR);
        $query->bindParam(":id", $datos['id'], PDO::PARAM_INT);

        return $query->execute();
        $query->close();
    }

    public function eliminarDatos($id){
        $sql = "DELETE FROM t_crud WHERE  t_crud.id = :id";
        $query = Conexion::conectar()->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        return $query->execute();
        $query->close();
    }
}
