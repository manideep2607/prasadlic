<?php
if(!isset($_SESSION['usr'])){
session_start(); 
} 
if(isset($_SESSION['usr'])){
	include('adminpanel.html');
}
else{
	include('loginForm.html');
}
?>