<?php
    class Conexion{
        public function conectar(){
            $conexion = new PDO("mysql:host=localhost;dbname=pdo-crud-mysql", "root", "");
            return $conexion;
        }
    }
?>