<?php 

	session_start();
	$idPost = $_GET['id'];

	require('../etc/connection.php');
	$sql = "SELECT author FROM  posts where id = ".$idPost." AND author =".$_SESSION['id'].";";
	$run = mysqli_query($con,$sql);
	echo $sql;
	if ( mysqli_num_rows($run) == 1){
		$sql = 'DELETE FROM likes where post = .$idPost.;';
		$run = mysqli_query($con,$sql);
		
		$sql = "DELETE FROM posts where id = ".$idPost.";";
		$run = mysqli_query($con,$sql);
		header("Location:/");
	}else{
		header("Location:/");
	}
?>