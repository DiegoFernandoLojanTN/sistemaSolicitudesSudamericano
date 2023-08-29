<?php

class ControladorPlantilla {
    public function ctrPlantilla(){
        include "vistas/plantilla.php";
    }
}

// Crear una instancia del controlador
$controlador = new ControladorPlantilla();

// Llamar al método para cargar la plantilla
$controlador->ctrPlantilla();

