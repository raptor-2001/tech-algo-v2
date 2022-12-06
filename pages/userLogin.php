<?php
use Firebase\Auth\Token\Exception\InvalidToken;

  session_start();
  include_once('../components/header.php');
  include_once('../dbcon.php');

  if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
      
      $user = $auth->getUserByEmail("$email");
      
      $signInResult = $auth->signInWithEmailAndPassword($email, $password);
     
      $idTokenString = $signInResult->idToken();

      try {
        $verifiedIdToken = $auth->verifyIdToken($idTokenString);
        $uid = $signInResult->firebaseUserId();
        
        $_SESSION['verified_user_id'] = $uid;
        $_SESSION['email'] = $email;
        $_SESSION['idTokenString'] = $idTokenString;

        $_SESSION['status'] = "Logged in";
        header("Location: ./home.php");
        exit();

      } catch (InvalidToken $e) {
        echo 'The token is invalid: '.$e->getMessage();
      } catch (\InvalidArgumentException $e){
        echo "The token could not be parsed: ".$e->getMessage();
      }
    

    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {

        $_SESSION['status'] = 'Not a valid Email or Password';
        
        exit();
 
    }



  }


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
          <h3 class="text-center text-muted">Login</h3>
        </div>
        <div class="card-body ">
          <form method="POST">
            
            <div class="form-group">
                <input required type="email" placeholder="Enter Email" class="form-control" name='email'>
            </div>
            
            <div class="form-group">
              <input required type="password" placeholder="Enter Password" class="form-control" name='password'>
            </div>
            
            <div class="form-group">
              <button type="submit" name="login" class="btn btn-success btn-block">Login</button>
            </div>

            <div class="form-group">
              <label class="form-label">Doesn't have any account ?</label>
              <a href="./register.php" class="text-blue text-left">Register</a>
            </div>

            <div class="form-group">
              <a href="#" class="text-primary text-right">Forgot Password</a>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once('../components/header.php');?>
<?php include_once('../components/footer.php');?>