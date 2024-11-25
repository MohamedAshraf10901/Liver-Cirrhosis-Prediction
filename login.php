<?php
    require_once __DIR__ . '/db/users.php';

    session_start();

    $error='';
    $email='';

     if(isset($_POST['submit_login'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      $patient = datbase_login_patient($email, $password);
      if ($patient===null){
        $error = 'wrong email or password';
      }else{
        $_SESSION ['patient'] = $patient;
        header('location: testing.php');
        exit;

      }


     }




?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cirrhosis || Login</title>

    <link rel="stylesheet" href="res/css/bootstrap.min.css" />
    <link rel="stylesheet" href="res/css/all.css" />
    <link rel="stylesheet" href="res/css/main.css" />
    <link rel="stylesheet" href="res/css/style.css" />
    <!-- Login css -->
    <link rel="stylesheet" href="res/css/login.css" />
  </head>

  <body>
    <!-- Start Header -->
    <header id="home">
      <div class="container">
        <div class="left-header">
          <img src="res/img/logo.png" alt="" class="logo" />
        </div>
        <div class="links">
          <ul>
            <li><a href="index.php#home" class="navLink">home</a></li>
            <li><a href="content.php#content" class="navLink">content</a></li>
            <li><a href="logsite.php" class="navLink active">Check Up</a></li>
            <li><a href="appoint.php" class="navLink">Doctors Page</a></li>
            <li><a href="contact.php" class="navLink">Contact us</a></li>

          </ul>
        </div>
        <a href="signUp.php" class="sign button">Register</a>
      </div>
    </header>
    <div class="signin">
      <div class="container">
        <form action="login.php" method="post">
          <div class="row">
            <h4 class="headAccount">Account</h4>
            
            <div class="input-group input-group-icon">
              <input type="email" name="email" placeholder="Email Address" value = "<?php echo $email ?>" required/>
              <div class="input-icon"><i class="fa fa-envelope"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="password" name="password" placeholder="Password" required/>
              <div class="input-icon"><i class="fa fa-key"></i></div>
            </div>
          </div>
            <!-- ----------error-------------- -->
            <?php if ($error): ?> 
              <div class="error_message">
                <p>   <?php echo $error ?>    </p> 
              </div>
            <?php endif; ?>

          <div class="row">
            <div class="input-group">
              <button type="submit" name="submit_login" class="button loginBtn">Login <i class="fa-solid fa-arrow-right-to-bracket"></i></button>
            </div>


          </div>
        </form>
      </div>
    </div>

    <!-- ===================== -->
    <!-- Start Footer -->
    <div class="footer" id="footer">
      <div class="container">
        <div class="footerLayers">
          <!-- Social Layer -->
          <div class="firstLayer">
            <a href="#" class="socialBtn"
              ><i class="fab fa-facebook-f iconBtn"></i
            ></a>
            <a href="#" class="socialBtn"
              ><i class="fab fa-twitter iconBtn"></i
            ></a>
            <a href="#" class="socialBtn"
              ><i class="fab fa-github iconBtn"></i
            ></a>
          </div>
          <!-- Links Layer -->
          <div class="seconedLayer">
            <a href="index.php#home" class="linkBtn"
              >Home <i class="fas fa-home"></i
            ></a>
            <a href="index.php#learnMore" class="linkBtn"
              >About <i class="fas fa-rectangle-list"></i
            ></a>
            <a href="content.php" class="linkBtn"
              >Content <i class="fas fa-rectangle-list"></i
            ></a>
            <a href="index.php#test" class="linkBtn"
              >Opinions <i class="fas fa-comments"></i
            ></a>
            <a href="appoint.php" class="linkBtn"
              >Make Appointment <i class="fas fa-paper-plane"></i
            ></a>
          </div>
          <!-- CopyRight Layer -->
          <div class="thirdLayer">
            <p class="copyright">
              Copyright &copy; 2022 <a href="index.php#home">WebTeb&trade;</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer -->
    <!-- ===================== -->

    <script src="res/js/popper.min.js"></script>
    <script src="res/js/bootstrap.min.js"></script>
    <script src="res/js/all.min.js"></script>
    <script src="res/js/script.js"></script>
  </body>
</html>
