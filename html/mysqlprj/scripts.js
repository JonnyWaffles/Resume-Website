$("textarea").css("height", $(window).height()-120);

$("textarea").keyup(function () {
  $.post("updatediary.php", {diary:$("textarea").val()});
})