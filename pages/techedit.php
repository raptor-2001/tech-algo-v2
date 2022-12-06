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
  $creator = $tech[0][0] ?? $email;
  $category = $tech[0][6];
  $description = $tech[0][3];
  $system = $tech[0][4];
  $invented = $tech[0][5];

  if(isset($_POST['edittech'])){
      $title1 = $_POST['newTitle'];
      $description = $_POST['editor1'];
      $system = $_POST['system'];
      $invented = $_POST['invented'];
      $category = $_POST['category'];

      $statement = $pdo->prepare("UPDATE technologies 
      set creator = :creator,
          role = :role,
          title = :title,
          description=:description,
          system=:system,
          invented=:invented,
          category=:category
      where title = :title");
      $statement->bindValue(':creator', $creator);
      $statement->bindValue(':role', $role);
      $statement->bindValue(':title', $title1);
      $statement->bindValue(':Oldtitle', $title);
      $statement->bindValue(':category', $category);
      $statement->bindValue(':description', $description);
      $statement->bindValue(':system', $system);
      $statement->bindValue(':invented', $invented);
      
  
      $statement->execute();
      header("Location: ./technology.php");
    
  }
?>

<?php include_once('../components/loginNav.php')?>
  <div class="container">
    <h4 class="text-center text-secondary py-5">Edit technology</h4>
        <form method="Post">
          <div class="form-group">
            <label for="title">Title
              <input required name="newTitle" type="text" class="form-control" value="<?php echo $title ?>">
            </label>
          </div>
          <div class="form-group">
            <label for="body">Description</label>
            <textarea name="editor1" class="form-control"><?php echo $description ?></textarea>
          </div>
          <div class="form-group">
            <label for="category">Category
              <input required value="<?php echo $category ?>" name="category" type="text" class="form-control">
            </label>
          </div>
          <div class="form-group">
            <label for="system">System 
              <span class="text-muted">(Linux/Windows/Mac/All)</span> 
              <input required value="<?php echo $system ?>" name="system" type="text" class="form-control">
            </label>
          </div>
          <div class="form-group">
            <label for="space">Invented By
              <input required value="<?php echo $invented ?>" name="invented" type="text" class="form-control">
            </label>
          </div>
          <div class="form-group">
            <button type="submit" name="edittech" class="btn text-white btn-warning btn-block">Submit</button>
          </div>
        </form>
  </div>  
<?php include_once('../components/header.php');?>
<?php include_once('../components/footer.php');?>

<!-- Main Jquery -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


<!-- CK editor -->
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>



<!-- Custom Script -->
<script>
  // 
  $('#year').text(new Date().getFullYear());
  CKEDITOR.replace('editor1');
</script>