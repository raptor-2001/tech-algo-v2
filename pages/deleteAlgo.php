<?php
  include_once('../components/header.php');
  if(isset($_SESSION['verified_user_id'])){
    $_SESSION['status'] = "You are already logged in";
    exit();
  } 
  include_once('./authentication.php');

  $pdo = require_once('../database.php');
  

  // To delete the algorithm form DB

    $title = $_POST['delete-title'] ?? null;

    if(!$title){
      header('Location: ./algorithm.php');
      exit;
    }

    $deleteAlgo = $pdo->prepare('DELETE FROM algorithm WHERE title =  :title');
    $deleteAlgo->bindValue(':title',$title);
    $deleteAlgo->execute();

    header('Location: ./algorithm.php');
  
?>