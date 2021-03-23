<?php

$empfaenger = "contact@cohecean.com";

$anrede = $_POST['anrede'];
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email = $_POST['email'];
$nachricht = $_POST['nachricht'];

 $betreff = "Cohecean Webseite"  ;


mail($empfaenger, $betreff, "Neue Nachricht von:" ."\r\n" ."\r\n".$anrede." ".$vorname." " .$nachname  ."\r\n"."\r\n"."E-mail: " .$email ."\r\n" ."\r\n"."\r\n"."Nachricht: "."\r\n"."\r\n".$nachricht  );

//header("HTTP/1.1 301 Moved Permanently");

//header("location:../index.php");

//exit;



?>