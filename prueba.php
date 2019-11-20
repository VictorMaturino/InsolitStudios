<!DOCTYPE html>
<html>
<head>
	<title>Envío de mails con PHP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        form {
            margin-top: 7%;
            margin-left: 30%;
        }

        label {
            color: white;
            font-size: 30px;
            font-family: "monserrat";
        }
    </style>


</head>
<body>
<?php
    include "header2.php";
    ?>
<?php
    if(isset($_POST['enviar'])){
        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$_POST['cuerpo'].'
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: ".$_POST['nombre']." <".$_POST['emisor'].">\r\n";

        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: ".$_POST['emisor']."\r\n";

        //Direcciones que recibián copia
        //$headers .= "Cc: ejemplo2@gmail.com\r\n";

        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
        if(mail($_POST['receptor'],$_POST['asunto'],$cuerpo,$headers)){
    		echo "<script>alert('Funcion \"mail()\" ejecutada, por favor verifique su bandeja de correo.');</script>";
    	}else{
    		echo "<script>alert('No se pudo enviar el mail, por favor verifique su configuracion de correo SMTP saliente.');</script>";
    	}
    }
?>


	<form method="post">
    	<div style="background-color: black; width:60%; font-family:Verdana, Geneva, sans-serif; padding: 10px;">
            <label>Asunto</label><br>
            <input type="text" size="55" name="asunto" value="" required autofocus style="" placeholder="Asunto" ><br>
            <label>De</label><br>
            <input type="text" size="25" name="nombre" value="" required style="" placeholder="Tu Nombre" >
            <input type="email" size="25" name="emisor" required style="" placeholder="Email remitente" value=""><br>
            <label>Para</label><br>
            <input type="text" size="55" name="receptor" required style="" placeholder="Email destinatario" value=""><br>
            <label>Mensaje</label><br>
            <textarea name="cuerpo" style="" placeholder="Contenido del mensaje" cols="57" rows="10"></textarea><br>
            <input type="submit" name="enviar" value="Enviar">
            <br><br>
        </div>
    </form>
</body>
</html>