<?php

require_once("conexion.php");

class modeloCarrera
{
    public $carrera_id;
    public $nombre;

    public function __construct()
    {
        $this->carrera_id = "";
        $this->nombre = "";
    }


    public function consultarCarreras()
    {
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $query = "SELECT * FROM Carrera";
        $result = $conex->query($query);
        return $result;
    }

    public function insertarCarrera($nombre)
    {
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $query = "INSERT INTO Carrera (nombre) VALUES ('$nombre')";
        $result = $conex->query($query);
        return $result;
    }

    public function actualizarCarrera($carrera_id, $nombre)
    {
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $query = "UPDATE Carrera SET nombre = '$nombre' WHERE carrera_id = $carrera_id";
        $result = $conex->query($query);
        return $result;
    }

    public function eliminarCarrera($carrera_id)
    {
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $query = "DELETE FROM Carrera WHERE carrera_id = $carrera_id";
        $result = $conex->query($query);
        return $result;
    }
}
