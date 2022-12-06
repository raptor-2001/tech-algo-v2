<?php
  session_start();
  include_once('dbcon.php');
 ?>
 
<?php include_once('./components/header.php') ?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <h4 class="navbar-brand" href="./pages/userlogin.php">TECH-ALGO</h4>
    <ul class="navbar-nav px-10">
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="./pages/algorithm.php">Algorithms</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="./pages/technology.php">Technologies</a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="./pages/userlogin.php">Profile</a>
      </li>
    </ul>
    <form action="./pages/userLogin.php">
      <button class="btn btn-success mt-1">LOGIN</button>
    </form>
  </div>
</nav>  
<?php include_once('./components/welcome.php')?>