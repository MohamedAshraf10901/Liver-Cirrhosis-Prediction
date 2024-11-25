<!-- <?php
    require_once __DIR__ . '/db/connection.php';

    $conn = database_connect();
    echo "success";

?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cirrhosis</title>

    <link rel="stylesheet" href="res/css/bootstrap.min.css" />
    <link rel="stylesheet" href="res/css/all.css" />
    <link rel="stylesheet" href="res/css/main.css" />
    <link rel="stylesheet" href="res/css/style.css" />
  </head>

  <body>
    <!-- ===================== -->
    <!-- Start Header -->
    <header class="sticky-top">
      <div class="container">
        <div class="left-header">
          <img src="res/img/logo.png" alt="" class="logo" />
        </div>
        <div class="links">
          <ul>
            <li><a href="index.php#home" class="navLink active">home</a></li>
            <li><a href="index.php#learnMore" class="navLink">about us</a></li>
            <li><a href="content.php#content" class="navLink">content</a></li>
            <li><a href="logsite.php" class="navLink">Check Up</a></li>
            <li><a href="appoint.php" class="navLink">Doctors Page</a></li>
            <li><a href="contact.php" class="navLink">Contact us</a></li>
            <li><a href="index.php#opinions" class="navLink">opinions</a></li>

          </ul>
        </div>
      </div>
    </header>
    <!-- End Header -->
    <!-- ===================== -->

    <!-- ===================== -->
    <!-- Start Slide -->
    <section class="slide" id="home">
      <div class="container">
        <div class="text">
          <h1>Liver Cirrhosis</h1>
          <p>
            Cirrhosis is scarring (fibrosis) of the liver caused by long-term
            liver damage. The scar tissue prevents the liver working properly.
          </p>
          <a href="#learnMore" class="button"
            >Learn More <i class="fas fa-arrow-down"></i
          ></a>
        </div>
        <div class="photo">
          <img src="res/img/slidepho.png" alt="" class="slidepho" />
        </div>
      </div>
    </section>
    <!-- End Slide -->
    <!-- ===================== -->

    <section class="slide" id="learnMore">
      <div class="container">
        <div class="text">
          <h1>About US</h1>
          <p>We are determined to achieve real change in liver health by:</p>

           <p>increasing awareness of liver disease and its risk factors . 
            providing information and support to those affected.
           working with healthcare professionals campaigning for earlier detection and better treatment .</p>
        </div>
        <div class="photo">
          <img src="res/img/about.jpg" alt="" class="slidepho" />
        </div>
      </div>
    </section>
    

    <!-- Start Testimonials -->
    <section class="test" id="opinions">
      <div class="container">
        <!-- Head Title -->
        <div class="head">
          <h1 class="headSections">Opinions</h1>
        </div>
        <!-- All Cards Div -->
        <div class="testCards">
          <!-- UP Icon -->
          <div class="icon Up" id="up" onclick="goUp()">
            <i class="fa fa-arrow-up"></i>
          </div>
          <!-- All Section Div -->
          <div class="testAllSection">
            <!-- Section 1 -->
            <div class="testSection testOne active" id="one">
              <div class="leftSide">
                <p class="testPra">
                  <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet
                  consectetur, adipisicing elit. Adipisci, amet?
                  <i class="fas fa-quote-right"></i>
                </p>
                <h2 class="testHead">Ahmed Essam</h2>
              </div>
              <div class="rightSide">
                <img src="res/img/testimonials-1.jpg" alt="" />
              </div>
            </div>
            <!-- Section 2 -->
            <div class="testSection testTwo" id="two">
              <div class="leftSide">
                <p class="testPra">
                  <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet
                  consectetur, adipisicing elit. Adipisci, amet?
                  <i class="fas fa-quote-right"></i>
                </p>
                <h2 class="testHead">Noha Osman</h2>
              </div>
              <div class="rightSide">
                <img src="res/img/testimonials-2.jpg" alt="" />
              </div>
            </div>
            <!-- Section 3 -->
            <div class="testSection testThree" id="three">
              <div class="leftSide">
                <p class="testPra">
                  <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet
                  consectetur, adipisicing elit. Adipisci, amet?
                  <i class="fas fa-quote-right"></i>
                </p>
                <h2 class="testHead">Amany Ahmed</h2>
              </div>
              <div class="rightSide">
                <img src="res/img/testimonials-3.jpg" alt="" />
              </div>
            </div>
            <!-- Section 4 -->
            <div class="testSection testFour" id="four">
              <div class="leftSide">
                <p class="testPra">
                  <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet
                  consectetur, adipisicing elit. Adipisci, amet?
                  <i class="fas fa-quote-right"></i>
                </p>
                <h2 class="testHead">Ebrahim Samy</h2>
              </div>
              <div class="rightSide">
                <img src="res/img/testimonials-4.jpg" alt="" />
              </div>
            </div>
          </div>

          <!-- DOWN Icon -->
          <div class="icon Down" id="down" onclick="goDown()">
            <i class="fa fa-arrow-down"></i>
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonials -->
    <!-- ===================== -->

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
