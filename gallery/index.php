<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prasad LIC</title>
<?php include('../includes/files.html'); ?>
<script src="../scripts/gallery.js">
</script>
<style>
#gallery-wrap{
	width:100%;
	position:relative;
}
#gallery{
	position:relative;
}
#albums{
	width:100%;
	margin:0px 50px;
	position:relative;
}
.album{
	width:160px;
	height:200px;
	margin:10px;
	float:left;
	display:block;
	cursor:pointer;
	text-align:center;
}
.album:hover img{
	box-shadow:0px 0px 10px #333333;
}
.album .title {
	color:#024282;
	font-weight:normal;
	font-family:Open Sans, Helvetica, Arial, sans-serif;
	font-size:16px;
}
</style>
</head>
<body>
<?php include('../includes/global-nav.html'); ?>
<div id="content-wrap">
    <div id="gallery-wrap">
        <div id="gallery">
            <embed type="application/x-shockwave-flash" src="https://static.googleusercontent.com/external_content/picasaweb.googleusercontent.com/slideshow.swf" width="1000" height="600" flashvars="host=picasaweb.google.com&hl=en_US&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F112906133779919434519%3Falt%3Drss%26kind%3Dphoto%26access%3Dpublic%26psc%3DF%26q%26uname%3D112906133779919434519" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
        </div>
    </div>
	<div id="albums">
    	<div class="album" onClick="return checking()">
        </div>
        <div class="album">
        </div>
    </div>


</div>
<?php
include('../includes/footer.html');
?>
</body>