<?php

$name = $_POST['name'];
$email = $_POST['email'];
$location = $_POST['location'];
$status = $_POST['status'];

$formcontent="Their Name: $name \r\n Their email: $email \r\n Their location: $location  \r\n Status: $status";
$recipient = "griffhall1@gmail.com";
$subject = "Someone completed The Modern Boutique Contact form";
$mailheader = "From: griff@themodernboutique.com \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");


header("Location: thanks");

?>