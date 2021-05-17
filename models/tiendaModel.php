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

        $sql = "INSERT INTO tiendajuegos.juegos VALUES (NULL,'$titulo','$nombre', '$anio', '$protagonistas', '$director', '$productor', '$tecnologia')";
        $consulta = "";
        $consulta = $this->conexion->query($sql) or die("Error al registrar los datos");
        
        //registro en la tabla alquiler del juego
        $consulta = $this->registroAlquilerJuego($precio);

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


    //funcion para registrar en la tabla alquiler_juego
    private function registroAlquilerJuego($precio){
        $idJuego = $this->getId('ID_Juego', 'juegos');
        $sql = "INSERT INTO tiendajuegos.alquiler_juego (ID_AlquilerJuego, ID_Juego, Precio) VALUES (NULL, $idJuego, $precio)";
        $consulta = $this->conexion->query($sql) or die("Error al registrar los datos alquiler_juego");
        return $consulta;
    }
}
