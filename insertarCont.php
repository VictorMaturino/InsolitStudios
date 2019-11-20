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

$direccion = $_POST["direccion"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];

$consulta = "SELECT*FROM contacto";

$resultado =$db->query($consulta);
$filas =$resultado->num_rows;

if($filas >0){
    $consulta = "UPDATE contacto SET direccion='$direccion', email='$email', telefono='$telefono' WHERE id='1'";

    $resultado = $db->query($consulta);

    if($resultado){
        header("Location: contacto2.php");

    }else{
        require('contacto2.php');
        print '<script language="JavaScript">';
        print 'alert("Hubo un error...");';
        print '</script>';
    }
}else{
    $consulta="INSERT INTO contacto(direccion,email,telefono)
    VALUES('$direccion','$email','$telefono')";

    $resultado = $db->query($consulta);

    if($resultado){
        header("Location: contacto2.php");
        // echo "<div class=\"alert alert-success\" role=\"alert\">¡Correo enviado satisfactoriamente!</div>";
        //echo 1;
    }else{
        //echo 0;
        require('registro.php');
        print '<script language="JavaScript">';
        print 'alert("Hubo un error...");';
        print '</script>';
    }

}

?>