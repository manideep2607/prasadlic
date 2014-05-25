<?php
if(!isset($_POST['scrollText'])){
	echo "Sorry some error occurred.";
}
else{
	$scroll = fopen('../scroll.txt','w');
	fwrite($scroll, $_POST['scrollText']);
	fclose($scroll);
	echo "success";
}
?>