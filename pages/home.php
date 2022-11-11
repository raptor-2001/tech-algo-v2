<?php
  include_once('../components/header.php');
  if(isset($_SESSION['verified_user_id'])){
    $_SESSION['status'] = "You are already logged in";
    exit();
  } 
  include_once('./authentication.php');
?>




<?php include('../components/header.php')?>

<?php include_once('../components/loginNav.php')?>

<?php include_once('../components/welcome.php')?>

  
  