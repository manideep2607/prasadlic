<?php
if(!isset($_SESSION['usr'])){
session_start(); 
}
$usr = $_POST['usr'];
$pwd = $_POST['pwd'];
$PASS = "narayana9";
$USER = "prasadlic";

if($usr != $USER || $pwd != $PASS){
	echo "0";
}
else{
	$_SESSION['usr'] = "admin";
	echo "1";
}

?>