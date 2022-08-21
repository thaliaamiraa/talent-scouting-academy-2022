$(document).ready(function(){
$('.header').height($(window).height());
})

$(document).ready(function(){
    $("#flip").click(function(){
    $("#panel").slideToggle("slow");
    });
  });