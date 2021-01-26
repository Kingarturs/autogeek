<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizar</title>
</head>


<body>
    <style>
    <?php include 'static/css/styles.css'; ?>
    </style>
    <div id="main">
        <form id="form-div">
            <h1>Cotiza el auto de tus sueños</h1>
            <p>Ingresa tus datos y un vendedor te contactará de inmediato</p>
            <input type="text" name="nombre" id="" placeholder="Nombre completo" class="input">
            <input type="text" name="correo" id="" placeholder="Correo" class="input">
            <input type="text" name="tele fono" id="" placeholder="Telefono" class="input">
            <select name="estado" id="" class="input">
                <option value="Querétaro">Querétaro</option>
            </select>
            <select name="municipio" id="" class="input">
                <option value="Santiago de Querétaro">Santiago de Querétaro</option>
                <option value="Corregidora">Corregidora</option>
                <option value="Pinal de Amoles">Pinal de Amoles</option>
                <option value="El Marqués">El Marqués</option>
            </select>
            <div id="terminos-div">
                <input type="checkbox" name="terminos" id="terminos-check">
                <p class="text-small" >Acepto las políticas de privacidad</p>
            </div>
        </form>
        <img id="img-div" src="https://images.unsplash.com/photo-1590362891991-f776e747a588?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" srcset="" class="input-option">
    </div>
</body>
</html>

<?php

?>