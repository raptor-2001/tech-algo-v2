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



  $title = $_POST['title'] ?? null;
  $techDetails = $pdo->prepare('SELECT * FROM technologies where title = :title');
  $techDetails->bindValue(':title',$title);
  $techDetails->execute();
  $tech = $techDetails->fetchAll();
  $creator = $tech[0][0];
  $category = $tech[0][6];
  $description = $tech[0][3];
  $system = $tech[0][4];
  $invented = $tech[0][5];
?>


<?php include('../components/header.php')?>

<?php include_once('../components/loginNav.php')?>

<div class="container">
    <h4 class="text-center text-secondary"><?php echo $title?></h4>
    <?php if($role!="user") : ?>
      <form method="post" action="techedit.php">
          <input  type="hidden" name="title" value="<?php echo $title?>"/>
          <button class="btn btn-warning text-white mb-5">Edit</button>
      </form>
    <?php else : ?>
      <h6 class="text-success"></h6>
    <?php endif; ?>

    <table class="table align-middle">
      <tbody>
        <tr>
          <th>Contributor:</th>
          <td scope="row">
             <?php echo "$creator"?>
          </td>
        </tr>
        <tr>
          <th scope="row">Category</th>
          <td colspan="3">
            <p>
              <?php echo "$category"?>
            </p>
          </td>
        </tr>
        <tr>
          <th scope="row">Invented by</th>
          <td colspan="3">
            <p>
              <?php echo "$invented"?>
            </p>
          </td>
        </tr>
        <tr>
          <th scope="row">System</th>
          <td colspan="3">
            <p>
              <?php echo "$system"?>
            </p>
          </td>
        </tr>
        <tr>
          <th scope="row">Description</th>
          <td colspan="3">
            <p>
              <?php echo "$description"?>
            </p>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
