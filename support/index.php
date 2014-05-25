<?php
if(!isset($_SESSION['name'])){
session_start(); 
}
function get_file_extension($file_name) {
	return substr(strrchr($file_name,'.'),1);
}
function get_file_name($file_name){
	return substr($file_name,0,strpos($file_name,'.'));
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prasad LIC</title>
<script src="../scripts/agents.js">
</script>
<?php include('../includes/files.html'); ?>
<style>
#agents{
	width:100%;
	position:relative;
}
#agent_login{
	width:100%;
	height:547px;
	background:url(../img/agents.jpg);
	position:relative;
}
#login_panel{
	position:relative;
	top:250px;
	margin-left:640px;
	width:316px;
	height:400px;
	line-height:40px;
	z-index:100;
}
#login_panel #load{
	position:absolute;
	width:316px;
	height:400px;
	z-index:999;
	display:none;
	overflow:hidden;
	background:rgba(255,255,255,0.8);
	text-align:center;
}
#login_panel #load img{
	width:35px;
}

#login_panel input.textbox{
	width:300px;
	height:44px;
	line-height:normal;
	font-family:Arial, Helvetica, sans-serif;
	font-size:16px;
	border-top:1px solid #999999;
	border-left:1px solid #999999;
	border-bottom:1px solid #CCCCCC;
	border-right:1px solid #CCCCCC;
	border-radius:1px;
	color:#333333;
	padding:0px 8px;
}

#login_panel input.button{
	width:316px;
	height:40px;
	border-radius:3px;
	background:#024282;
	color:#FFFFFF;
	font-family:Open Sans, Helveltica, Arial, sans-serif;
	font-size:16px;
	line-height:normal;
	text-align:center;
	font-weight:400;
	border:1px solid #024282;
	margin:10px 0px;
}

#login_panel input.button:hover{
	border:1px solid #004080;
}

#login_panel p{
	color:#333333;
	float:left;
	width:200px;
	display:block;
}
#login_panel #error{
	color:#FF0000;
	float:left;
	width:300px;
	display:block;
}
#login_panel a{
	text-decoration:none;
}
#login_panel a:hover{
	text-decoration:underline;
}
#login_panel a.help{
	text-decoration:none;
	width:75px;
	float:right;
	text-align:right;
	color:#0000FF;
}
#downloads h1{
	font-family:Roboto Condensed,Open Sans, Helvetica, Arial, sans-serif;
	font-weight:normal;
	color:#024282;
	font-size:36px;
	margin:10px;
}
#downloads .file{
	margin:10px 0px 10px 10px;
	float:left;
	width:320px;
	height:72px;
	cursor:pointer;
	background:#F7F7F7;
	box-shadow:0px 0px 3px #aaaaaa;
}
#downloads .file:hover{
	box-shadow:0px 0px 5px #333333;
}
#downloads .filename{
	width:256px;
	height:72px;
	margin-left:10px;
	float:left;
	position:relative;
}
#downloads .filename .bottom{
	font-size:24px;
	font-weight:300;
	font-family:Roboto Condensed, Helvetica, Arial, sans-serif;
	position:absolute;
	bottom:0;
	left:0;
}
#downloads .ext{
	width:54px;
	height:72px;
	text-align:center;
	vertical-align:middle;
	float:left;
	font-size:32px;
	color:#FFFFFF;
	text-transform:uppercase;
	font-family:Roboto Condensed, Helvetica, Arial, sans-serif;
	text-align:right;
	vertical-align:text-bottom;
}
#downloads .pdf{
	background:url(../img/pdf.png);
}
#downloads .xls{
	background:url(../img/xls.png);
}
#downloads .doc{
	background:url(../img/doc.png);
}
#downloads .ppt, #downloads .pptx{
	background:url(../img/ppt.png);
}
#header{
	width:100%;
	height:50px;
	position:relative;
	margin:0px 0px;
	background:#F7F7F7;
}
#header h1{
	font-family:Roboto Condensed,Open Sans, Helvetica, Arial, sans-serif;
	font-weight:normal;
	text-transform:uppercase;
	color:#024282;
	font-size:36px;
	float:left;
	width:870px;
	vertical-align:middle;
	margin-left:10px;
}
#header button{
	width:120px;
	color:#FFFFFF;
	background:#024282;
	height:50px;
	font-family:Open Sans, Helvetica, Arial, sans-serif;
	font-weight:normal;
	float:left;
	font-size:16px;
	vertical-align:middle;
	cursor:pointer;
}
#header button:hover{
	background:#125292;
}
#competitions{
	width:100%;
	height:400px;
	position:relative;
	background:url(../img/competitions.jpg);
}
#competitions .competition{
	width:480px;
	height:325px;
	top:90px;
	left:510px;
	position:absolute;
	text-align:center;
}
#competitions .competition h1{
	color:#FFFFFF;
	font-size:48px;
	font-weight:normal;
	font-family:Roboto Condensed, Helvetica, Arial, sans-serif;
	text-transform:uppercase;
}
#competitions .competition .date{
	color:#F7F7F7;
	font-size:24px;
	font-weight:normal;
	font-family:Roboto Condensed, Helvetica, Arial, sans-serif;
	margin-top:25px;
}
#competitions .competition .conditions{
	font-size:28px;
	font-family:Roboto Condensed, Helvetica, Arial, sans-serif;
	font-weight:400;
	color:#F5F5F5;
	font-variant:small-caps;
}
#competitions .competition .prize{
	width:400px;
	font-weight:normal;
	font-family:Roboto Condensed, Helvetica, Arial, sans-serif;
	font-size:28px;
	color:#FBFBFB;
	margin-left:40px;
	line-height:30px;
	margin-top:5px;
}
#competitions #nav{
	width:200px;
	margin:0px 140px;
	top:350px;
	left:510px;
	position:absolute;
}
#competitions #nav #nav_wrap{
	margin:auto;
}
#competitions #nav #nav_wrap div{
	width:16px;
	height:16px;
	background:rgba(255,255,255,0.6);
	margin:10px;
	float:left;
	border-radius:8px;
}
#competitions #nav #nav_wrap .current{
	background:rgba(255,255,255,1);
}
</style>
</head>

<body>
<?php include('../includes/global-nav.html'); ?>
<div id="content-wrap">
<div id="agents">
<?php if(!isset($_SESSION['code'])):
include('login_form.php');
?>
<?php 
else:
include('agents.php');
endif;
?>
</div>
    
</div>
<?php
include('../includes/footer.html');
?>
</body>
</html>