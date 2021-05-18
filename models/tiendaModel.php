<?php

class tiendaModel
{

    private $conexion;

    function __construct()
    {
        $this->conexion = conexion::conectar();
    }

    //funcion para registrar cliente
    public function registrarCliente($nombres, $apellidos, $cedula, $edad, $correo, $telefono, $direccion)
    {
        $sql = "INSERT INTO tiendajuegos.clientes VALUES (NULL,'$nombres','$apellidos', '$cedula', $edad, '$correo', '$telefono', '$direccion')";
        $consulta = "";
        $consulta = $this->conexion->query($sql) or die("Error al registrar los datos");
        $this->conexion->close();
        return json_encode($consulta);
    }

    //funcion para registrar juego
    public function registrarJuego($titulo, $nombre, $anio, $protagonistas, $director, $productor, $tecnologia, $precio)
    {

        $sql = "INSERT INTO tiendajuegos.juegos VALUES (NULL,'$titulo','$nombre', '$anio', '$protagonistas', '$director', '$productor', '$tecnologia',$precio)";
        $consulta = "";
        $consulta = $this->conexion->query($sql) or die("Error al registrar los datos");
        
        //registro en la tabla alquiler del juego
       // $consulta = $this->registroAlquilerJuego($precio);

        $this->conexion->close();
        return json_encode($consulta);
    }


    //funcion para consultar ultimo id registrado
    private function getId($idNombre, $tabla)
    {
        $sql="SELECT MAX($idNombre) AS id FROM $tabla";
           $consulta = "";
           $consulta = $this->conexion->query($sql)or die("Error en la consulta del id"); 
           if ($row = $consulta->fetch_row()) {
               $id = trim($row[0]);
               }
            return $id;
    }


    //funcion para mostrar titulos de juegos 
    public function get_titulosJuegos(){
        $sql="SELECT juegos.ID_Juego, juegos.Titulo  FROM juegos";
           $consulta = "";
           $consulta = $this->conexion->query($sql)or die("Error en la consulta de titulos");
           $json = array();
           while($row = $consulta->fetch_array()){
                $json[] = array(
                    'ID_Juego' => $row['ID_Juego'],
                    'Titulo' => $row['Titulo']
                );
           }
           $titulos = json_encode($json); 
           $this->conexion->close();
           return $titulos;
    }

 

    //funcion para traer el titulo del juego
    public function getPrecioTitulo($idJuego){
        $sql="SELECT juegos.PrecioAlquiler  FROM juegos WHERE ID_Juego = $idJuego";
        $consulta = "";
        $consulta = $this->conexion->query($sql)or die("Error en la consulta de precios");
        $json = array();
        while($row = $consulta->fetch_array()){
             $json[] = array(
                 'PrecioAlquiler' => $row['PrecioAlquiler']
             );
        }
        $precio = json_encode($json); 
        $this->conexion->close();
        return $precio;
    }
    
    //funcion para registrar en la tabla alquiler_juego
  /*   private function registroAlquilerJuego($precio){
        $idJuego = $this->getId('ID_Juego', 'juegos');
        $sql = "INSERT INTO tiendajuegos.alquiler_juego (ID_AlquilerJuego, ID_Juego, Precio) VALUES (NULL, $idJuego, $precio)";
        $consulta = $this->conexion->query($sql) or die("Error al registrar los datos alquiler_juego");
        return $consulta;
    }
 */
     //funcion para registraralquiler y venta de productos
     public function AlquilerVenta($cedula, $idjuego, $fechafin, $valor){
        $idcliente = $this->getIdCliente($cedula);
        if($idcliente){
            $fechaActual = date("Y-m-d");
        
            $idventa = $this->registrarVenta($idcliente, $valor, $fechaActual);

            $sql = "INSERT INTO tiendajuegos.alquiler_cliente VALUES (NULL,$idcliente, $idjuego, $idventa, '$fechaActual', '$fechafin')";
            $consulta = "";
            $consulta = $this->conexion->query($sql) or die("Error al registrar los datos alquiler y venta");
             
            $this->conexion->close();
            return json_encode($consulta); 
        }
      
     }

