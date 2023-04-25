<?php
include __DIR__ . '/conexion.php';

class Desarrollo
{

    function agregar($data_request)
    {
        $pdo = new Conexion();
        $pdo = $pdo->connect();
        $sql = "INSERT INTO desarrollos (nombre) VALUES (?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$data_request]);
        $pdo = null;
    }

    function obtener_desarrollo($id)
    {
        $pdo = new Conexion();
        $pdo = $pdo->connect();

        $stmt = $pdo->query("SELECT * FROM desarrollos WHERE id = $id");
        $desarrollo = $stmt->fetch();
        return $desarrollo;
    }

    function listar()
    {
        $pdo = new Conexion();
        $pdo = $pdo->connect();

        $stmt = $pdo->query("SELECT * FROM desarrollos");
        $desarrollos = $stmt->fetchAll();
        return $desarrollos;
    }

    function modificar($id, $datos)
    {
        $id = intval($id);
        $pdo = new Conexion();
        $pdo = $pdo->connect();
        $sql = "UPDATE desarrollos SET nombre = (?) WHERE id = $id;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$datos]);
        $pdo = null;
    }

    function eliminar($id)
    {
        
    }
}
