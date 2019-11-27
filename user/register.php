<?php 

function verifyData(){
	if( $_POST['firstName'] != ''){
		if( $_POST['lastName'] != ''){
			if( $_POST['email'] != ''){
				if( $_POST['password'] != ''){
					return True;
				}else{
					return False;
				}
			}else{
				return False;
			}
		}else{
			return False;
		}
	}else{
		return False;
	}
}
if (($varri = verifyData()) == True){
	require('../etc/connection.php');
	$string = "INSERT INTO users (`name`,`lastName`,`email`,`password`) values ('".$_POST['firstName']."','".$_POST['lastName']."','".$_POST['email']."','".md5($_POST['password'])."')";
	mysqli_query($con,$string);
	echo "1";
}else{
	echo "please fill in all required fields correctly.";
}

?>