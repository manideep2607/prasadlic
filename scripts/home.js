// JavaScript Document

function fade() {
	if ($("#profile").is(":visible") == true) {
		$("#profile").fadeOut(1000);
		$("#policy").fadeIn(1000);
	}
	else {
		$("#policy").fadeOut(1000);
		$("#profile").fadeIn(1000);
	}
}

$(document).ready(function() {
	setInterval(function() {fade();}, 5000);
});