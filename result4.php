<?php

require_once('machine_learning.php');

require_once __DIR__ . '/db/users.php';

$patients = database_get_patients_symptoms();
$symptoms_string = implode('',$patients);



require_once('Machine-learning.php');

if (isset($_POST['submit-img'])) {
    $extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
    $dst_fname = getcwd() . '/res/img/uploaded_files' . time() . uniqid(rand()) . '.' . $extension;
    $dst_fname = str_replace('\\' , '/' , $dst_fname);
    move_uploaded_file($_FILES["img"]["tmp_name"] , $dst_fname);
    $result = classify_image($dst_fname); }
else {
    header("Location: result4.php");
    exit();
}



?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cirrhosis || Result</title>

    <link rel="stylesheet" href="res/css/bootstrap.min.css" />
    <link rel="stylesheet" href="res/css/all.css" />
    <link rel="stylesheet" href="res/css/main.css" />
    <link rel="stylesheet" href="res/css/style.css" />

    <link rel="stylesheet" href="res/css/result.css" />
  </head>

  <body>
    <!-- Start Header -->
    <header id="home" class="sticky-top">
      <div class="container">
        <div class="left-header">
          <img src="res/img/logo.png" alt="" class="logo" />
        </div>
        <div class="links">
          <ul>
            <li><a href="index.php#home" class="navLink active">home</a></li>
            <li><a href="content.php#content" class="navLink">content</a></li>
            <li><a href="logsite.php" class="navLink">Check Up</a></li>
            <li><a href="appoint.php" class="navLink">Doctors Page</a></li>
            <li><a href="contact.php" class="navLink">Contact us</a></li>

          </ul>
        </div>
      </div>
    </header>

    <div class="signin">
      <div class="container">
        <!-- <p><?php echo $symptoms_string ?></p> -->
        <form>
          <div class="row">
            <h4>The Result of Cirrhosis</h4>
            <div class="questions">
              <p class="res">The Result is Healthy Liver</p>
              <p class="res">The Probablity of Healthy Liver = 0.89</p>
              <p class="res">The Probablity of Cirrhosis Liver = 0.11</p> </p>
            </div>
          </div>
          <div class="row">
            <div class="input-group">
              <a href="index.php#home" class="button nextBtn">Exit</a>
              <a href="appoint.php" class="button nextBtn"
                >Doctors Page
                <i class="fa-solid fa-arrow-right-to-bracket"></i
              ></a>
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