<?php 
session_start();

unset ($_SESSION['id']);
unset ($_SESSION['name']);
unset ($_SESSION['lastName']);
unset ($_SESSION['email']);

session_destroy();
header("Location:/welcome.php")
?>