<?php 
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

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}



if (($varri = verifyData()) == True){
	require('../etc/connection.php');
	$string = "SELECT * FROM users WHERE `email` = '".$_POST['email']."' AND `password` ='".md5($_POST['password'])."'";
	$query = mysqli_query($con,$string);
	$data = mysqli_fetch_array($query);
	
	if (mysqli_num_rows($query) == 1) {
		
		

		$_SESSION['id'] = $data['id'];
		$_SESSION['name'] = $data['name'];
		$_SESSION['lastName'] = $data['lastName'];
		$_SESSION['email'] = $data['id'];
		$token = md5('bloh'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'].date('dd/F/yy h:i:s'));
		$query = 'INSERT INTO loginhistory(`ip`,`user`,`status`,`sessionName`,`dateTime`) VALUES (INET_ATON("'. get_client_ip().'"),'.$data['id'].',"active","'.$token.'",NOW())';
		$run = mysqli_query($con,$query);
		$_SESSION['token'] = $token;
		
		echo "1";//sucess
	}else{
		session_unset();
  		echo 'email or password wrong';
	}
}else{
	echo 'email or password empty';
}

?>