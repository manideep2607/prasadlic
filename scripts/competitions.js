// JavaScript Document
var title = new Array();
var from = new Array();
var to = new Array();
var condition = new Array();
var prize = new Array();
var n;
var current;
var hoverIndex;
var hovered = false;
loadXML();

function loadXML(){
	$.ajax({
		url:'competitions.xml',
		dataType:'xml',
		success:function(data){
			loadCompetitions(data);
		}
	});
}

function loadCompetitions(response){
	$xml = $(response);
	$comps = $xml.find("competition");
	n = 0;
	$comps.each(function() {
		title[n] = $(this).find("title").text();
		from[n] = $(this).find("from").text();
		to[n] = $(this).find("to").text();
		condition[n] = $(this).find("condition").text();
		prize[n] = $(this).find("prize").text();
		n++;
	});
	compDiv = document.getElementById("competitions");
	compDiv.innerHTML = "";
	for(i=0;i<n;i++){
		$html = 
		 '<div id="comp'+i+'" class="competition">'+
			'<h1>'+title[i]+'</h1>'+
			'<p class="date">'+from[i] + ' - '+to[i]+'</p>'+
			'<p class="conditions">'+condition[i]+'</p>'+
			'<p class="prize">'+prize[i]+'</p>'+
		'</div>';
		compDiv.innerHTML += $html;
	}
	if(n!=1){
		compDiv.innerHTML += '<div id="nav"><div id="nav_wrap"></div></div>';
		navWrapDiv = document.getElementById("nav_wrap");
		for(i=0;i<n;i++){
			navWrapDiv.innerHTML += '<div id="nav' + i + '" onMouseOver="hoverChange('+i+')" onMouseOut="hovered = false;"></div>';
		}
		navWrapDiv.style.width = 36*n + "px";
		current = 0;
		hovered = true;
		animate();
		hovered = false;
		setInterval(function(){animate();},10000);
	}
}

function animate(){
	//if hovered
	if(hovered){
		for(i=0;i<n;i++){
			if(i!=current){
				$("#comp"+i).fadeOut(500);
				$("#nav"+i).attr("class","");
			}
		}
		$("#nav"+current).attr("class","current");
		$("#comp"+current).fadeIn(500);
	}
	
	//normal condition
	else{
		var next = (current + 1)%n;
		//fade out current comp
		$("#comp"+current).fadeOut(500);
		
		//change nav
		$("#nav"+current).attr("class", "");
		$("#nav"+next).attr("class", "current");
		
		//fade in next comp
		$("#comp"+next).fadeIn(500);
		
		current = next;
	}
}

function hoverChange(i){
	current = i;
	hovered = true;
	animate();
}

