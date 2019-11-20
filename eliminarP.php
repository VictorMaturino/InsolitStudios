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
    include "conexion.php";
    if(isset($_GET["id"]))
    {
        // eliminas el registro
        $consulta = "DELETE FROM publicacion WHERE id='$_GET[id]'";
        $resultado = $db->query($consulta);
    }

if($resultado){
    header("Location: adminP.php");

}
else{
    header("Location: Eincompleto.php");
}

    ?>