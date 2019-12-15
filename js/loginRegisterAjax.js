function login(){
  $.ajax({
  url : "/user/login.php",
  type: "POST",
  data : {
    email : $("#email").val(), 
    password : $("#password").val()
  } , 
  success: function(data, textStatus, jqXHR) {
    if (data == "1"){
      window.location.href="/";
    }else if(data.match(/No connection could be made because the target machine actively refused it/)){
      $('div#alertsLogin').css('opacity','1');
      $('h6#alertsLoginText').text("error establishing a database connection");
      $('div#alertsLogin').effect( "shake", {times:2}, 400 );
    }else{
      M.toast({html: data});
      $('div#alertsLogin').css('opacity','0');
      $('h6#alertsLoginText').text("");
    }
  },
  error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus);// if there is an error
    }

  })
};
function register(){
  $.ajax({
  url : "/user/register.php",
  type: "POST",
  data : {
    firstName : $("#firstName").val(),
    lastName : $("#lastName").val(),
    email : $("#emailRegister").val(), 
    password : $("#passwordRegister").val()
  } , 
  success: function(data, textStatus, jqXHR) {
    if (data == "1"){
      window.location.href="/";
    }else if(data.match(/No connection could be made because the target machine actively refused it/)){
      $('div#alertsRegister').css('opacity','1');
      $('h6#alertsRegisterText').text("error establishing a database connection");
      $('div#alertsRegister').effect( "shake", {times:2}, 400 );
    }
    else{
      M.toast({html: data});
      $('div#alertsRegister').css('opacity','0');
      $('h6#alertsRegisterText').text("");
    }
  },
  error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus);// if there is an error
    }

  })
};