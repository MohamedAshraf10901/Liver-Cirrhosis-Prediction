<?php
    require_once __DIR__ . '/db/users.php';

    session_start();

    $password_error = '';
    $email_error = '';

    $name='';
    $address='';
    $phone_number='';
    $email='';
    $birth_date='';
 

    if(isset($_POST['admin_register'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $birth_date = $_POST['birth_date'];
        $sellected_gender = $_POST['gender'];
        $gender=implode("",$sellected_gender);

        // email validation
        if(database_check_admin_email_exists($email)){
          $email_error = 'This Email already exist';
        }

        // password validation
        if ($password !== $confirm_password){
          $password_error = "password doesn’t match its confirmed_password";
        }

        // make registeration
        if(!$email_error && !$password_error){
          $id = database_insert_admin($name, $address, $phone_number, $email , $password , $confirm_password , $birth_date , $gender);
            $admin = database_get_admin($id);
            $_SESSION['admin'] = $admin;
            header('location: admin_profile.php');
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
    <title>Cirrhosis || Signup</title>

    <link rel="stylesheet" href="res/css/bootstrap.min.css" />
    <link rel="stylesheet" href="res/css/all.css" />
    <link rel="stylesheet" href="res/css/main.css" />
    <link rel="stylesheet" href="res/css/style.css" />
    <!-- Signup css -->
    <link rel="stylesheet" href="res/css/login.css" />

    <style>
      .none {
        opacity: 0;
      }
      .off {
        display: none !important;
      }
    </style>
  </head>

  <body>
    <!-- ===================== -->
    <!-- Start Header -->
    <header class="sticky-top">
      <div class="container">
        <div class="left-header">
          <img src="res/img/logo.png" alt="" class="logo" />
        </div>
   
        <a href="admin_login.php" class="login button">Login</a>
      </div>
    </header>
    <!-- End Header -->
    <!-- ===================== -->

    <div class="signin">
      <div class="container">
        <form action="admin_signUp.php" method="post">
          <div class="row">
            <h4 class="headCreate">Admin signUp</h4>
            <div class="input-group input-group-icon">
              <input type="text" name="name" placeholder="Full Name" value = "<?php echo $name ?>" required />
              <div class="input-icon"><i class="fa fa-user"></i></div>
            </div>
            
            <div class="input-group input-group-icon">
              <input type="text" name="address" placeholder="Address" value = "<?php echo $address ?>" required />
              <div class="input-icon">
                <i class="fa-solid fa-location-dot"></i>
              </div>
            </div>
            <div class="input-group input-group-icon">
              <input
                type="tel"
                name="phone_number"
                maxlength="11"
                placeholder="Phone Number"
                onkeypress="isNumber(event)"
                value = "<?php echo $phone_number ?>"
                required
              />
              <div class="input-icon"><i class="fa fa-phone"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="email" name="email" placeholder="Email Adress" value = "<?php echo $email ?>" required />
              <div class="input-icon"><i class="fa fa-envelope"></i></div>
            </div>

            <!-- ----------email_error-------------- -->
            <?php if ($email_error): ?> 
              <div class="error_message">
                <p>   <?php echo $email_error ?>    </p> 
              </div>
            <?php endif; ?>


            <div class="input-group input-group-icon">
              <input
                type="password"
                name="password"
                placeholder="Password"
                class="pass"
                oninput="typePass()"
                onblur="blurColor()"
                onfocus="focusColor()"
                required
              />
              <div class="input-icon lock">
                <i class="fa-solid fa-lock-open"></i>
              </div>
              <div class="input-icon lock none">
                <i class="fa-solid fa-lock"></i>
              </div>
            </div>
            <div class="input-group input-group-icon">
              <input
                type="password"
                name="confirm_password"
                placeholder="Confirm Password"
                class="pass"
                oninput="typePass()"
                onblur="blurColor()"
                onfocus="focusColor()"
                required
              />

            <!-- ----------password_error-------------- -->
            <?php if ($password_error): ?> 
              <div class="error_message">
                <p>   <?php echo $password_error ?>    </p> 
              </div>
            <?php endif; ?>



              <div class="input-icon lock">
                <i class="fa-solid fa-lock-open"></i>
              </div>
              <div class="input-icon lock none">
                <i class="fa-solid fa-lock"></i>
              </div>
              <div class="alertPass off">
                <p>Password is not identical</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-half">
              <h5>Date of Birth</h5>
              <div class="input-group">
                <div class="col">
                  <input type="date" name="birth_date" value = "<?php echo $birth_date ?>" required />
                </div>
              </div>
            </div>
            <div class="col-half">
              <h5>Gender</h5>
              <div class="input-group">
                <div class="boxGender">
                  <input type="checkbox" id="Q1" name="gender[]" value="Male" >
                  <label for="Q1">Male</label>
                </div>
                <div class="boxGender">
                  <input type="checkbox" id="Q2" name="gender[]" value="Female" >
                  <label for="Q1">Female</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="input-group">
              <button type="submit" name="admin_register" class="button loginBtn">Signup <i class="fa-solid fa-arrow-right-to-bracket"></i></button>
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
