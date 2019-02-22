<?php 
session_start();
include "conexion.php";
$xd=0;
$usuario = $_POST["usuario"];
$contrasena =$_POST["contrasena"];

$consulta = "SELECT*FROM usuarios
             WHERE usuario = '$usuario'
             AND contrasena ='$contrasena'";


$resultado =$db->query($consulta);
$filas =$resultado->num_rows;

if($filas >0){
    $xd=$resultado2;
    echo 1;
    $_SESSION["usuario"] = $usuario;
    $tabla = $resultado->fetch_assoc();
    $_SESSION["idUsuario"] = $tabla["id"];

    //exit;
}
else{
    echo FORREAL;
}

?>