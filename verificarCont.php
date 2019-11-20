<?php
    header('Content-Type: text/html; charset=UTF-8');
    session_start();
    if (isset($_SESSION['usuario'])){
        $cliente = $_SESSION['usuario'];
    }else{
 header('Location: admin.php');
     die() ;

    }
?>
<?php 
session_start();
include"conexion.php";

$consulta = "SELECT*FROM contacto";

$resultado =$db->query($consulta);
$filas =$resultado->num_rows;

if($filas >0){
        
    header("Location: contacto2.php");

}else{

    header("Location: contacto2_1.php");
}

?>