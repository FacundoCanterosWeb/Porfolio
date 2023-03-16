<?php
if(isset($_POST['introducir_email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "facundocanteros1995@gmail.com";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['introducir_nombre']) ||
!isset($_POST['introducir_asunto']) ||
!isset($_POST['introducir_email']) ||
!isset($_POST['introducir_telefono']) ||
!isset($_POST['introducir_mensaje'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['introducir_nombre'] . "\n";
$email_message .= "Apellido: " . $_POST['introducir_asunto'] . "\n";
$email_message .= "E-mail: " . $_POST['introducir_email'] . "\n";
$email_message .= "Teléfono: " . $_POST['introducir_telefono'] . "\n";
$email_message .= "Comentarios: " . $_POST['introducir_mensaje'] . "\n\n";

// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_to."\r\n".
'Reply-To: '.$email_subject."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo'<script> alert("Mensaje Enviado");
window.location.href="index.html";</script>';
}
?>