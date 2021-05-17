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

    //funcion para registrar juego
    public function registrarJuego(){
      $titulo = $_POST['Titulo'];
      $nombre = $_POST['Nombre'];
      $anio = $_POST['Anio'];
      $protagonistas = $_POST['Protagonistas'];
      $director = $_POST['Director'];
      $productor = $_POST['Productor'];
      $tecnologia = $_POST['Tecnologia'];
      $precio = $_POST['Precio'];
      

      $consulta = $this->tiendaModel->registrarJuego($titulo, $nombre, $anio, $protagonistas, $director, $productor, $tecnologia, $precio);
      echo $consulta; 
    }

    //funcion para mostrar los titulos
    public function mostrarTitulos(){
        $titulos = $this->tiendaModel->get_titulosJuegos();
        echo $titulos;
    }

    //funcion para obtener los datos del id del juego 
    public function getAlquilerJuego(){
        $idJuego = $_GET['ID_Juego'];
        $alquiler = $this->tiendaModel->getAlquilerJuego($idJuego);
        echo $alquiler;
    }
   
    //funcion para traer el precio del titulo
    public function precioTitulo(){
        $idJuego = $_GET['ID_Juego'];
        $precio = $this->tiendaModel->getPrecioTitulo($idJuego);
        echo $precio;
    }

    public function AlquilerVenta(){
        $cedula = $_POST['cedula'];
        $idjuego = $_POST['ID_Juego'];
        $fecha = $_POST['Fecha'];
        $valor = $_POST['valor'];
        if(!empty($cedula) && !empty($idjuego) && !empty($fecha) && !empty($valor)){
            $resultado = $this->tiendaModel->AlquilerVenta($cedula, $idjuego, $fecha, $valor);
           echo $resultado;
        }
    }

}