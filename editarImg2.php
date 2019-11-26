<?php
    header('Content-Type: text/html; charset=UTF-8');
    session_start();
    if (isset($_SESSION['usuario'])){
        $cliente = $_SESSION['usuario'];
    }else{
 header('Location: admin.php');
     die() ;

    }

    include"conexion.php";

    $id=$_POST["id"];
    $foto = $_FILES["foto"];

    $fotoNombre=$foto["name"];
    $fotoRuta=$foto["tmp_name"];

    $extension = end((explode(".",$fotoNombre)));
    $nombreFinal = uniqid().".".$extension;

    move_uploaded_file($fotoRuta, "Fotos/".$nombreFinal);

    $consulta="UPDATE publicacion SET foto='$nombreFinal' WHERE id='$id'";

    $resultado = $db->query($consulta);
    if($resultado){
        header("Location: adminP.php");

    }
    else{
        header("Location: adminP.php");
    }
?>