<?php 
 
 //Funcion para crear el nombre del controlador atravez de GET
function cargarController($controller){
    $nombreController = $controller."Controller"; 
    $archivoController = "controller/".$nombreController.".php";
    
 
    //comprobamos si no existe el archivo
    if(!is_file($archivoController)){
        $archivoController = 'controllers/'.CONTROLADOR_TIENDA.'.php';
        $nombreController = CONTROLADOR_TIENDA;
    }
    require_once $archivoController;
    $control = new $nombreController();

    return $control;
}

//Funcion para cargar la accion el metodo del controlador atravez del GET
 function cargarAccion($controller, $accion){
    if(isset($accion) && method_exists($controller,$accion)){
        $controller->$accion();
    }else{
         $accion = ACCION_TIENDA;
         $controller->$accion();
    }
}