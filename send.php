<?php

$to = "enzoguedeau00@gmail.com";
$subject = "Nouveau devis";

$message = "
Nom: " . $_POST['nom'] . "
Prenom: " . $_POST['prenom'] . "
Email: " . $_POST['email'] . "
Tel: " . $_POST['tel'] . "

Message:
" . $_POST['message'];

$headers = "From: " . $_POST['email'];

mail($to, $subject, $message, $headers);

echo "OK";

?>