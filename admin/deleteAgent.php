<?php
if(!isset($_POST["code"])){
    echo "Sorry some error occurred";
}
else{
  include("../includes/connect.php");
    $code = $_POST["code"];
    $test = "SELECT * FROM $table WHERE code='$code'";
    $test = mysql_query($test);
    if(!mysql_num_rows($test)){
    	die("Agent with agent code ".$code." does not exist");
    }
    $query  = "DELETE FROM $table WHERE code='$code'";
    $query = mysql_query($query) or die("Sorry database problem");
    echo "Successfully deleted the agent";  
}
?>