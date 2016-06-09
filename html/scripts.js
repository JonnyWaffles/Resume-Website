$( document ).ready(function() {
    $("#about").click(function () {
		$("#main").load("about.html");
	});
	$("#resume").click(function () {
		$("#main").load("resume.html");
	});
});