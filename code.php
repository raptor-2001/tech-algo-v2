<?php
$pdo = require_once('./database.php');
session_start();
include_once('dbcon.php');

// Getting the registration
if(isset($_POST['register'])){
  $name = $_POST['name'];
  $phone_number = "+91".$_POST['phone-number'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = $_POST['role'];



  $userProperties = [
    'email' => $email,
    'emailVerified' => false,
    'phoneNumber' => $phone_number,
    'password' => $password,
    'displayName' => $name,
    'role' => $role,
  ];

  $createdUser = $auth->createUser($userProperties);
  if($createdUser){
    $_SESSION['status'] = 'User created succesfully';
    $statement = $pdo->prepare("INSERT INTO registration (full_name,phone_number,email,password,role)
                VALUES (:full_name,:phone_number,:email,:password,:role)");
    $statement->bindValue(':full_name', $name);
    $statement->bindValue(':phone_number', $phone_number);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':role', $role);

    $statement->execute();
    header("Location: ./pages/userlogin.php");
  }else{
    $_SESSION['status'] = 'User not created succesfully';
    header("Location: ./pages/register.php");
  }
}


