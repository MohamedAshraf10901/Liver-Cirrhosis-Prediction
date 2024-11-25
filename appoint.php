<?php
    require_once __DIR__ . '/db/users.php';
    $doctors = database_get_all_doctors();
    session_start();

    // echo"<pre";
    // print_r($doctors);
    // echo"</pre";


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

    <header class="sticky-top">
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
        <a href="logSite.php" class="open"
          ><i class="fa-solid fa-user-plus"></i
        ></a>
      </div>
    </header>
    <!-- End Header -->

    <div class="signin">
      <div class="container">
        <form method="get" action="finish-appoint.php">
          <div class="row">
            <h4>Doctors Page</h4>
            <?php  foreach($doctors as $doctor): ?>
              <div class="appointCard cardActive" id="appCard1">
                <h5 class="docName"><?php echo $doctor->name ?></h5>
                <h5 class="docSpecial">
                <?php echo $doctor->specialization ?>
                </h5>
                <h5 class="docPlace">
                <?php echo $doctor->info ?>
                </h5>
                <div class="detailSection">
                  <div class="time">
                    <lord-icon
                      src="https://cdn.lordicon.com/oaflahpk.json"
                      class="iconPic"
                    >
                    </lord-icon>
                    <h6>Location</h6>
                    <p><?php echo $doctor->location ?></p>
                  </div>
                  <div class="price">
                    <lord-icon
                      class="iconPic"
                      src="https://cdn.lordicon.com/mgmiqlge.json"
                    >
                    </lord-icon>
                    <h6>The schedule</h6>
                    <p><?php echo $doctor->schedule ?></p>
                  </div>
                  <div class="phone">
                    <i class="fa fa-phone iconPic"></i>
                    <h6>Phone Number</h6>
                    <p><?php echo $doctor->phone_number ?></p>
                  </div>
                </div>
                <div class="reserve">
                    <button type="submit" name="submit" class="button book">Confirm Appointment</button>
                  </div>
              </div>
            <?php endforeach; ?>




            
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

    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
    <script src="res/js/popper.min.js"></script>
    <script src="res/js/bootstrap.min.js"></script>
    <script src="res/js/all.min.js"></script>
    <script src="res/js/script.js"></script>
  </body>
</html>
