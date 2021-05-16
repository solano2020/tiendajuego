<?php

class tiendaModel{
     
    private $conexion;
    
    function __construct()
    {
        $this->conexion = conexion::conectar();
    }

    //funcion para registrar cliente
    public function registrarCliente($nombres, $apellidos, $cedula, $edad, $correo, $telefono, $direccion){
        $sql = "INSERT INTO tiendajuegos.clientes VALUES (NULL,'$nombres','$apellidos', '$cedula', $edad, '$correo', '$telefono', '$direccion')";
        $consulta="";
        $consulta = $this->conexion->query($sql) or die ("Error al registrar los datos");  
        $this->conexion->close();
        return json_encode($consulta);
    }
    
    
}