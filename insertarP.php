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

$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$foto = $_FILES["foto"];

$fotoNombre=$foto["name"];
$fotoRuta=$foto["tmp_name"];

$extension = end((explode(".",$fotoNombre)));
$nombreFinal = uniqid().".".$extension;

move_uploaded_file($fotoRuta, "Fotos/".$nombreFinal);


// $consulta = "SELECT*FROM publicacion
//              WHERE titulo = '$titulo'";

// $resultado =$db->query($consulta);
// $filas =$resultado->num_rows;

// if($filas >0){
//     require('crearP.php');
//     print '<script language="JavaScript">';
//     print 'alert("Ya existe una Publicación con ese Titulo...");';
//     print '</script>';
// }else{


$consulta="INSERT INTO publicacion(titulo,descripcion,foto)
            VALUES('$titulo','$descripcion','$nombreFinal')";

$resultado = $db->query($consulta);
    if($resultado){
        header("Location: adminP.php");
        // echo "<div class=\"alert alert-success\" role=\"alert\">¡Correo enviado satisfactoriamente!</div>";
        //echo 1;
    }else{
        //echo 0;
        require('registro.php');
        print '<script language="JavaScript">';
        print 'alert("Hubo un error...");';
        print '</script>';
    }
// }
?>