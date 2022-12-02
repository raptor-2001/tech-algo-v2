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
  $creator = $user[0][2];
  $role = $user[0][3];



  $title = $_POST['title'];
?>


<?php include('../components/header.php')?>

<?php include_once('../components/loginNav.php')?>

<div class="container">
    <h4 class="text-center text-secondary"><?php echo $title?></h4>
    <?php if($role!="user") : ?>
      <form method="post" action="edit.php">
          <button class="btn btn-warning text-white">Edit</button>
      </form>
    <?php else : ?>
      <h6 class="text-success"></h6>
    <?php endif; ?>

    <form>
      <!-- <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" value="<?php echo $user[0][0]?>" disabled name='name'>
      </div>
      <div class="form-group">
      <label for="name">Phone Number</label>
        <input type="text" class="form-control" value="<?php echo $user[0][1]?>" disabled name='phone-number'>
      </div>
      <div class="form-group">
      <label for="name">Email</label>
        <input type="email" class="form-control" value="<?php echo $user[0][2]?>" disabled name='email'>
      </div>
      <div class="form-group">
      <label for="name">Role</label>
        <input type="text" class="form-control" value="<?php echo $user[0][3]?>" disabled name='role'>
      </div> -->
      </form>
  </div>
