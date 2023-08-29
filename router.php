<?php

class Router {
    private $routes = array();

    public function addRoute($url, $controller) {
        $this->routes[$url] = $controller;
    }

    public function route($url) {
        if (array_key_exists($url, $this->routes)) {
            include $this->routes[$url];
        } else {
            // Página no encontrada, podrías mostrar un error 404 aquí
            echo "Página no encontrada";
        }
    }
}
