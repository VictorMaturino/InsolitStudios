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
$id = $_POST["id"];

$consulta = "UPDATE publicacion SET titulo='$titulo', descripcion='$descripcion' WHERE id='$id'";

$resultado = $db->query($consulta);
    if($resultado){
        header("Location: adminP.php");
        // echo "<div class=\"alert alert-success\" role=\"alert\">¡Correo enviado satisfactoriamente!</div>";
        //echo 1;
    }else{
        //echo 0;
        require('editarP.php');
        print '<script language="JavaScript">';
        print 'alert("Hubo un error...");';
        print '</script>';
    }

?>