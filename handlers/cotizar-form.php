<?php

    include("conexion.php");
    $conexion = conectar();

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $estado = $_POST['estado'];
    $municipio = $_POST['municipio'];

    $sql = "INSERT INTO registro (`Nombre`, `Correo`, `Telefono`, `Estado`, `Municipio`) values ('$nombre', '$correo', '$telefono', '$estado', '$municipio');";
    $result = query($conexion, $sql);
    print("Un vendedor lo contactará de inmediato");

    cerrar($conexion);
?>