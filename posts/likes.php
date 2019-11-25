<?php
return "oi";
session_start();

require ('../etc/connection.php');

$query = 'INSERT INTO posts(`author`,`mainContent`,`created_at`) VALUES ('.$_SESSION['id'].',"'.$_POST['id'].'",NOW())';
$run = mysqli_query($con,$query);

?>