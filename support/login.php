<?php
session_start();
$PASS = "licprasad123";
$code = $_POST["code"];
$pwd = $_POST["pwd"];

include('../includes/connect.php');

$query = mysql_query('SELECT * FROM '.$table.' WHERE code="'.$code.'"');
if(mysql_num_rows($query)){
	if($pwd == $PASS){
		$agent = mysql_fetch_array($query);
		$_SESSION['name'] = $agent['name'];
		$_SESSION['code'] = $agent['code'];
		echo "0";
	}
	else{
		echo "2";
	}
}
else{
	echo "1";
}
?>