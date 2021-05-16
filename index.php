<?php
 require_once "config/config.php";
 //cargamos el archivo routes, para las rutas del controlador y el metodo
 require_once "core/routes.php";
 //cargamos el archivo para la conexion con la base de datos
 require_once "config/conexion.php";



if (isset($_GET['c'])) {
            $controller = cargarController($_GET['c']);
            if (isset($_GET['a'])) {
                cargarAccion($controller, $_GET['a']);
            }else{
                cargarAccion($controller,ACCION_TIENDA);
            }
        } else {
            $controller = cargarController(CONTROLADOR_TIENDA);
            cargarAccion($controller, ACCION_TIENDA);    
        }