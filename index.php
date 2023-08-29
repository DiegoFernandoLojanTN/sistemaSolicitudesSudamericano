<?php
require_once "router.php";

$router = new Router();

// Agregar rutas
$router->addRoute("index.php", "controladores/plantilla.controlador.php");
$router->addRoute("vista.docente.php", "vistas/vista.docente.php");
$router->addRoute("vista.estudiante.php", "vistas/vista.estudiante.php");
$router->addRoute("vista.secretaria.php", "vistas/vista.secretaria.php");

// Obtener la ruta actual desde la URL
$currentRoute = basename($_SERVER['REQUEST_URI']);

// Enrutar
$router->route($currentRoute);
