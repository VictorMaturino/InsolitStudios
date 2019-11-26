<?php

$para = $_POST['para'];
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = $para;
$email_subject = "Insolit Studios";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['titulo']) ||
!isset($_POST['titulo']) ||
!isset($_POST['de']) ||
!isset($_POST['mensaje'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Notificaciones de Insolit Studios:\n\n";
$email_message .= "Titulo: " . $_POST['titulo'] . "\n";
$email_message .= "Mensaje: " . $_POST['mensaje'] . "\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>