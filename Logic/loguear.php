<?php
require "conexion.php";
session_start();

$usuario = $_POST['name'];
$telefono = $_POST['phone'];
$correo = $POST['mail'];
$direccion = $_POST['adress'];

$q = "SELECT COUNT(*) as 'contar' from sesion where Nombre = '$usuario' and Telefono = '$telefono' and Correo = '$correo' and Direccion = '$direccion'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

 if($array['contar']>0){
     $_SESSION['username'] = $usuario;
     header("location: ../Principal.php");
} else{
        echo "REGISTRO FALLIDO";
    }


?>