<?php 
session_start();
include"conexion.php";

$contrasena = 'insolitstudiosMXDGO';
$contrasenaEnc= md5($contrasena);

        $consulta="INSERT INTO usuario_admin(usuario,contrasena,email)
                    VALUES('insolitstudiosMX','$contrasenaEnc','insolitstudios@gmail.com')";
        
        $resultado = $db->query($consulta);
        
        if($resultado){
            header("Location: admin.php");
            // echo "<div class=\"alert alert-success\" role=\"alert\">¡Correo enviado satisfactoriamente!</div>";
            //echo 1;
        }else{
            //echo 0;
            require('index.php');
            print '<script language="JavaScript">';
            print 'alert("Hubo un error...");';
            print '</script>';
        }
?>