<?php
if(!isset($_POST["code"])){
    echo "Sorry some error occurred";
}
else{
    include("../includes/connect.php");
    $code = $_POST["code"];
    $name= $_POST["name"];
    $query  = "INSERT INTO $table VALUES ('$code', '$name')";
    $query = mysql_query($query) or die("Sorry! Couldn't connect to the database");
    echo "Successfully added the agent";
}
?>