<?php
if(!isset($_SESSION['usr'])){
session_start(); 
}?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prasad LIC</title>
<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
<link rel="stylesheet" href="../styles/admin.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
<script src="../scripts/admin.js">
</script>
</head>
<body>
<?php if(!isset($_SESSION['usr'])): ?>
    <div id="login_panel">
        <div id="load"></div>
        <form name="admin_login" onsubmit="return verifyForm()" method="post" action="login.php" >
            <p id="error"></p>
            <input id="usr" name="usr" type="text" placeholder="Your Username" class="textbox"/>
            <input id="pwd" name="pwd" type="password" placeholder="Password" class="textbox" />
            <input name="submit" type="submit" value="Login" class="button" />
        </form>
    </div>
<?php else:
include("admin.php");
 ?>

<?php endif; ?>
</body>

</html>