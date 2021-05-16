<?php

class tiendaController{


    function __construct()
    {
        require_once "models/tiendaModel.php";
        $this->tiendaModel = new tiendaModel();
    }
  
    //vista principal para registrar alquiler y venta
    public function index(){
        require_once "views/tienda/index.php";
    }

    //vista del header
    public function header(){
        require_once "views/tienda/header.php";
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


   //funcion para registrar cliente
    public function registrarCliente(){
         $nombres = $_POST['Nombres'];
         $apellidos = $_POST['Apellidos'];
         $cedula = $_POST['Cedula'];
         $edad = $_POST['Edad'];
         $correo = $_POST['Correo'];
         $telefono = $_POST['Telefono'];
         $direccion = $_POST['Direccion'];
        
         $consulta = $this->tiendaModel->registrarCliente($nombres, $apellidos, $cedula, $edad, $correo, $telefono, $direccion);
         echo $consulta;     
    }

}