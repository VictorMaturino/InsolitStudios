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

$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
$contrasena2 = $_POST["contrasena2"];
$email = $_POST["email"];


$consulta = "SELECT*FROM usuario_admin
             WHERE usuario = '$usuario'";

$resultado =$db->query($consulta);
$filas =$resultado->num_rows;

if($filas >0){
    require('registro.php');
    print '<script language="JavaScript">';
    print 'alert("Ya existe un Usuario con este nombre...");';
    print '</script>';
}
else{
    if($contrasena==$contrasena2){
        $contrasenaEnc= md5($contrasena);
        $consulta="INSERT INTO usuario_admin(usuario,contrasena,email)
                    VALUES('$usuario','$contrasenaEnc','$email')";
        
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
        }else{
            //echo 0;
            require('registro.php');
            print '<script language="JavaScript">';
            print 'alert("Las contraseñas No coenciden Reintenta otravez!");';
            print '</script>';
            
        }
}

?>