<?php

include "conexion.php";
session_start();
$idUsuario=$_SESSION["idUsuario"];
$mesa=$_POST["mesa"];
$silla=$_POST["silla"];


$consulta="INSERT INTO reservaciones (id_usuario,mesa,silla)
VALUES ($idUsuario,$mesa,$silla)";

$resultado=$db->query($consulta);
?>