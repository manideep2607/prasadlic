<?php
$name = $_POST["name"];
$phone = $_POST["phone"];
$address = $_POST["address"];

$to = "prasadlic@gmail.com";
$subject = "$name is interested in LIC agency";
$message = "
$name has shown interest in LIC agency and gave you this information: 

Mobile Number: $phone
Address: $address";

$params = "From: prasad@prasadlic.com";
mail($to, $subject, $message, $params);
echo 1;
?>