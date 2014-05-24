<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prasad LIC</title>
<?php include('../includes/files.html'); ?>
<link rel="stylesheet" href="../styles/career.css" />
<script type="text/javascript" src="../scripts/career.js"></script>
</head>
    
<body>
<?php include('../includes/global-nav.html'); ?>
<div id="content-wrap">
	<div id="joinbutton"><a href="">Join Us</a></div>
	<div id="agencyascareer">
		<div class="header">
			<h1>Pick agency as your career</h1>	
		</div>
		<div class="content"><img src="../img/agencycareer.jpg" /></div>
	</div>
	<div id="LIC">
		<div class="header">
			<h1>LIC is your best option</h1>
		</div>
		<div class="content">
			<ul id="licpros">
				<li>LIC is the No.1 brand in service sector</li>
				<li>Best life insurers in the world</li>
				<li>Best investor in the capital market</li>
				<li>Fully computerized operations in all 2048 branches</li>
				<li>Product for every segment and budget</li>
				<li>Transparency in operations</li>
				<li>Best practices in the industry</li>
				<li>Sovereign guarentee to customers</li>
			</ul>
		</div>
	</div>
	<div id="offerings">
		<div class="header">
			<h1>World class offerings
		</div>
		<div class="content">
			<ul>
				<li>Free training</li>
				<li>Unlimited income opportunities</li>
				<li>Easy access for your customer</li>
				<li>Insentives on life insureance including foreign trips</li>
				<li>Daily monitoring and support through Development Officers(D.Os)</li>
				<li>Easy access to infotmation through website - www.licindia.com</li>
				<li>Regular inputs to upgrade your skills</li>
			</ul>
		</div>
	</div>
	<div id="rewards">
		<div class="header">
			<h1>We reward your efforts
		</div>
		<div class="content">
			<ul>
				<li>Life time commission(including hereditary) - ranges from 2% to 35%</li>
				<li>Service Tax on your commision paid by LIC</li>
				<li>Fast track career growth through club membership</li>
				<li>We treat you as an employee - Festival Advance, Graduity, Medi-claim, Term Insurance, etc. benefits payable</li>
				<li>We pay for you operating/maintating of your office</li>
				<li>Laptop Advance</li>
				<li>Provision for Interest free car/2-wheeler loan</li>
				<li>Interest free loans for your family needs</li>
				<li>Performance Incentives/Rewards(weekly to monthly basis)</li>

			</ul>
		</div>
	</div>
	<div id="joinDiv">
		<div id="norm">Come, join us. Share your details with us.</div>
		<div id="err"></div>
		<div id="form">
			<form name="info" action="sendmail.php" method="post" onsubmit="return verifyForm()" >
				<input name="name" id="name" placeholder="Name" class="text" type="text"><br/>
				<input name="phone" id="phone" placeholder="Moblie Number Ex: 8801192444" class="text" type="tel"><br/>
				<textarea name="address" id="address" placeholder="Your Address"></textarea><br/>
				<input id="submit" class="button" name="submit" type="submit" value="Submit" /><br/>
			</form>
		</div>
	</div>
</div>
<?php
include('../includes/footer.html');
?>
</body>