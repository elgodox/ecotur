<?php
 $to = "elgodox@gmail.com";
 $subject = $_POST['subject'];
 $message = $_POST['message'];
 $headers = $_POST['name'] . " " . $_POST['email'];
 
 if (mail($to, $subject, $message, $headers)) {
     echo "El correo electrónico se ha enviado con éxito.";
 } else {
     echo "Hubo un problema al enviar el correo electrónico.";
 }
 
?>
