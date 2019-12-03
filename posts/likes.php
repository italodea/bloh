<?php


session_start();

require ('../etc/connection.php');

$query = 'SELECT * FROM likes WHERE user ='. $_SESSION['id'] .' AND post = '. $_POST['id'] .';';
$run = mysqli_query($con,$query);
if (mysqli_num_rows($run) == 1){
	$query = 'DELETE FROM likes WHERE user ='. $_SESSION['id'] .' AND post = '. $_POST['id'] .';';
	$run = mysqli_query($con,$query);
	
	$query = 'SELECT count(*) from likes WHERE post = '. $_POST['id'] .'; ';
	$run = mysqli_query($con,$query);

	$count = mysqli_fetch_array($run);

	$query = 'UPDATE posts SET likes = '.$count['count(*)'].' WHERE id = '.$_POST['id'].';';
	$run = mysqli_query($con,$query);

	echo $count['count(*)'];
	return false;
	
}else{
	$query = 'SELECT author from posts where `id`='. $_POST['id'] .';';
	$run = mysqli_query($con,$query);

	$author = mysqli_fetch_array($run);
	
	$query = 'INSERT INTO likes(`user`,`post`,`authorPost`,`dateTime`) VALUES('. $_SESSION['id'] .', '. $_POST['id'] .','.$author['author'].', NOW());';
	$run = mysqli_query($con,$query);
	
	$query = 'SELECT count(*) from likes WHERE post = '. $_POST['id'] .'; ';
	$run = mysqli_query($con,$query);

	$count = mysqli_fetch_array($run);

	$query = 'UPDATE posts SET likes = '.$count['count(*)'].' WHERE id = '.$_POST['id'].';';
	$run = mysqli_query($con,$query);

	echo $count['count(*)'];
	return false;
}

//$query = 'INSERT INTO posts(`author`,`mainContent`,`created_at`) VALUES ('.$_SESSION['id'].',"'.$_POST['id'].'",NOW())';
//$run = mysqli_query($con,$query);
?>