<?php 
$user = "106014347779844767700";
$url = "https://picasaweb.google.com/data/feed/api/user/" + $user;
$xml = file_get_contents($url);
echo $xml;
?>