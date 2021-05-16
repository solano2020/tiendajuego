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


    //redirige a vista registrarTransaccion (vista principal) 
    public function VregistrarTransaccion(){
        require_once "views/tienda/registrarTransaccion.php";
    }
    
    //redirige a vista registrarCliente 
    public function VregistrarCliente(){   require_once "views/tienda/registrarCliente.php";}

    //redirige a vista consultarCliente 
    public function VconsultarCliente(){   require_once "views/tienda/consultarCliente.php";}

    //redirige a vista resgistrarJuego
    public function VregistrarJuego(){     require_once "views/tienda/registrarJuego.php";}
    
    //redirige a vista consultarPrecios
    public function VconsultarPrecios(){   require_once "views/tienda/consultarPrecios.php";}
    
    //redirige a la vista VconsultarVentas
    public function VconsultarVentas(){    require_once "views/tienda/consultarVentas.php";}




}