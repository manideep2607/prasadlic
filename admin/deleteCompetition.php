<?php 
if (!isset($_POST["id"])) {
	echo "Some error occured";
} else {
	$id = $_POST["id"];

	//loadXML
	$xml = simplexml_load_file("../support/competitions.xml");

	//foreach
	$i = 0;
	foreach ($xml->children() as $competition) {
		if ($i == $id) {
			$dom = dom_import_simplexml($competition);
			$dom->parentNode->removeChild($dom);
		}
		$i++;
	}
	$xml->saveXML("../support/competitions.xml");

	echo "Successfully deleted the competiton";
}

 ?>