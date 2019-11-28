<?php 
session_start();
if ($_SESSION['token']){
	require('../etc/connection.php');
	$query = 'UPDATE loginhistory SET `status` = "ended" WHERE `sessionName` ="'.$_SESSION['token'].'";';
	$run = mysqli_query($con,$query);
}
session_unset();
session_destroy();
header("Location:/welcome.php");
?>