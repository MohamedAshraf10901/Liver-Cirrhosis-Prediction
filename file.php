





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cirrhosis || Choose</title>

    <link rel="stylesheet" href="res/css/bootstrap.min.css" />
    <link rel="stylesheet" href="res/css/all.css" />
    <link rel="stylesheet" href="res/css/main.css" />
    <link rel="stylesheet" href="res/css/style.css" />
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
            <li><a href="index.php#home" class="navLink ">home</a></li>
            <li><a href="content.php#content" class="navLink">content</a></li>
            <li><a href="logsite.php" class="navLink active">Check Up</a></li>
            <li><a href="appoint.php" class="navLink">Doctors Page</a></li>
            <li><a href="contact.php" class="navLink">Contact us</a></li>
          </ul>
        </div>
        <a href="details.php" class="sign button">Upload Photo</a>
      </div>
    </header>
    <!-- -------End Header---------- -->
    
    <form action="photo.php" method="post" enctype="multipart/form-data">
      <div class="choose">
        <div class="container">
          <div class="uploadSec">
            <input
              class="inpBtn"
              id="inpBtn"
              type="file"
              name="image"
              accept=".jpg,.jpeg,.png"
              hidden

              required
            />
            <label for="inpBtn" class="lblBtn">Select <span>file</span> from your computer</label>
            <span id="file-chosen">No file chosen</span>
          </div>

          <div class="header-right">
            <button type="submit" name = "upload_photo" class="button nextBtn">Get Result <i class="fa-solid fa-arrow-right-to-bracket"></i></button>
          </div>
        </div>
      </div>
    </form>
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

    <script>
      const inpBtn = document.getElementById("inpBtn");

      const fileChosen = document.getElementById("file-chosen");

      inpBtn.addEventListener("change", function () {
        fileChosen.textContent = this.files[0].name;
      });
    </script>
  </body>
</html>
