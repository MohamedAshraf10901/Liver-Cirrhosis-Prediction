<?php
    require_once __DIR__ . '/db/users.php';
    $error='';
    $name ='';

     if(isset($_POST['send_message'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $patient = datbase_contact_patient($name,$email);
      
      
      if ($patient===null){
        
        $error = 'wrong name or email';
      }else{

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        database_insert_message($name, $email, $message);
        echo "success";
      }


     }




?>











<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cirrhosis || Contact Us</title>

    <link rel="stylesheet" href="res/css/bootstrap.min.css" />
    <link rel="stylesheet" href="res/css/all.css" />
    <link rel="stylesheet" href="res/css/main.css" />
    <link rel="stylesheet" href="res/css/style.css" />
    <link rel="stylesheet" href="res/css/login.css" />
    <link rel="stylesheet" href="res/css/details.css" />

    <style>
      .signin .container {
        max-width: 80em;
      }
      .input-group-icon .input-icon {
        left: 6px;
        padding-left: 0;
      }
    </style>
  </head>

  <body>
    <!-- Start Header -->
    <header id="contact_us" class="sticky-top">
      <div class="container">
        <div class="left-header">
          <img src="res/img/logo.png" alt="" class="logo" />
        </div>
        <div class="links">
          <ul>
            <li><a href="index.php#home" class="navLink">home</a></li>
            <li><a href="content.php#content" class="navLink">content</a></li>
            <li><a href="logsite.php" class="navLink">Check Up</a></li>
            <li><a href="appoint.php" class="navLink">Doctors Page</a></li>
            <li><a href="contact.php#contact_us" class="navLink active">Contact us</a></li>

          </ul>
        </div>
      </div>
    </header>

    <div class="signin">
      <div class="container">
        <div class="row">
          <h4>Contact Us</h4>
          <div class="pic col-lg-6">
            <img src="res/img/2.jpg" alt="Contact" title="Contact" class="pic-img" />
          </div>
          <form action="" method="post" class="col-lg-6">
            <div class="input-group input-group-icon">
              <input type="text" name="name" placeholder="Your Name" value = "<?php echo $name ?>"  required />
              <div class="input-icon"><i class="fa fa-signature"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="email" name="email" placeholder="Your email" required />
              <div class="input-icon"><i class="fa fa-envelope"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <textarea
                name="message"
                style="height: 130px; width: 100%"
                class="txtarea"
                placeholder="Write your message"
                required
                title="Enter your message here"
              ></textarea>
            </div>
            <?php if ($error): ?> 
              <div class="error_message">
                <p>   <?php echo $error ?>    </p> 
              </div>
            <?php endif; ?>

            <div class="reserve">
              <button type="submit" name = "send_message" class="button book">Send Message</button>
            </div>
          </form>
        </div>
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

    <!-- <script src="https://cdn.lordicon.com/qjzruarw.js"></script> -->
    <script src="res/js/popper.min.js"></script>
    <script src="res/js/bootstrap.min.js"></script>
    <script src="res/js/all.min.js"></script>
    <script src="res/js/script.js"></script>
  </body>
</html>
