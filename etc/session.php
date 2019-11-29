<?php 
session_start();
$query = 'select status from loginhistory where sessionName = "'.$_SESSION['token'].'" LIMIT 1;';
$run = mysqli_query($con,$query);
$data = mysqli_fetch_array($run);
if(mysqli_num_rows($run) == 1){
  if ($data['status'] != 'active'){
    header("Location:/user/exit.php");
  }
  else if (!$_SESSION['id']) {
    header("Location:/user/exit.php");
  }
}else{
  header("Location:/user/exit.php");
}
?>