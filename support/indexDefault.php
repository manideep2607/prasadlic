<?php
function get_file_extension($file_name) {
	return substr(strrchr($file_name,'.'),1);
}
function get_file_name($file_name){
	return substr($file_name,0,strpos($file_name,'.'));
}
$dir = "../downloads";
$files = scandir($dir);
echo '<ul>';
foreach($files as $filename){
	if(!is_dir($dir."/".$filename)){
		$ext = get_file_extension($filename);
		$name = get_file_name($filename);
		if($ext == 'pdf'){
			echo '<li>PDF - <a target = "_new" href="'.$dir.'/'.$filename.'">'.$name.'</a></li>';
		}
	}
}
echo '</ul>';

?>