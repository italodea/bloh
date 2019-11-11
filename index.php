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
        }.textarea, textarea{
        	height: 180px;
        }
    </style>



</head>
<body>
	<?php session_start(); ?>
	<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!"><?php echo $_SESSION["name"]; ?></a></li>
  <li><a href="#!">Settings</a></li>
  <li class="divider"></li>
  <li><a href="#!">Exit</a></li>
</ul>
<div class="navbar-fixed">
	<nav class="black">
	  <div class="nav-wrapper">
	    <a href="#!" class="brand-logo">Logo</a>
	    <ul class="right hide-on-med-and-down">
	      <li><a href="sass.html"><i class="far fa-bell"></i></a></li>
	      <li><a href="#writePost" class="modal-trigger"><i class="fas fa-pen"></i></a></li>
	      <!-- Dropdown Trigger -->
	      <!-- <i class="fab fa-buromobelexperte"></i> -->
	      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="fas fa-th" ></i></a></li>
	    </ul>
	  </div>
	</nav>
</div>

<br><br><br>

<div class="row">
	<div class="col offset-l1 l10 s12">
		<div class="card z-depth-2">
			<div class="row">
				<div class="col l1 s2">
					<img src="https://robohash.org/jrklje?set=set2" alt="" class="circle responsive-img">
				</div>
				<div class="col s10">
					<h6>Name of the person say</h6>
				</div>
				<div class="col s10">
					published at: 18:06pm
				</div>
			</div>
			<div class="row">
				<div class="col offset-m1 offset-s1 offset-l1 l10">
					<code>
					$ pip install beautifulsoap
					</code>	
				</div>
			</div>
			<div class="row">
				<div class="col offset-s1" style="color: black;">
  					&nbsp;&nbsp;&nbsp;<i class="fas fa-lg fa-heart">12</i>
				</div>
				<div class="col" style="color: black;">
  					&nbsp;&nbsp;&nbsp;<i class="fas fa-lg fa-comments">5</i>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row ">
	<div class="col offset-l1 l10 s12 ">
		<div class="card z-depth-2">
			<div class="row">
				<div class="col l1 s2">
					<img src="https://robohash.org/windows9?set=set2" alt="" class="circle responsive-img">
				</div>
				<div class="col s10">
					<h6>Name of the person say</h6>
				</div>
				<div class="col s10">
					published at: 18:06pm
				</div>
			</div>
			<div class="row">
				<div class="col offset-m1 offset-s1 offset-l1 l10">
					<code>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nost<b>brud</b> exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</code>
					<br>
					<img src="https://robohash.org/italodea?set=set2" alt="" class=" responsive-img">
					<img src="https://robohash.org/italodea?set=set2" alt="" class=" responsive-img">
				</div>
			</div>
			<div class="row">
				<div class="col offset-s1" style="color: black;">
  					&nbsp;&nbsp;&nbsp;<i class="fas fa-lg fa-heart">12</i>
				</div>
				<div class="col" style="color: black;">
  					&nbsp;&nbsp;&nbsp;<i class="fas fa-lg fa-comments">5</i>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col offset-l1 l10 s12 ">
		<div class="card z-depth-2">
			<div class="row">
				<div class="col l1 s2">
					<img src="https://robohash.org/nsk99?set=set2" alt="" class="circle responsive-img">
				</div>
				<div class="col s10">
					<h6>Name of the person say</h6>
				</div>
				<div class="col s10">
					published at: 18:06pm
				</div>
			</div>
			<div class="row">
				<div class="col offset-m1 offset-s1 offset-l1 l10">
					<code>
					Aqui agora vai um video bem legal.<br>
					Espero que gostem
					</code>
					<br>
      				<div class="video-container row">
        				<iframe class="col s12" src="https://www.youtube.com/embed/0rkPnaVppbQ?rel=0" frameborder="0" allowfullscreen></iframe>
      				</div>	
				</div>
			</div>
			<div class="row">
				<div class="col offset-s1 s1" style="color: black;">
  					&nbsp;&nbsp;&nbsp;<i class="fas fa-lg fa-heart">12</i>
				</div>
				<div class="col s1" style="color: black;">
  					&nbsp;&nbsp;&nbsp;<i class="fas fa-lg fa-comments">5</i>
				</div>
				<div class="col offset-s7 s1" >
  					&nbsp;&nbsp;&nbsp;<a href="#" style="color: black;"><i class="fas fa-lg fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>






  <!-- Modal Structure -->
  <div id="writePost" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Write a new post</h4>
   		<div class="row">
  			<form class="col s12">
    			<div class="row">
      			<div class="input-field col s12 textarea">
        			<textarea id="textarea1" class="materialize-textarea"></textarea>
        			<label for="textarea1">Textarea</label>
      			</div>
    			</div>
  			</form>
			</div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Publish</a>
    </div>
  </div>







<script type = "text/javascript" src="/node_modules/jquery/dist/jquery.js"></script>
<!-- Compiled and minified JavaScript -->
<script type = "text/javascript" src="/node_modules/materialize-css/dist/js/materialize.min.js"></script> 
<script type="text/javascript">
	$(document).ready(function(){
		$(".dropdown-trigger").dropdown();
		$('.modal').modal();
	})
</script>

</body>
</html>