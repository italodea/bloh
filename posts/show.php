<?php
require('../etc/connection.php');
require('../etc/session.php');

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
					<a class='dropdown-trigger' href='#!' data-target='postOptions<?php echo md5($resultPost['postId'])?>'><i class="material-icons blue-grey-text lighten-1">more_horiz</i></a>
					
					<!-- Dropdown Structure -->
				  <ul id='postOptions<?php echo md5($resultPost['postId'])?>' class='dropdown-content'>
				    <li><a href='#editPost<?php echo md5($resultPost['postId'])?>' class='modal-trigger black-text'>edit</a></li>
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
        							<textarea name="contentText" id="textarea1" required=""><?php echo str_replace(array("<br />"), "", $resultPost['mainContent'] ); ?></textarea>
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
				<div class="col offset-s1 black-text">
  					&nbsp;&nbsp;&nbsp;<a href="#!" class="black-text" onclick='like("<?php echo $resultPost['postId']?>")'><i class="material-icons tiny">favorite</i><a class="black-text" id='likePost<?php echo $resultPost['postId']?>'><?php echo $resultPost['likes']; ?></a></a>
				</div>
				<div class="col black-text">
  					&nbsp;&nbsp;&nbsp;<i class="material-icons tiny">mode_comment</i><?php echo $resultPost['comments']; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php }; ?>