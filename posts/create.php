<?php 

session_start();

require('../etc/connection.php');

$conteudo = nl2br($_POST['contentText']);
$query = "INSERT INTO posts(`author`,`mainContent`) VALUES ('".$_SESSION['id']."','".$conteudo."')";
$run = mysqli_query($con,$query);
header("Location:/");

?>