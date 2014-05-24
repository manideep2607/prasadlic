Image1 = new Image(128,128);
Image1.src = "../img/loader.gif";

function showError (response) {
	var $err = document.getElementById('err');
	var $form = document.getElementById('form');
	var $norm = document.getElementById('norm');
	if(response==1){
		$norm.innerHTML = 'Thanks for showing interest in LIC agency.<br/> We will get back to you soon.';
		$err.innerHTML = '';
		$form.innerHTML = '';
	}
	else{
		$err.innerHTML = 'Sorry there is some problem with our servers. Try again later.';
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
xmlhttp.open("POST","sendmail.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(params);
}

function verifyForm(){
	var $err = document.getElementById('err');
	$err.innerHTML = "";
	var $form = document.getElementById('form');
	var $norm = document.getElementById('norm');
	var nameBox = document.getElementById('name');
	var phoneBox = document.getElementById('phone');
	var addressBox = document.getElementById('address');

	var name = nameBox.value;
	var phone = phoneBox.value;
	var address = addressBox.value;

	var nameErr, phoneErr, addressErr;

	nameErr = (name == "" || name == null);
	addressErr = (address == "" || address == null);
	phoneErr = !(/[0-9]{10}/i.test(phone));

	if(nameErr){
		nameBox.style.border = "1px solid #f00";
		$err.innerHTML = "Please enter your name";
		return false;
	}
	if(phoneErr){
		phoneBox.style.border = "1px solid #f00";
		$err.innerHTML = "Please enter your 10 digit mobile number";
		return false;
	}
	if(addressErr){
		addressBox.style.border = "1px solid #f00";
		$err.innerHTML = "Please enter your address";
		return false;
	}

	var params = "name="+name+"&phone="+phone+"&address="+address;
	$html = "Receiving your info...<br/><img src=\"../img/loader.gif\" />";
	$norm.innerHTML = $html;
	$form.style.display = "none";
	postForm(params);
	return false;
}