<?php
if(!isset($_SESSION['usr'])){
session_start(); 
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Prasad LIC</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../styles/mobileadmin.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
<script type="text/javascript" src="../scripts/mobileadmin.js" ></script>
</head>
<body>
	<?php 
		if(isset($_SESSION['usr'])){
			include('adminpanel.html');
		}
		else{
			include('loginForm.html');
		}
	?>
</body>