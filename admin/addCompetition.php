<?php 
if (!isset($_POST["title"])) {
	echo "Some error occurred";
} else {
	$title = $_POST["title"];
	$from = $_POST["from"];
	$to = $_POST["to"];
	$condition = $_POST["condition"];
	$prize = $_POST["prize"];

	$xml = simplexml_load_file("../support/competitions.xml") or die("File could not be accessed");
	$competition = $xml->addChild("competition");
	$competition->addChild("title",$title);
	$competition->addChild("from",$from);
	$competition->addChild("to",$to);
	$competition->addChild("condition",$condition);
	$competition->addChild("prize",$prize);

	$xml->saveXML("../support/competitions.xml");

	echo "Competition added successfully";
}

 ?>