<?php
$nombre=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$mensaje=$_POST["msj"];

$destinatario = "alonsoalas44@gmail.com";
$asunto = "Contacto de DEFENSORIA DE LOS DERECHOS DE LA MUJER";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $phone \n";
$carta .= "Mensaje: $mensaje";

mail($destinatario, $asunto, $carta);
if (mail==true) { 
    header('Location: home.php');
}else {
    echo "El envio ha sido interrumpido...";
}
?>