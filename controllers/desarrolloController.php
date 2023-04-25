<?php
include __DIR__ . '/../models/desarrolloModel.php';

class DesarrolloController
{

    function listar()
    {
        $lista_desarrollos = new Desarrollo();
        $lista_desarrollos = $lista_desarrollos->listar();

        return $lista_desarrollos;
    }

    function optenerDesarrollo($id)
    {
        $id = intval($id);
        $lista_desarrollos = new Desarrollo();
        $lista_desarrollos = $lista_desarrollos->obtener_desarrollo($id);

        return $lista_desarrollos;
    }

    function agregar($datos)
    {
        if (isset($_POST["action"]) && $_POST["action"] == "Agregar") {
            $name_develop = $datos["name_develop"];
            $name_develop = strtoupper($name_develop);
            $agregar = new Desarrollo();
            $agregar->agregar($name_develop);
        }
    }

    function editar($id, $datos)
    {

        if (isset($_POST["action"]) && $_POST["action"] == "Modificar") {
            $name_develop = $datos["name_develop"];
            $name_develop = strtoupper($name_develop);
            $modificar = new Desarrollo();
            $modificar->modificar($id, $name_develop);

            $msg = '<div class="alert alert-success bg-gradient-success text-light" role="alert">
            "Se actualizo el registro correctamente"
          </div>';

            return $msg;
        }
    }

    function borrar($id)
    {
        
    }
}
