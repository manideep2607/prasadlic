<?php
if(!isset($_SESSION['name'])){
session_start(); 
}
?>
<script src="../scripts/competitions.js">
</script>
<div id="competitions">
    <div class="competition">
    </div>
    <div id="nav">
    	<div id="nav_wrap">
        	<div class="current"></div>
            <div></div>
        </div>
    </div>
</div>
<div id="header">
<h1> Welcome <?php echo $_SESSION['name']; ?> </h1>
<button id="logout" type="button" value="logout" onClick="logout()">Logout</button>
</div>
<div id="downloads">
<h1>Downloads</h1>
<?php
$dir = "../downloads";
$files = scandir($dir);

foreach($files as $file){
	if(!is_dir($dir."/".$file)){
		$ext = get_file_extension($file);
		$name = get_file_name($file);
		echo '
		<div class="file" onclick="window.open(\''.$dir.'/'.$file.'\')">
		<div class="ext '.$ext.'"></div>
		<div class="filename"><span class="bottom">'.$name.'</span></div>
		</div>
		';
	}
}
?>
</div>