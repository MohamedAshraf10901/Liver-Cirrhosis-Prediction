<?php
    require_once __DIR__ . '/db/users.php';

    session_start();

    $error='';
    
    $name='';
    $email='';
    $phone_number='';

     if(isset($_POST['confirm_appoint'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone_number = $_POST['phone_number'];
      $patient = datbase_appoint_patient($name,$email,$phone_number);
      
      
      if ($patient===null){
        $error = 'wrong in (name or email or phone_number)';
      }else{

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        database_confirm_appoint($name, $email, $phone_number, $date, $time);
        $_SESSION ['patient'] = $patient;
        header('location: index.php');
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
    <title>Cirrhosis || Appointment</title>

    <link rel="stylesheet" href="res/css/bootstrap.min.css" />
    <link rel="stylesheet" href="res/css/all.css" />
    <link rel="stylesheet" href="res/css/main.css" />
    <link rel="stylesheet" href="res/css/style.css" />
    <link rel="stylesheet" href="res/css/login.css" />
    <link rel="stylesheet" href="res/css/details.css" />
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
            <li><a href="index.php#home" class="navLink">home</a></li>
            <li><a href="content.php#content" class="navLink">content</a></li>
            <li><a href="logsite.php" class="navLink">Check Up</a></li>
            <li><a href="appoint.php" class="navLink active">Doctors Page</a></li>
            <li><a href="contact.php" class="navLink">Contact us</a></li>

          </ul>
        </div>
      </div>
    </header>

    <div class="signin">
      <div class="container">
        <form action="" method="post">
          <div class="row">
            <h4>Confirm Appointment</h4>
            
            <div class="input-group input-group-icon">
              <input type="text" name="name" placeholder="Your Name" value = "<?php echo $name ?>" required />
              <div class="input-icon"><i class="fa fa-signature"></i></div>
            </div>

            <div class="input-group input-group-icon">
              <input type="email" name="email" placeholder="Email Address" value = "<?php echo $email ?>" required/>
              <div class="input-icon"><i class="fa fa-envelope"></i></div>
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

            <?php if ($error): ?> 
              <div class="error_message">
                <p>   <?php echo $error ?>    </p> 
              </div>
            <?php endif; ?>

          </div>

          <div class="row">
            <div class="col-half">
              <h5>Select Date</h5>
              <div class="input-group">
                <div class="col">
                  <input type="date" name="date" required />
                </div>
              </div>
            </div>
            <div class="col-half">
              <h5>Select Time</h5>
              <div class="input-group">
                <input type="time" name="time" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="reserve">
              <button type="submit" name="confirm_appoint" class="button book">Confirm Appointment</button>
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

    <!-- <script src="https://cdn.lordicon.com/qjzruarw.js"></script> -->
    <script src="res/js/popper.min.js"></script>
    <script src="res/js/bootstrap.min.js"></script>
    <script src="res/js/all.min.js"></script>
    <script src="res/js/script.js"></script>
  </body>
</html>
