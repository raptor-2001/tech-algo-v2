<?php
  include_once('../components/header.php');
  if(isset($_SESSION['verified_user_id'])){
    $_SESSION['status'] = "You are already logged in";
    exit();
  } 
  include_once('./authentication.php');
  $pdo = require_once('../database.php');
  $email = $_SESSION['email'];
  $statement = $pdo->prepare('SELECT email FROM verified_user WHERE email like :email');
  $statement->bindValue(":email",$email);
  $statement->execute();
  
  $phone_number_verified =  false;

  if($statement->fetch()){
    $phone_number_verified = true;
  }else{
    $phone_number_verified = false;
  }
  
  
?>

<?php include_once('../components/loginNav.php')?>
  <div class="container">
  <?php if(!$phone_number_verified) : ?>
    <form method="post" action="verification.php">
        <button class="btn btn-danger">Verify Phone Number</button>
    </form>
  <?php else : ?>
    <h4 class="text-success">Phone Number Verified</h4>
  <?php endif; ?>
  </div>  
<?php include_once('../components/header.php');?>