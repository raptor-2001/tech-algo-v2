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

  $algo_1_title =  $_POST['algo-1'] ?? null;
  $algo_2_title =  $_POST['algo-2'] ?? null;

  $algoDetails_1 = $pdo->prepare('SELECT * FROM algorithm where title = :title');
  $algoDetails_1->bindValue(':title',$algo_1_title);
  $algoDetails_1->execute();
  $algo_1 = $algoDetails_1->fetchAll();
  $creator_1 = $algo_1[0][0];
  $category_1 = $algo_1[0][3];
  $description_1 = $algo_1[0][4];
  $time_1 = $algo_1[0][5];
  $space_1 = $algo_1[0][6];
  $code_1 = $algo_1[0][7];

  
  
  
  $algoDetails_2 = $pdo->prepare('SELECT * FROM algorithm where title = :title');
  $algoDetails_2->bindValue(':title',$algo_2_title);
  $algoDetails_2->execute();
  $algo_2 = $algoDetails_2->fetchAll();
  $creator_2 = $algo_2[0][0];
  $category_2 = $algo_2[0][3];
  $description_2 = $algo_2[0][4];
  $time_2 = $algo_2[0][5];
  $space_2 = $algo_2[0][6];
  $code_2 = $algo_2[0][7];
  
  
  
  ?>
<?php include_once('../components/loginNav.php')?>
  <div class="container">
  <h4 class="text-center text-secondary mb-3 py-5">Comparison Table</h4>
  <div class="table-responsive">
    <table class="table table-striped text-successtable-border border-light">
      <thead class="border-light">
        <tr>
          <th scope="col"></th>
          <th scope="col"><strong><?php echo $algo_1_title ?></strong></th>
          <th scope="col"><strong><?php echo $algo_2_title ?></strong></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Category</th>
          <td><?php echo $category_1 ?></td>
          <td><?php echo $category_2?></td>
        </tr>
        <tr>
          <th scope="row">Time Complexity</th>
          <td><?php echo $time_1 ?></td>
          <td><?php echo $time_2?></td>
        </tr>
        <tr>
          <th scope="row">Space Complexity</th>
          <td><?php echo $space_1 ?></td>
          <td><?php echo $space_2?></td>
        </tr>
        <tr>
          <th scope="row">Description</th>
          <td><?php echo $description_1 ?></td>
          <td><?php echo $description_2 ?></td>
        </tr>
        <tr>
          <th scope="row">Code</th>
          <td><?php echo $code_1 ?></td>
          <td><?php echo $code_2 ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>

