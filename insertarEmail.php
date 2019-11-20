<?php 
session_start();
include"conexion.php";

$email = $_POST["email"];

$consulta = "SELECT*FROM emails
             WHERE email = '$email'";

$resultado =$db->query($consulta);
$filas =$resultado->num_rows;

if($filas >0){
    require('index.php');
    print '<script language="JavaScript">';
    print 'alert("Ya se ha registrado un mail con este Usuario...");';
    print '</script>';
}else{


$consulta="INSERT INTO emails(email)
            VALUES('$email')";

$resultado = $db->query($consulta);
    if($resultado){
        header("Location: gracias.php");
        // echo "<div class=\"alert alert-success\" role=\"alert\">¡Correo enviado satisfactoriamente!</div>";
        //echo 1;
    }else{
        //echo 0;
        require('index.php');
        print '<script language="JavaScript">';
        print 'alert("Hubo un error...");';
        print '</script>';
    }
}
?>