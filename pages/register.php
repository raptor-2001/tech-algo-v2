<?php 
$pdo = require_once('../database.php');

session_start();
include_once('../components/header.php');


?>
<style>
  body{
  background-color: azure;
  }
  .bg-gray{
    background-color: #f4f4f4;
  }
  .form-container{
    max-width: 600px;
    height: 100vh;
    margin-top: 200px;
  }
</style>      


<section>

  <div class="container form-container">
  <?php
      if(isset($_SESSION['status']))
      {
        echo "<h4 class='alert alert-success'>".$_SESSION['status']."</h4>";
        unset($_SESSION['status']);
      }
    ?>
    <div class="form mb-200 ">
      <div class="card bg-card">
        <div class="card-header bg-white">
          <h3 class="text-center text-muted">Register</h3>
        </div>
        <div class="card-body ">
          <form method="POST" action="../code.php">
            <div class="form-group">
              <input type="text" placeholder="Enter Full Name" class="form-control" name='name'>
            </div>
            <div class="form-group">
              <input type="number" placeholder="Enter Phone Number" class="form-control" name='phone-number'>
            </div>
            <div class="form-group">
              <input type="email" placeholder="Enter Email" class="form-control" name='email'>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Enter Password" class="form-control" name='password'>
            </div>
            <div class="form-group">
              <label class="form-label" for="role">Choose your account type</label>
              <select name="role" class="form-select p-1" aria-label="Default select example">
                <option value="user">User</option>
                <option value="editor">Editor</option>
                <option value="admin">Admin</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" name="register" class="btn btn-success btn-block">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once('../components/header.php');?>