<?php
session_start();
include "conexion.php";
$consulta= "SELECT reservaciones.id,mesa, silla, usuarios.usuario
FROM reservaciones
JOIN usuarios on usuarios.id = reservaciones.id_usuario";
$resultado=$db->query($consulta);
$reservaciones=array();
while($fila=$resultado->fetch_assoc()){
    $reservaciones[]=$fila;
}
// var_dump($reservaciones);
$json=json_encode($reservaciones);
echo $json;
?>