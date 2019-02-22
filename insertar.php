<?php 
session_start();
include"conexion.php";

$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
$email = $_POST["email"];
$rol = $_POST["rol"];

$consulta="INSERT INTO usuarios(usuario,contrasena,email,rol)
            VALUES('$usuario','$contrasena','$email','$rol')";

$resultado = $db->query($consulta);

if($resultado){
    header("Location: usuarioRegistrado.php");

}
else{
    header("Location: usuarioNoRegistrado.php");
}

?>