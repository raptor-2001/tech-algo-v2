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
  $algoDetails = $pdo->prepare('SELECT * FROM algorithm where title = :title');
  $algoDetails->bindValue(':title',$title);
  $algoDetails->execute();
  $algo = $algoDetails->fetchAll();
  $creator = $algo[0][0] ?? $email;
  $category = $algo[0][3];
  $description = $algo[0][4];
  $time = $algo[0][5];
  $space = $algo[0][6];

  if(isset($_POST['editalgo'])){
      $title1 = $_POST['newTitle'];
      $description = $_POST['editor1'];
      $time = $_POST['time'];
      $space = $_POST['space'];
      $category = $_POST['category'];

      $statement = $pdo->prepare("UPDATE algorithm 
      set creator = :creator,
          role = :role,
          title = :title,
          category=:category,
          description=:description,
          time_complexity=:time,
          space_complexity=:space
      where title = :title");
      $statement->bindValue(':creator', $creator);
      $statement->bindValue(':role', $role);
      $statement->bindValue(':title', $title1);
      $statement->bindValue(':Oldtitle', $title);
      $statement->bindValue(':category', $category);
      $statement->bindValue(':description', $description);
      $statement->bindValue(':time', $time);
      $statement->bindValue(':space', $space);
      
  
      $statement->execute();
      header("Location: ./algorithm.php");
    
  }
?>

<?php include_once('../components/loginNav.php')?>
  <div class="container">
    <h4 class="text-center text-secondary">Edit Algorithm</h4>
        <form method="Post">
          <div class="form-group">
            <label for="title">Title
              <input name="newTitle" type="text" class="form-control" value="<?php echo $title ?>">
            </label>
          </div>
          <div class="form-group">
            <label for="body">Description</label>
            <textarea name="editor1" class="form-control"><?php echo $description ?></textarea>
          </div>
          <div class="form-group">
            <label for="category">Category
              <input name="category" type="text" class="form-control"
              value="<?php echo $category ?>">
            </label>
          </div>
          <div class="form-group">
            <label for="time">Time Complexity
              <input name="time" type="text" class="form-control"
                value="<?php echo $time ?>">
            </label>
          </div>
          <div class="form-group">
            <label for="space">Space Complexity
              <input name="space" type="text" class="form-control" value="<?php echo $space ?>">
            </label>
          </div>
          <div class="form-group">
            <button type="submit" name="editalgo" class="btn text-white btn-warning btn-block">Submit</button>
          </div>
        </form>
  </div>  
<?php include_once('../components/header.php');?>

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