<?php
include "conexion.php";


$titulo=$_POST["titu"];
$contenido=$_POST["con"];


$consulta = "INSERT INTO noticias (titulo,contenido)
VALUES ('$titulo', '$contenido')";

$resultado=$db->query($consulta);

if($resultado){
    header("Location:noticias.php");
}


?>