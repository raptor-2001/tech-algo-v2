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

  // Searching the algorithm
  $keyword = $_GET['search'] ?? null;

  if ($keyword) {
      $statement = $pdo->prepare('SELECT * FROM technologies WHERE title like :keyword ORDER BY title DESC');
      $statement->bindValue(":keyword", "%$keyword%");
  } else {
      $statement = $pdo->prepare('SELECT * FROM technologies ORDER BY title DESC');
  }
  $statement->execute();
  $techlist = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include_once('../components/loginNav.php')?>
  <div class="container">
    <h4 class="text-center text-secondary">Technologies Details</h4>
    <?php if(($role=='admin' || $role=='editor')) : ?>
      <form method="post" 
        action=
        <?php if($phone_number_verified):?>
          <?php echo "createTech.php"?>
        <?php else:?>
          <?php echo "verification.php"?>
        <?php endif; ?>
        
        >
          <button class="btn text-white btn-warning mb-5">Add Technologies</button>
      </form>
    <?php endif; ?>

    <form action="" method="get">
        <div class="input-group mb-3">
          <input required type="text" name="search" class="form-control" placeholder="Search" value="<?php echo $keyword ?>">
          <div class="input-group-append">
            <button class="btn btn-success" type="submit">Search</button>
          </div>
        </div>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Contributor</th>
            <th scope="col">Category</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($techlist as $i => $techitem) { ?>
            <tr>
                <th scope="row"><?php echo $i + 1 ?></th>
                <td class="mx-5"><?php echo $techitem['title'] ?></td>
                <td><?php echo $techitem['creator'] ?></td>
                <td><?php echo $techitem['category'] ?></td>
                <td>
                    <form method="post" action="./techview.php" style="display: inline-block">
                        <input  type="hidden" name="title" value="<?php echo $techitem['title'] ?>"/>
                        <button type="submit" class="btn btn-sm btn-primary">view</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
  </div>  
<?php include_once('../components/header.php');?>