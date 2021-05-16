<?php

class tiendaController{


    function __construct()
    {
        
    }

    public function index(){
        require_once "views/tienda/index.php";
    }

    //vista del header
    public function header(){
        require_once "views/tienda/header.php";
    }

}