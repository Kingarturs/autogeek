<?php

    function conectar(){
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $nombreDB = "crm_autogeek";

        $conexion = mysqli_connect($servidor, $usuario, $password, $nombreDB);
        return $conexion;
    }

    function query($conexionDB, $query){
        $resultado = mysqli_query($conexionDB, $query) or die (mysqli_error($conexionDB));
        return $resultado;
    }

    function cerrar($conexionDB){
        mysqli_close($conexionDB);
    }

?>