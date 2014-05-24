// JavaScript Document
var albumIDs = new Array();
var userID = '112906133779919434519';
$(document).ready(function() {
	requestAlbums();
});

function changeGallery(i){
	//laoding animation
	$("#gallery").html('<img src=\"../img/loader.gif\" />'); 
	
	//change slideshow embed
	$html = '<embed type="application/x-shockwave-flash" src="https://static.googleusercontent.com/external_content/picasaweb.googleusercontent.com/slideshow.swf" width="1000" height="600" flashvars="host=picasaweb.google.com&hl=en_US&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F'+userID +'%2Falbumid%2F' + albumIDs[i] +'%3Falt%3Drss%26kind%3Dphoto%26hl%3Den_US" pluginspage="http://www.macromedia.com/go/getflashplayer">'; 
	 
	$("#gallery").html($html);
	
	return false;
}

function loadDoc(filename){
	$.ajax({
		url: 'https://picasaweb.google.com/data/feed/api/user/' + userID,
		dataType: 'jsonp',
		success: function(response){
			postXMLRequest(filename,response);
		}
	});
}

function requestAlbums(){
	document.getElementById("albums").innerHTML = '<img src="../img/loader.gif" />';
	var user = "106014347779844767700";
	var filename = "https://picasaweb.google.com/data/feed/api/user/" + user;
	loadDoc(filename);
}

function loadAlbums(response){
	var albumDiv = document.getElementById("albums");
	var xmlDoc = $.parseXML(response);
	$xml = $(xmlDoc);
	$albums = $xml.find("entry");
	if($albums.length == 0){
		albumDiv.innerHTML = '<span class="error">Sorry some error occurred</span>';
	}
	else{
		albumDiv.innerHTML =  '';
		$albums.each(function(i) {
			var $entry = $(this);
			var entry = $entry[0];
			$url = entry.getElementsByTagNameNS('http://search.yahoo.com/mrss/','thumbnail')[0].getAttribute("url");
			albumIDs[i] = entry.getElementsByTagNameNS('http://schemas.google.com/photos/2007','id')[0].childNodes[0].nodeValue;
			$title = entry.getElementsByTagName("title")[0].childNodes[0].nodeValue;
			albumDiv.innerHTML += '<div class="album" id="' + i + '" onClick="return changeGallery(' + i + ')"><img src="' + $url + '"/><p class="title">'+ $title + '</p></div>';
		});
	}
}

function postXMLRequest(filename, response){
	var user = "106014347779844767700";
	var url = "https://picasaweb.google.com/data/feed/api/user/" + user;
	switch(filename){
		case url:
			loadAlbums(response);
		break;
		default:
			document.getElementById("albums").innerHTML = "sorry error";
		break;
	}
}

function checking(){
	alert("success");
}