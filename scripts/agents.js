function showError(n){
	$error = document.getElementById("error");
	$load = document.getElementById("load");
	switch(n){
		case "0":
		$load.innerHTML = "loading<br/><img src=\"../img/loader.gif\" />";
		location.reload();
		break;
		case "1":
		$error.innerHTML = "No agent with this agent code";
		$load.innerHTML = "";
		$load.style.display = "none";
		break;
		case "2":
		$error.innerHTML = "Wrong agent code/password";
		$load.innerHTML = "";
		$load.style.display = "none";
		break;
		default:
		break;
	}
}
function postForm(params)
{
	
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    	showError(xmlhttp.responseText);
    }
}
xmlhttp.open("POST","login.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(params);
}

function verifyForm(){
	var code = document.getElementById("code").value;
	var pwd = document.getElementById("pwd").value;
	var $error = document.getElementById("error");
	var $load = document.getElementById("load");
	if(/\D/.test(code) || code == null || code == ""){
		$error.innerHTML = "Please enter a valid agent code";
	}
	else if(pwd == null || pwd == ""){
		$error.innerHTML = "Please enter the password";
	}
	else{
		var params = "code="+code+"&pwd="+pwd;
		$load.innerHTML = "Connecting<br/><img src=\"../img/loader.gif\" />";
		$load.style.display = "block";
		postForm(params);
	}
	return false;
}
function logout(){
		var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    	document.getElementById("agents").innerHTML = xmlhttp.responseText;
    }
}
xmlhttp.open("GET","logout.php",true);
xmlhttp.send();
}