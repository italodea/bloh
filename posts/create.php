<?php 

session_start();

require('../etc/connection.php');

$conteudo = nl2br($_POST['contentText']);
$query = 'INSERT INTO posts(`author`,`mainContent`,`created_at`) VALUES ('.$_SESSION['id'].',"'.$conteudo.'",NOW())';
$run = mysqli_query($con,$query);
echo $query;

header("Location:/");

?>