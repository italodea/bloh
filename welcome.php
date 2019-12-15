<!DOCTYPE html>
<html>
<head>
	<title>Welcome please login or register</title>
	<!-- Fonts -->
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="/node_modules/materialize-css/dist/css/materialize.min.css">

    

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
   	<script src="https://kit.fontawesome.com/2ca0972b2c.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bloh.css">




</head>
<body id="welcome">
  <?php session_start();
    if (isset($_SESSION['id'])) {
      header("Location:/");
    }
  ?>
	<!-- <img src="https://ojln9w.bl.files.1drv.com/y4mkI_zV8vfhbDEYtL-ilGSiyxiAVU-Pz10qVUcAnMzn_YFbltDywvoI2G7Nt3jRc238JsQLc8Y72z-lIyQfQhWqYbmKl__IzsYI1RAIAyhha6SGNRuS4O0-cgRHaTFpF37YilGXzKytcTF1i_xbFJpVLG2lqgfgaiD6u7ThCobUVfBJwhzZqDlF9YxLG7Y0Fvm4vb5sb-ZO-yqtBKhjMUCHw?width=1080&height=810&cropmode=none" width="1080" height="810" /> -->
	<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<div class="navbar-fixed">
	<nav class="black">
	  <div class="nav-wrapper">
	    <a href="#!" class="brand-logo">BLOH!</a>
	    <ul class="right hide-on-med-and-down">
	      
	    </ul>
	  </div>
	</nav>
</div>

<br><br><br>




<div class="row" id="form-login">
  <div class="card col offset-l7 l4 s10 offset-s1" >
    <div class="row">
      <div class="col offset-s2 s8 red white-text" id="alertsLogin">
        <center><h6 id="alertsLoginText"></h6></center>
      </div>
    </div>
    <!-- <form action="user/login.php" method="post"> -->
      <br>
    <div class="row">
      <div class="input-field col s10 l10 offset-s1 offset-l1">
        <input placeholder="" id="email" type="email" class="validate" required="">
        <label for="email">Email</label>
        <span class="helper-text" data-error="Wrong format" data-success="Ok"></span>
      </div>    
    </div>
    <div class="row">
      <div class="input-field col s10 l10 offset-s1 offset-l1">
        <input placeholder="" id="password" type="password" class="validate" required="" minlength="8">
        <label for="password">Password</label>
        <span class="helper-text" data-error="min 8 characters" data-success="Ok"></span>
      </div>
    </div>
    <div class="row">
      <a href="#" class="col s4 l3 offset-l1 red-text" id="register"><br>Register?</a>
      <button class="col offset-l4 l3 offset-s1 s6 black btn waves-effect waves-light" onclick="login()" name="action">
        Login
        <i class="material-icons right">send</i>
      </button>
    </div>
    <!-- </form> -->
  </div>
</div>




<div class="row" id="form-register">
  <div class="card col offset-l5 l6 s10 offset-s1">
    <div class="row">
      <div class="col offset-s2 s8 red white-text" id="alertsRegister">
        <center><h6 id="alertsRegisterText"></h6></center>
      </div>
    </div>
    <div class="row">
      <div class="col s1 l1 input-field">
        <i class="material-icons prefix">person</i>
      </div>
          <div class="input-field col s10 l5">
              <input placeholder="" id="firstName" type="text" required="">
              <label for="first_name">First name</label>
          </div>
          <div class="input-field col s10 offset-s1 l5">
              <input placeholder="" id="lastName" type="text" class="validate" required="">
              <label for="last_name">Last name</label>
          </div>
    </div>
    <div class="row">
      <div class="col s1 l1 input-field">
        <i class="material-icons prefix">email</i>
      </div>
          <div class="input-field col s10 l10">
              <input placeholder="" id="emailRegister" type="email" class="validate" required="">
              <label for="email">Email</label>
              <span class="helper-text" data-error="Wrong format" data-success="Ok"></span>
          </div>
          <div class="input-field col s10 l10 offset-s1 offset-l1">
              <input id="passwordRegister" type="password" class="validate" required="" minlength="8">
              <label placeholder="" for="password">Password</label>
              <span class="helper-text" data-error="min 8 characters" data-success="Ok"></span>
          </div>
    </div>
    <div class="row">
      <a href="#" class="col s4 l2 offset-l1 red-text" id="login"><br>Login?</a>
      <button class="col offset-l4 l3 offset-s1 s6 black btn waves-effect waves-light" onclick="register()" name="action">
        Register
        <i class="material-icons right">send</i>
      </button>
    </div>
  </div>
</div>

<script type = "text/javascript" src="/node_modules/jquery/dist/jquery.js"></script>
<!-- Compiled and minified JavaScript -->
<script type = "text/javascript" src="/node_modules/materialize-css/dist/js/materialize.min.js"></script>
<script type = "text/javascript" src = "/node_modules/jquery-ui-dist/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/loginRegisterCard.js"></script> 
<script type="text/javascript" src="/js/loginRegisterAjax.js"></script>

</body>
</html>