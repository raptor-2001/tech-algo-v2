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



  $title = $_POST['title'] ?? null;
  $algoDetails = $pdo->prepare('SELECT * FROM algorithm where title = :title');
  $algoDetails->bindValue(':title',$title);
  $algoDetails->execute();
  $algo = $algoDetails->fetchAll();
  $creator = $algo[0][0];
  $category = $algo[0][3];
  $description = $algo[0][4];
  $time = $algo[0][5];
  $space = $algo[0][6];

   

?>


<?php include('../components/header.php')?>

<?php include_once('../components/loginNav.php')?>

<div class="container">
    <h4 class="text-center text-secondary py-5"><?php echo $title?></h4>
    <?php if($role!="user") : ?>

    <form method="post" action="./deleteAlgo.php">
      <input  type="hidden" name="delete-title" value="<?php echo $title?>"/>
      <button onclick="return confirm('Are you sure! want to delete <?php echo $title ?>?')" name="delete-algo" class="btn btn-danger text-white mb-5">Delete</button>
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
          <th scope="row">Description</th>
          <td colspan="3">
            <p>
              <?php echo "$description"?>
            </p>
          </td>
        </tr>
        <tr>
          <th scope="row">Time Complexity</th>
          <td colspan="3">
            <p>
              <?php echo "$time"?>
            </p>
          </td>
        </tr>
        <tr>
          <th scope="row">Space Complexity</th>
          <td colspan="3">
            <p>
              <?php echo "$space"?>
            </p>
          </td>
        </tr>
      </tbody>
    </table>
    
    <?php if($role!="user") : ?>

      <form method="post" action="edit.php">
        <input  type="hidden" name="title" value="<?php echo $title?>"/>
        <button onclick="return confirm('Are you sure! want to edit <?php echo $title ?>?')" class="btn btn-block btn-warning text-white mb-5">Edit</button>
      </form>

    <?php else : ?>
      <h6 class="text-success"></h6>
    <?php endif; ?>
     
  </div>
  
  <?php include_once('../components/footer.php');?>

  
  
