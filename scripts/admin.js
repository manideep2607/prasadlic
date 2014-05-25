// JavaScript Document
getCompXML();

function showResponse (response) {
	$("#status").html(response);
	$("#status").fadeIn(500);
	$("#status").delay(3000).fadeOut(500);
	getCompXML();
}

function loadCompetitions(response){
	$xml = $(response);
	$comps = $xml.find("competition");
	var n = 0;
	var title = new Array();
	var from = new Array();
	var to = new Array();
	$comps.each(function() {
		title[n] = $(this).find("title").text();
		from[n] = $(this).find("from").text();
		to[n] = $(this).find("to").text();
		n++;
	});
	$html = "<h1>Competitions</h1><table>";
	$("#competitions_del").html("");
	for(i=0;i<n;i++){
		$html += "<tr><td class=\"title\">"+title[i]+"</td><td class=\"date\">"+from[i]+" - "+to[i]+"</td><td><button onClick=\"return deleteCompetition("+i+")\">Delete</button></td></tr>";
	}
	$html += "</table>";
	$("#competitions_del").html($html);
}

function getCompXML(){
	$.ajax({
		url:"../support/competitions.xml",
		success:function(response){
			loadCompetitions(response);
		}
	});
}

function addAgent() {
	$("#status").html("");
	$code = $("#code").val();
	$name = $("#name").val();
	$.ajax({
		type:"POST",
		url:"addAgent.php",
		data:{code:$code, name:$name},
		success:function(response){
			showResponse(response);
			$("#code").val("");
			$("#name").val("");
		}
	});
    return false;
}

function deleteAgent(){
	$("#status").html("");
	$code = $("#dcode").val();
	$.ajax({
		type:"POST",
		url:"deleteAgent.php",
		data:{code:$code},
		success:function(response){
			showResponse(response);
			$("#dcode").val("");
		}
	});
    return false;
}

function deleteCompetition($id){
	$("#status").html("");
	$.ajax({
		type:"POST",
		url:"deleteCompetition.php",
		data:{id:$id},
		success:function(response){
			showResponse(response);
		}
	});
	return false;
}

function addCompetition(){
	$("#status").html("");
	var $title = $("#title").val();
	var $from = $("#from").val();
	var $to = $("#to").val();
	var $condition = $("#condition").val();
	var $prize = $("#prize").val();
	
	$.ajax({
		type:"POST",
		url:"addCompetition.php",
		data:{title:$title, from:$from, to:$to, condition:$condition, prize:$prize},
		success:function(response){
			showResponse(response);
		}
	});
	return false;
}

function loadPage(){
	$.ajax({
		url:"admin.php",
		success:function($html) {
			$("body").html($html);
			getCompXML();
		}
	});
}

function showError(n){
	switch(n){
		case "0":
		$("#error").html("Wrong Username/Password");
		break;
		case "1":
		$("#load").html("loading<br/><img src=\"../img/loader.gif\" />");
		loadPage();
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
	var usr = document.getElementById("usr").value;
	var pwd = document.getElementById("pwd").value;
	var $error = document.getElementById("error");
	var $load = document.getElementById("load");
	if(usr == null || usr == ""){
		$error.innerHTML = "Please enter a valid Username";
	}
	else if(pwd == null || pwd == ""){
		$error.innerHTML = "Please enter the password";
	}
	else{
		var params = "usr="+usr+"&pwd="+pwd;
		$load.innerHTML = "Connecting<br/><img src=\"../img/loader.gif\" />";
		$load.style.display = "block";
		postForm(params);
	}
	return false;
}

function editScroll(){

	$("#status").html("");
	$scrollText = $("#scrollText").val();
	$.ajax({
		type:"POST",
		url:"editScroll.php",
		data:{scrollText:$scrollText},
		success:function(response){
			showResponse(response);
			$("#scrollText").val("");
		}
	});
    return false;
}

function logout(){
	$.ajax({
		type:"GET",
		url:"logout.php",
		success:function(response){
			loadPage();
		}
	});
}