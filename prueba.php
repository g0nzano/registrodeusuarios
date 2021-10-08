<?php

$conexion = mysqli_connect("192.168.100.22", "servidor", "1234","usuarios");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["pass"];

$sel = "SELECT * FROM mis_usuarios where email='$email'";

$ejecutar =mysqli_query($conexion, $sel);

$chequear_email = mysqli_num_rows($ejecutar);

if($chequear_email == 1){
    echo "<h2>El email ya se encuentra registrado, ingrese otro</h2>";
    exit();
}else{
    $insertar ="INSERT INTO mis_usuarios(nombre, email, password) values ('$nombre','$email','$password')";
    $ejecutar = mysqli_query($conexion, $insertar);

    if($ejecutar){
        echo "<h2>El usuario ha sido registrado con exito</h2>";
    }
}


?>