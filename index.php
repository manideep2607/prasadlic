<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prasad LIC</title>
<link rel="stylesheet" type="text/css" href="./styles/main.css" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
<script src="./scripts/home.js">
</script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
<style>
#slider {
	position:relative;
	width:100%;
	height:288px;
}

#slider .slider {
	position:absolute;
	top:0px;
	left:0px;
}
#marquee {
	width:100% - 20px;
	height:34px;
	position:relative;
	font-size:18px;
	margin-left:10px;
	margin-right:10px;
	margin-top:5px;
	font-weight:400;
	color:#024482;
}
#left{
	width:25%;
	float:left;
	position:relative;
	min-height:200px;
	background:#E7E7E7;
	display:block;
}
#center{
	width:75%;
	float:left;
	position:relative;
}
#center p{
	font-size:14px;
	font-weight:normal;
	font-family:Open Sans, Helvetica, Arial, sans-serif;
	margin:10px;
	text-align:justify;
}
</style>
</head>

<body>
<nav id="global-nav">
    <ul>
        <li id="icon"> <a href="./"> <img src="./img/lic_icon.png" /> </a> </li>
        <li id="site"> <a href="./">prasadlic.com </a> </li>
        <li class="menu"> <a href="./">Home</a> </li>
        <li class="menu"> <a href="./career/">Career in LIC</a> </li>
        <li class="menu"> <a href="./support/">Agents Support</a> </li>
        <li class="dropdown menu"> <a>Customer Utilities</a>
            <ul>
                <li> <a href="http://www.licindia.in/premium_calculator.htm" target="_blank">Premium Calculator</a></li>
                <li> <a href="http://www.licindia.in/bonus_info.htm" target="_blank">Bonus Rates</a> </li>
                <li> <a href="https://www.licindia.in/plannav/plan_navs_new.htm" target="_blank">Latest NAV</a> </li>
            </ul>
        </li>
        <li class="menu"> <a href="./gallery/">Gallery</a> </li>
        <li class="menu"> <a href="./contact/">Contact Us</a> </li>
    </ul>
</nav>
<div id="content-wrap">
    <div id="slider"> <img id="profile" class="slider" src="img/profile.jpg" style="display:visible;z-index:101;"  /> <img id="policy" class="slider" src="img/policy.jpg" style="display:none;z-index:100;" /> </div>
    <div id="marquee">
    <marquee direction="left" scrolldelay="90" scrollamount="3" onMouseOver="this.stop();" onMouseOut="this.start();">
    <span><?php include('scroll.txt'); ?></span>
    </marquee>
    </div>
    <div id="left">
    <a class="twitter-timeline" href="https://twitter.com/psnvnprasad" data-widget-id="413606451471347712">Tweets by @psnvnprasad</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
    <div id="center">
        <embed type="application/x-shockwave-flash" src="https://static.googleusercontent.com/external_content/picasaweb.googleusercontent.com/slideshow.swf" width="750" height="405" flashvars="host=picasaweb.google.com&hl=en_US&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F112906133779919434519%3Falt%3Drss%26kind%3Dphoto%26access%3Dpublic%26psc%3DF%26q%26uname%3D112906133779919434519" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
    </div>
</div>
<div id="footer">
	<div id="band">
		<div id="social">
			<a id="email" href="mailto:prasadlic@gmail.com"><img src="./img/mail.png" /></a>
			<a id="facebook" href="https://www.facebook.com/psnvnprasad"><img src="./img/facebook.png" /></a>
			<a id="twitter" href="https://www.twitter.com/psnvnprasad"><img src="./img/twitter.png" /></a>
		</div>
		<p><a href="">Home</a> | 
		<a href="./career/">Career in LIC</a> |
		<a href="./support/">Agent support</a> |
		<a href="./gallery/">Gallery</a> |
		<a href="./contact/">Contact us</a>
		</p>
	</div>
	<p id="copy">&copy; 2014. <a href="https://www.twitter.com/manideep2607">Manideep Polireddi</a>.</p>
</div>
</body>
</html>