<?php 
define( 'SECURITY_HASH', 'nG+RnvEq3>rk<K2' );
session_start();

function verifyData(){
	if( $_POST['email'] != ''){
		if( $_POST['password'] != ''){
			return True;
		}else{
			return False;
		}
	}else{
		return False;
	}
}
if (($varri = verifyData()) == True){
	require('../etc/connection.php');
	$string = "SELECT * FROM users WHERE `email` = '".$_POST['email']."' AND `password` ='".md5($_POST['password'])."'";
	$query = mysqli_query($con,$string);
	$data = mysqli_fetch_array($query);
	
	if (mysqli_num_rows($query) == 1) {
		$_SESSION['id'] = $data['id']
	}else{
		unset ($_SESSION['login']);
  		unset ($_SESSION['senha']);
  		header('location:index.php');
	}
}else{
	echo "erro!";
}

?>