<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Testing Email</title>
</head>

<body>

<form name="mail" method="post" action="test.php" >
<label>To :</label>
<input type="text" name="to" /><br/>
<label>From :</label>
<input type="text" name="from" /><br/>
<label>Subject :</label>
<input type="text" name="subject"  /><br/>
<label>Message :</label>
<textarea name="message"></textarea><br/>
<input type="submit" value="Send Mail" />
</form>


</body>
</html>