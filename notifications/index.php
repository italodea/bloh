<!DOCTYPE html>
<html>
<head>
	<title>Your notifications</title>
	<!-- Fonts -->
	<!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="/node_modules/materialize-css/dist/css/materialize.min.css">

    

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
   <script src="https://kit.fontawesome.com/2ca0972b2c.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="/css/bloh.css">


</head>
<body>
	<?php
    require('../etc/connection.php');
    require('../etc/session.php');
  ?>
	<!-- Dropdown Structure -->
<ul id="menu" class="dropdown-content">
  <li><a href="" class="black-text"><?php echo $_SESSION["name"]; ?></a></li>
  <li><a href="#!" class="black-text">Settings</a></li>
  <li class="divider"></li>
  <li><a href="user/exit.php" class="red-text">Exit</a></li>
</ul>


<div class="row">
  <div class="col s12">
    <ul>
      <?php
        $query = 'SELECT likes.*,users.id userId, users.name, users.lastName, posts.id postId,posts.mainContent FROM blogdb.likes,blogdb.users,blogdb.posts where `authorPost` = '.$_SESSION['id'].' AND `user` != '.$_SESSION['id'].' AND users.id = `user` AND posts.id = `post` ORDER BY `dateTime` DESC LIMIT 20;
';
        $run = mysqli_query($con,$query);
        while ($row=mysqli_fetch_array($run)) {
    
  
      ?>
      <li class="row">
        <div class="col s2"><img src='<?php echo "https://robohash.org/".$row['name']."?set=set2" ; ?>' alt="" class="circle responsive-img"></div>
        <div class="col s8"><h6><?php echo $row['name'].' '.$row['lastName']; ?> liked your post:</h6>
          <p class="truncate">
            <?php
              $row['mainContent'] = str_replace(array("<br />"), "", $row['mainContent']);
              echo $row['mainContent'];
            ?>
          </p>
        </div>
        <div class="col s1"><br><i class="material-icons black-text">favorite</i></div>
      </li>
      <li class="divider"></li><br>
      <?php } ?>
    </ul>
  </div>
</div>








  <!-- Modal Structure -->
  <div id="writePost" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Write a new post</h4>
   		<div class="row">
  			<form class="col s12" method="post" action="posts/create.php">
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

<?php if(!isset($_GET['bar'])){?>

<div class="hide-on-med-and-up toolbar-mobile">

<div class="black z-depth-5">
  <div class="container">
  	<ul class="row">
  		<br>
  		<li class="col s1" id="item-1"><center><a href="/" class="white-text"><i class="material-icons"><b>home</b></i><br>home</a></center></li>
  		<li class="col s3" id="item-2"><center><a  href="#writePost" class="modal-trigger white-text" class="white-text"><i class="material-icons">edit</i><br>new post hjfgsdjhgf</a></center></li>
  		<li class="col s3" id="item-3"><center><a href="/notifications" class="white-text"><i class="material-icons">notifications_active</i><br>notifications</a></center></li>
  		<li class="col s2" id="item-4"><a class="dropdown-trigger white-text" href="#!" data-target="menu"><i class="material-icons">menu</i><br>menu</a></li>
  	</ul>
  </div>
</div>
</div>
<?php } ?>
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