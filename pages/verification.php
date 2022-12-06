<?php
 
  include_once('../components/header.php');
  if(isset($_SESSION['verified_user_id'])){
    $_SESSION['status'] = "You are already logged in";
    exit();
  } 

  include_once('./authentication.php');
  $pdo = require_once('../database.php');
  
  $verified_number;

  
  if(isset($_POST['home'])){
    
    $verified_number = $_POST['uname'];
    $email = $_SESSION['email'];
    $statement = $pdo->prepare("INSERT INTO verified_user (phone_number,email)
                VALUES (:phone_number, :email)");
        $statement->bindValue(':phone_number', $verified_number);
        $statement->bindValue(':email', $email);

        $statement->execute();
        header('Location: ./home.php');
    
  }
?>


  <link href="../css/verification.css " rel="stylesheet">
   <form method="post">

    <h3>Phone Number Verification</h3>
    

    <div class="formcontainer">
    <hr/>
    <div class="container">
      <label for="uname"><strong>Phone Number</strong></label>
      <input required type="text" id="number" placeholder="Enter phone number" name="uname" required>
    </div>
    <div id="recaptcha-container"></div>
    <button type="button" name="send" onclick="phoneAuth();">Send Otp</button>
  
    
    <h4 class="text-center">Verify OTP</h4>
    <div class="formcontainer">
    <hr/>
    <div class="container">
    <input required type="text" id="verificationCode" placeholder="Enter verification code" required>
    
    </div>
  
    <button type="button" name="verified" onclick="codeverify();">Verify code</button>
 
    <input required class="text-danger text-center" name="verified_text" type="text" value="Phone Number Unverified" id="verified">
    <button id="home" name="home" class="btn btn-primary d-none" type="submit">Go to home</button> 

  </form>

  <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
  <script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyB4pr2sm9UJf-2Lj-OjIOVdV6Y0bwxifhM",
    authDomain: "tech-algo-v2.firebaseapp.com",
    databaseURL: "https://tech-algo-v2-default-rtdb.firebaseio.com",
    projectId: "tech-algo-v2",
    storageBucket: "tech-algo-v2.appspot.com",
    messagingSenderId: "102551337490",
    appId: "1:102551337490:web:64b0443f93002178f636cb",
    measurementId: "G-783LW1Q6LP"
  };

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
  <script type="text/javascript">
      window.onload = function() {
      render();
        };

      function render() {
          window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
          recaptchaVerifier.render();
      }

      function phoneAuth() {
          //get the number
          var number = document.getElementById('number').value;
          // alert(number);
          //it takes two parameter first one is number and second one is recaptcha
          firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
              //s is in lowercase
              window.confirmationResult = confirmationResult;
              coderesult = confirmationResult;
              console.log(coderesult);
              alert("Message sent");
          }).catch(function(error) {
              alert(error.message);
          });
      }

      function codeverify() {
          var code = document.getElementById('verificationCode').value;


          coderesult.confirm(code).then(function(result) {

              alert("Successfully registered");
              var user = result.user;
              let message = document.getElementById('verified');
              message.classList.remove("text-danger");
              message.classList.add("text-success");
              document.getElementById('home').classList.remove('d-none');
              document.getElementById('home').classList.remove('d-block');

              message.value = "Phone Number Verified";
              // redirect();

          }).catch(function(error) {
              alert(error.message);
          });
      }

      const redirect = () => {
          window.location.replace("./home.php");
      }
  </script>
</body>
</html>

<?php include_once('../components/footer.php');?>
