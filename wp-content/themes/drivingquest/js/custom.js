
jQuery( document ).ready(function($) {
  $(".selected-value").hide();
  $(".selected-v").css("text-align", "center");
  $("#campus-list" ).change(function () {
    $(".selected-value").show();
    var str = $("#campus-list").val();
    $(".selected-value" ).text( str );
    $(".campus-value").css("align-items", "center");
    $(".selected-v").css("text-align", "left");
    $(".empty-value").hide();
  });


$('.display-card').first().show();
$('.ed-card').click(function(e){
  let id = $(this).data('target');
  $('.display-card').fadeOut();
  $(id).fadeIn();
});
});






