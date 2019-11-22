<?php 
	

	session_start();
	require('../etc/connection.php');

	$sql = 'UPDATE posts SET `mainContent` = "'.$_POST['contentText'].'"WHERE id ='.$_GET['id'].';';
	$run = mysqli_query($con,$sql);
	echo "$sql";
	header("Location:/");

?>