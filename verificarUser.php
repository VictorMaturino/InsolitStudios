<?php 
session_start();
include"conexion.php";

$consulta = "SELECT*FROM usuario_admin";

$resultado =$db->query($consulta);
$filas =$resultado->num_rows;

if($filas >0){
        
    header("Location: admin.php");

}else{

    header("Location: adminDefault.php");
}

?>