     //funcion para traer el id del cliente con su numero de cedula
     private function getIdCliente($cedula){
        $sql="SELECT clientes.ID_Cliente  FROM clientes WHERE Cedula = '$cedula'";
        $consulta = "";
        $consulta = $this->conexion->query($sql)or die("Error en la consulta de precios");
        while ($row = $consulta->fetch_assoc()) {
            $id = $row['ID_Cliente'];
        }
        return $id;
     }

     //funcion para registrar la venta
     private function registrarVenta($idcliente, $valorventa, $fecha){   
        $sql = "INSERT INTO tiendajuegos.ventas VALUES (NULL, $idcliente ,$valorventa , '$fecha')";
        $consulta = "";
        $consulta = $this->conexion->query($sql) or die("Error al registrar los datos de venta");
        
        $id = $this->getId('ID_Venta', 'ventas');
        return $id; 
     }

     //funcion para traer los titulos de los juegos con sus precios de alquiler
     public function getJuegos(){
        $sql = "SELECT juegos.ID_Juego, juegos.Titulo, juegos.PrecioAlquiler FROM juegos";
        $consulta = "";
        $consulta = $this->conexion->query($sql) or die("Error al registrar los datos de venta");
        $json = array();
        while($row = $consulta->fetch_array()){
             $json[] = array(
                 'ID_Juego' => $row['ID_Juego'],
                 'Titulo' => $row['Titulo'],
                 'PrecioAlquiler' => $row['PrecioAlquiler']
             );
        }
        $juegos = json_encode($json);  
        $this->conexion->close(); 
        return $juegos; 
     }

     //funcion para traer juego por titulo 
     public function consultarTitulo($titulo){
        $sql = "SELECT juegos.ID_Juego, juegos.Titulo, juegos.PrecioAlquiler FROM juegos WHERE Titulo LIKE '$titulo%'";
        $consulta = "";
        $consulta = $this->conexion->query($sql) or die("Error al registrar los datos de venta");
        $json = array();
        while($row = $consulta->fetch_array()){
             $json[] = array(
                 'ID_Juego' => $row['ID_Juego'],
                 'Titulo' => $row['Titulo'],
                 'PrecioAlquiler' => $row['PrecioAlquiler']
             );
        }
        $juegos = json_encode($json);  
        $this->conexion->close(); 
        return $juegos; 
     }

     public function consultarjuego($id){
        $sql = "SELECT juegos.Titulo, juegos.PrecioAlquiler FROM juegos WHERE ID_Juego = $id";
        $consulta="";
        $consulta = $this->conexion->query($sql);
        $datosjuego = mysqli_fetch_array($consulta);
        $this->conexion->close();
        return json_encode($datosjuego); 

     }
     //se actualiza el titulo y precio del juego
     public function actualizarJuego($id, $titulo, $precio){
        $sql = "UPDATE juegos SET Titulo = '$titulo', PrecioAlquiler = $precio WHERE ID_Juego = '$id'";
        $consulta="";
        $consulta = $this->conexion->query($sql) or die("Error al registrar los datos de venta");
        $this->conexion->close();
        return $consulta;
     }

     //funcion que trae los clientes que an alquilado un juego
     public function alquilerGeneral(){
        $sql = "SELECT clientes.Nombres, juegos.Nombre, alquiler_cliente.fecha_ini, alquiler_cliente.fecha_fin 
                FROM  alquiler_cliente 
                INNER JOIN juegos
                ON alquiler_cliente.ID_Juego = juegos.ID_Juego
                INNER JOIN clientes
                ON alquiler_cliente.ID_Cliente = clientes.ID_Cliente
                ";
        $consulta="";
        $consulta = $this->conexion->query($sql) or die("Error al registrar los datos de venta");
        $json = array();
        while($row = $consulta->fetch_array()){
             $json[] = array(
                 'Nombres' => $row['Nombres'],
                 'nombrejuego' => $row['Nombre'],
                 'fecha_ini' => $row['fecha_ini'],
                 'fecha_fin' => $row['fecha_fin']
             );
        }
        $clientes = json_encode($json);  
        $this->conexion->close(); 
        return $clientes;
     }

}
