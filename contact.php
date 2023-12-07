<?php
 
if(isset($_POST['submit'])){
     
    $to = 'narpenofficiel@gmail.com';
 
    /***** Valeurs du formulaire *****/
     
    $prenom = mysql_real_escape_string($_POST['prenom']); //Obligatoire
    $nom = $_POST['nom'];
 
    $courriel = $_POST['courriel']; //Obligatoire
    $phone = $_POST['phone'];
 
    $sujet = $_POST['sujet']; //Obligatoire
    $message = $_POST['message']; //Obligatoire
 
    $headers = "From: " .$prenom. "\r\n";
    $headers .= "Reply-To: ".$courriel."\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";
 
    $message = " Prenom: " . $prenom . "\r\n Nom: " . $nom . "\r\n Courriel: " . $courriel . "\r\n Telephone: " . $phone . "\r\n Sujet: " . $sujet . "\r\n message: " . $message;
 
    mail($to, $sujet, $message, $headers);
     
     
}
 ?>