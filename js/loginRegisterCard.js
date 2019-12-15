$(document).ready(function(){
  $("#form-register").hide();
  $("#login").click(function(){
    $("#form-login").animate({opacity: '1'});
    $("#form-login").fadeIn("slow");
    $("#form-register").fadeOut(10);
    $("#form-register").animate({opacity: '0'});

  });
  $("#register").click(function(){
    $("#form-register").animate({opacity: '1'});
    $("#form-register").fadeIn("slow");
    $("#form-login").fadeOut(10);
    $("#form-login").animate({opacity: '0'});
  });
});