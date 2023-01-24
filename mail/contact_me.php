<?php

if(empty($_POST['name'])      ||
   empty($_POST['email'])    ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Champs manquants ! ";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   

$to = 'baptiste.mohamedvignal@gmail.com'; 
$email_subject = "Website Contact Form:  $name";


$email_body = "You have received a new message From your Website.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";


$headers = "From: noreply@bmv.com\n"; 
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
