<?php
  include_once('../components/header.php');
  if(isset($_SESSION['verified_user_id'])){
    $_SESSION['status'] = "You are already logged in";
    exit();
  } 
  include_once('./authentication.php');
?>

<?php include_once('../components/loginNav.php')?>
  <div class="container">
    <form method="post" action="verification.php">
      <button class="btn btn-success">Verify Phone Number</button>
    </form>
  </div>  
<?php include_once('../components/header.php');?>