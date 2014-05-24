<?php 

$host = "localhost";
$username = "psnvnprasad";
$password = "Narayana9";
$database = "prasadlic";
$table = "agents";

mysql_connect("$host","$username","$password") or die(mysql_error());
		
mysql_select_db("$database") or die(mysql_error());

?>