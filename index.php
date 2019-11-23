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
        }
    </style>



</head>
<body>
	<?php session_start();
		if (!$_SESSION['id']) {
			header("Location:/welcome.php");
		}
	?>
	<!-- Dropdown Structure -->
<ul id="menu" class="dropdown-content">
  <li><a href="" class="black-text"><?php echo $_SESSION["name"]; ?></a></li>
  <li><a href="#!" class="black-text">Settings</a></li>
  <li class="divider"></li>
  <li><a href="user/exit.php" class="red-text">Exit</a></li>
</ul>
<ul id="menu1" class="dropdown-content">
  <li><a href="" class="black-text"><?php echo $_SESSION["name"]; ?></a></li>
  <li><a href="#!" class="black-text">Settings</a></li>
  <li class="divider"></li>
  <li><a href="user/exit.php" class="red-text">Exit</a></li>
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
	      <li><a class="dropdown-trigger" href="#!" data-target="menu1"><i class="fas fa-th" ></i></a></li>
	    </ul>
	    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	  </div>
	</nav>
</div>

<br><br><br>
<div class="row">
	<div class="col offset-m1 s12 m10">
	<div class="row">
	<blockquote class="col s12 z-depth-1">		
		<br>
    <b>Note:</b> This is a beta version yet
    <br>
</blockquote>
</div>
</div>
</div>

<?php

require('etc/connection.php');
$query = "SELECT DISTINCT(users.id),posts.id postId,posts.author, posts.mainContent,posts.likes,posts.comments,posts.created_at,users.name FROM `posts`,`users` WHERE users.id = posts.author ORDER BY posts.id DESC;";
$run = mysqli_query($con,$query);

while ($resultPost=mysqli_fetch_array($run)) {
	# code...


?>
<div class="row">
	<div class="col offset-l1 l10 s12">
		<div class="card z-depth-1">
			<div class="row">
				<div class="col l1 s2">
					<img src='<?php echo "https://robohash.org/".$resultPost['name']."?set=set2" ; ?>' alt="" class="circle responsive-img">
				</div>
				<div class="col s8 l10">
					<h6><?php echo $resultPost['name']; ?></h6>
				</div>
				<div class="col s1 l1">
				<?php if($resultPost['author'] == $_SESSION['id']){  ?>
					<a class='dropdown-trigger' href='#' data-target='postOptions<?php echo md5($resultPost['postId'])?>'><i class="material-icons blue-grey-text lighten-1">more_horiz</i></a>
					
					<!-- Dropdown Structure -->
				  <ul id='postOptions<?php echo md5($resultPost['postId'])?>' class='dropdown-content'>
				    <li><a href='#editPost<?php echo md5($resultPost['postId'])?>' class="modal-trigger black-text">edit</a></li>
				    <li><a href='<?php echo "/posts/delete.php?id=".$resultPost['postId'];?>' class="red-text">remove</a></li>
				  </ul>

				  <!-- Modal Structure edit -->
  				<div id='editPost<?php echo md5($resultPost['postId'])?>' class="modal modal-fixed-footer">
    				<div class="modal-content">
      				<h4>Edit this post</h4>
   						<div class="row">
  							<form class="col s12" method="post" action='posts/update.php?id=<?php echo $resultPost['postId']?>'>
    							<div class="row">
      							<div class="input-field col s12 textarea">
        							<textarea name="contentText" id="textarea1"><?php echo str_replace(array("<br />"), "", $resultPost['mainContent'] ); ?></textarea>
      							</div>
    							</div>
							</div>
    				</div>
    				<div class="modal-footer">
      				<button class="col offset-l4 l3 offset-s1 s6 black btn waves-effect waves-light" type="submit" name="action">
       				 	Save changes
         				<i class="material-icons right">send</i>
       				</button>
    				</div>
    						</form>
					  </div>
									<?php } ?>
				</div>
				<div class="col s10">
					published at: <?php echo date('d/m/Y H:i',strtotime($resultPost['created_at'])); ?>
				</div>
			</div>
			<div class="row">
				<div class="col offset-m1 offset-s2 offset-l1 l10">
					<code>
					<?php echo $resultPost['mainContent']; ?>
					</code>	
				</div>
			</div>
			<div class="row">
				<div class="col offset-s1" style="color: black;">
  					&nbsp;&nbsp;&nbsp;<i class="material-icons tiny">favorite</i><?php echo $resultPost['likes']; ?>
				</div>
				<div class="col" style="color: black;">
  					&nbsp;&nbsp;&nbsp;<i class="material-icons tiny">mode_comment</i><?php echo $resultPost['comments']; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php }; ?>

<br><br><br>
<!-- 
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

 -->




  <!-- Modal Structure -->
  <div id="writePost" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Write a new post</h4>
   		<div class="row">
  			<form class="col s12" method="post" action="posts/create.php">
    			<div class="row">
      			<div class="input-field col s12 textarea">
        			<textarea name="contentText" id="textarea1" value="this \n is a <br/> new \r line"></textarea>
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

  <!-- Modal Structure -->
  <div id="editPost" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Write a new post</h4>
   		<div class="row">
  			<form class="col s12" method="post" action="posts/create.php">
    			<div class="row">
      			<div class="input-field col s12 textarea">
        			<textarea name="contentText" id="textarea1" value="this \n is a <br/> new \r line"></textarea>
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

<div class="hide-on-med-and-up" style="position: fixed; width: 100%;bottom: 0;right: 0;height: 90px;">

<div class="black z-depth-5">
  <div class="container">
  	<ul class="row">
  		<br>
  		<li class="col s1" style="margin-left: 5%"><center><a href="/" class="white-text"><i class="material-icons"><b>home</b></i><br>home</a></center></li>
  		<li class="col s3" style="margin-left: 7%"><center><a  href="#writePost" class="modal-trigger white-text" class="white-text"><i class="material-icons">edit</i><br>new post hjfgsdjhgf</a></center></li>
  		<li class="col s3" style="margin-left: 2%"><center><a href="/notifications" class="white-text"><i class="material-icons">notifications_active</i><br>notifications</a></center></li>
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
	})
</script>

</body>
</html>