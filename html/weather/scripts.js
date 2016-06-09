/**
resizeBody();

$(window).resize(
  resizeBody
);

function resizeBody() {
  $(".container-fluid").css("height", $(window).height());
 }
**/

var city = $("#city");

$("#findButton").click(function (event) {
  $(".alert").hide();
  event.preventDefault();
  if (city.val() !=="") {
    $.get("scraper.php?city=" + city.val(), function (data) {
      if (data==="") {
        $("#fail").fadeIn();
      } else {
        $("#success").html(data).fadeIn();
      }
    });
  } else {
    $("#noCity").fadeIn();
  }
});


  
