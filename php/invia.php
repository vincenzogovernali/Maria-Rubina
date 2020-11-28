<?php

// L'INDIRIZZO DEL DESTINATARIO DELLA MAIL
$ip=$_SERVER['REMOTE_ADDR'];

$to = "info@villamariarubina.it";
//
// IL SOGGETTO DELLA MAIL
$subject = "Qualcuno Ti Ha Contattato";

// COSTRUIAMO IL CORPO DEL MESSAGGIO
$body = "Contenuto del modulo:\n\n";
$body .= "Utente Con IP: $ip \n";
$body .= "Nome: " . trim(stripslashes($_POST["name"])) . "\n";
$body .= "Cognome: " . trim(stripslashes($_POST["surname"])) . "\n";
$body .= "Numero Di Telefono: " . trim(stripslashes($_POST["number"])) . "\n";
$body .= "Email (Non Obbligatoria): " . trim(stripslashes($_POST["email"])) . "\n";
$body .= "Messaggio: " . trim(stripslashes($_POST["message"])) . "\n";

// INTESTAZIONI SUPPLEMENTARI
$headers = "From: Sei Stato Contattato";


mail($to, $subject, $body, $headers);
echo "<script type='text/javascript'>alert('Entro 24h Verrete Contattati');</script>";
header('Refresh: 0; url=http://www.casadiriposovillamariarubina.it/');

?>
