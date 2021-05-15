<?php

class conexion
{

    public static function conectar()
    {
        $host = "localhost";
        $user = "root";
        $password = "191243";
        $bd = "pagoslinea2";

        //conexion a la base de datos
        $conexion = new mysqli($host, $user, $password, $bd);
        if ($conexion->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
        }
        return $conexion;
    }
}
