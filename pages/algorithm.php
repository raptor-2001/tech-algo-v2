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

  $userDetails = $pdo->prepare('SELECT full_name, phone_number, email, role FROM registration WHERE email like :email');
  $userDetails->bindValue(':email',$email);
  $userDetails->execute();
  $user = $userDetails->fetchAll();
  $role = $user[0][3];
?>

<?php include_once('../components/loginNav.php')?>
  <div class="container">
    <h4 class="text-center text-secondary">Profile Details</h4>
    <?php if(($role=='admin' || $role=='editor')) : ?>
      <form method="post" 
        action=
        <?php if($phone_number_verified):?>
          <?php echo "createAlgo.php"?>
        <?php else:?>
          <?php echo "verification.php"?>
        <?php endif; ?>
        
        >
          <button class="btn btn-danger">Add Algorithms</button>
      </form>
    <?php endif; ?>
  </div>  
<?php include_once('../components/header.php');?>