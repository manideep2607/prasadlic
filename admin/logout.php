<?php
if(!isset($_SESSION['usr'])){
session_start(); 
} 
session_destroy();
echo "1";
?>