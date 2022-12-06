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
  


  if(isset($_POST['addalgo'])){
      $title = $_POST['title'];
      $description = $_POST['description'];
      $time = $_POST['time'];
      $space = $_POST['space'];
      $category = $_POST['category'];
      $code = $_POST['editor1'];
      $statement = $pdo->prepare("INSERT INTO algorithm (creator,role,title,category,description,time_complexity,space_complexity,code)
                  VALUES (:creator,:role,:title,:category,:description,:time,:space,:code)");
      $statement->bindValue(':creator', $creator);
      $statement->bindValue(':role', $role);
      $statement->bindValue(':title', $title);
      $statement->bindValue(':category', $category);
      $statement->bindValue(':description', $description);
      $statement->bindValue(':time', $time);
      $statement->bindValue(':space', $space);
      $statement->bindValue(':code', $code);
      
  
      $statement->execute();
      header("Location: ./algorithm.php");
    
  }
?>

<?php include_once('../components/loginNav.php')?>
  <div class="container">
    <h4 class="text-center text-secondary py-5">Add Algorithm</h4>
        <form method="Post">
          <div class="form-group">
            <label for="title">Title
              <input required name="title" type="text" class="form-control">
            </label>
          </div>

          <div class="form-group">
            <label for="body">
              Description
            </label>
            <textarea rows="5" cols="50" required name="description" class="form-control"></textarea>
          </div>
          
          <div class="form-group">
            <label for="category">Category
              <input required name="category" type="text" class="form-control">
            </label>
          </div>
          <div class="form-group">
            <label for="time">Time Complexity
              <input required name="time" type="text" class="form-control">
            </label>
          </div>

          <div class="form-group">
            <label for="space">Space Complexity
              <input required name="space" type="text" class="form-control">
            </label>
          </div>

          <div class="form-group">
            <label for="body">Source Code</label>
            <textarea required name="editor1" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" name="addalgo" class="btn text-white btn-warning btn-block">Add</button>
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