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
 

    if(isset($_POST['submit_register'])){
        $name = $_POST['name'];
        $specialization = $_POST['specialization'];
        $info = $_POST['info'];
        $location = $_POST['location'];
        $schedule = $_POST['schedule'];
        $phone_number = $_POST['phone_number'];
    
        database_insert_doctors($name, $specialization, $info, $location, $schedule, $phone_number );
            
        
        
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
      </div>
    </header>
    <!-- End Header -->
    <!-- ===================== -->

    <div class="signin">
      <div class="container">
        <form action="doctors.php" method="post">
          <div class="row">
            <h4 class="headCreate">Add Doctor Profile</h4>
            <div class="input-group input-group-icon">
              <input type="text" name="name" placeholder="Full Name" required />
              <div class="input-icon"><i class="fa fa-user"></i></div>
            </div>

            <div class="input-group input-group-icon">
              <input type="text" name="specialization" placeholder="Specialization " required />
              <div class="input-icon"><i class="fa fa-user"></i></div>
            </div>

            <div class="input-group input-group-icon">
              <input type="text" name="info" placeholder="Info" required />
              <div class="input-icon"><i class="fa fa-user"></i></div>
            </div>

            <div class="input-group input-group-icon">
              <input type="tel" name="location" placeholder="Location" required />
              <div class="input-icon"><i class="fa-solid fa-location-dot"></i></div>
            </div>

            <div class="input-group input-group-icon">
              <input type="text" name="schedule" placeholder="The Schedule" required />
              <div class="input-icon"><i class="fa fa-user"></i></div>
            </div>

            <div class="input-group input-group-icon">
              <input type="text" name="phone_number" placeholder="Phone Number"  required />
              <div class="input-icon"><i class="fa fa-phone"></i></div>
            </div>
            
          <div class="row">
            <div class="input-group">
              <button type="submit" name="submit_register" class="button loginBtn">Register </button>
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
