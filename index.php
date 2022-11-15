<?php
  session_start();
  include_once('dbcon.php');
 ?>
 
 <?php include_once('./components/header.php') ?>
 
 
 

<nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
  <div class="container">
    <h4 class="navbar-brand" href="#">Tech Algo</h4>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Algorithms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Technologies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./pages/profile.php">Profile</a>
      </li>
      <li class="nav-item pl-5">
        <form action="./pages/userLogin.php">
          <button class="btn btn-success">Sign In</button>
        </form>
      </li>
    </ul>
  </div>
</nav>
<section>


  
  <?php include_once('./components/welcome.php')?>