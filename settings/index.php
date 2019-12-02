<!DOCTYPE html>
<html>
<head>
	<title>Feed - share with the comunity</title>
	<!-- Fonts -->
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="/node_modules/materialize-css/dist/css/materialize.min.css">

    

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
   	<script src="https://kit.fontawesome.com/2ca0972b2c.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }area, textarea{
        	height: 220px;
        }textarea {
          resize: none;
        }
    </style>



</head>
<body>
	<?php
    require('../etc/connection.php');
    require('../etc/session.php');
  ?>
<!-- Dropdown Structure -->
<ul id="menu" class="dropdown-content">
  <li><a href="" class="black-text"><?php echo $_SESSION["name"]; ?></a></li>
  <li><a href="/settings/" class="black-text">Settings</a></li>
  <li class="divider"></li>
  <li><a href="/user/exit.php" class="red-text">Exit</a></li>
</ul>
<ul id="menu1" class="dropdown-content">
  <li><a href="" class="black-text"><?php echo $_SESSION["name"]; ?></a></li>
  <li><a href="/settings/" class="black-text">Settings</a></li>
  <li class="divider"></li>
  <li><a href="/user/exit.php" class="red-text">Exit</a></li>
</ul>
<div class="navbar-fixed hide-on-small-only">
	<nav class="black">
	  <div class="nav-wrapper">
	    <a href="/" class="brand-logo">BLOH!</a>
	    <ul class="right show-on-medium-and-up">
	      <li><a href="#writePost" class="modal-trigger"><i class="material-icons">edit</i></a></li>
	      <li><a href="sass.html"><i class="material-icons">notifications_active</i></a></li>
	      <!-- Dropdown Trigger -->
	      <!-- <i class="fab fa-buromobelexperte"></i> -->
	      <li><a class="dropdown-trigger" href="#!" data-target="menu1"><i class="material-icons">apps</i></a></li>
	    </ul>
	  </div>
	</nav>
</div>



<br>
<section class="row">
	<div class="col m2 s12 hide-on-small-only">
		<table>
			<tr><td><a href="#profile" class="black-text">Profile</a></td></tr>
			<tr><td><a href="#sessionsManager" class="black-text">Sessions</a></td></tr>
		</table>
	</div>
	<div class="col offset-m3 m8 s12" style="position: absolute;">
		<h4 class="hide-on-med-and-up"></h4>
	<ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons green-text">fiber_manual_record</i>Active sessions</div>
      <div class="collapsible-body">
      	<span>
      		<table>
      			<?php
      				$query = 'SELECT INET_NTOA(`ip`) ip, `id`,`dateTime` FROM blogdb.loginhistory WHERE `status` = "active" AND `user` = '.$_SESSION['id'].';';
      				$run = mysqli_query($con,$query);

   					while ($data =  mysqli_fetch_array($run))  {
   						
   					

      			?>
      			<tr><td><?php echo $data['ip']; ?></td><td><?php echo $data['dateTime'];?></td></tr>
      			
      			<?php } ?>
      		</table>
      	</span>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons red-text">fiber_manual_record</i>Ended sessions</div>
      <div class="collapsible-body">
      	<span>
      		<table>
      			<?php
      				$query = 'SELECT INET_NTOA(`ip`) ip, `id`,`dateTime` FROM blogdb.loginhistory WHERE `status` = "ended" AND `user` = '.$_SESSION['id'].';';
      				$run = mysqli_query($con,$query);

   					while ($data =  mysqli_fetch_array($run))  {

      			?>
      			<tr><td><?php echo $data['ip']; ?></td><td><?php echo $data['dateTime'];?></td></tr>
      			
      			<?php } ?>
      		</table>
      	</span>
      </div>
    </li>
  </ul>
  </div>
</section>










<!-- Modal Structure -->
<div id="writePost" class="modal modal-fixed-footer">
	<div class="modal-content">
    	<h4>Write a new post</h4>
   		<div class="row">
  			<form class="col s12" method="post" action="/posts/create.php">
    			<div class="row">
      				<div class="input-field col s12 textarea">
        				<textarea name="contentText" id="textarea1"  required=""></textarea>
      				</div>
    			</div>
		</div>
    </div>
    <div class="modal-footer">
    	<button class="col offset-l4 l3 offset-s1 s6 black btn waves-effect waves-light" type="submit" name="action">
        	Publish
        	<i class="material-icons right">send</i>
       	</button>
    </div>
    		</form>
</div>



<br>
<div class="hide-on-med-and-up" style="position: fixed; width: 100%;bottom: 0;right: 0;height: 90px;">

<div class="black z-depth-5">
  <div class="container">
  	<ul class="row">
  		<br>
  		<li class="col s1" style="margin-left: 5%"><center><a href="/" class="white-text"><i class="material-icons"><b>home</b></i><br>home</a></center></li>
  		<li class="col s3" style="margin-left: 7%"><center><a  href="#writePost" class="modal-trigger white-text" class="white-text"><i class="material-icons">edit</i><br>new post hjfgsdjhgf</a></center></li>
  		<li class="col s3" style="margin-left: 2%"><center><a href="/notifications/" class="white-text"><i class="material-icons">notifications_active</i><br>notifications</a></center></li>
  		<li class="col s2" style="margin-left: 5%"><a class="dropdown-trigger white-text" href="#!" data-target="menu"><i class="material-icons">menu</i><br>menu</a></li>
  	</ul>
  </div>
</div>
</div>

<script type = "text/javascript" src="/node_modules/jquery/dist/jquery.js"></script>
<!-- Compiled and minified JavaScript -->
<script type = "text/javascript" src="/node_modules/materialize-css/dist/js/materialize.min.js"></script> 
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, {
    alignment: 'left',
    autoTrigger: true,
    constrainWidth: false,
    container: null,
    coverTrigger: false,
    closeOnClick: true,
    hover : false,
    inDuration: 250,
    outDuration: 300,
    onOpenStart: null,
    onOpenEnd: null,
    onCloseStart: null,
    onCloseEnd: null
});
});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.modal').modal();
		$('.collapsible').collapsible();
	})
</script>
</body>
</html>