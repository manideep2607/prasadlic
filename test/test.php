<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prasad LIC</title>
</head>
<body>
<?php

$to = "manideepiitb@gmail.com";
$message = $_POST["message"];
$subject = $_POST["subject"];
$parameters = "From: prasad@prasadlic.com \n";

mail($to, $subject, $message, $parameters);
echo "success";

?>
</body>