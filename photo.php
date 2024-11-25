<?php
    require_once __DIR__ . '/db/users.php';
    require_once __DIR__ . '/config/constants.php';

    session_start();

    $symptoms='';
    $message='';

    $image_error_size = '';
    $image_error_extension = '';

    if(isset($_POST['upload_photo'])){
        //validate image size
        $max_size_mb = MAX_IMG_SIZE_MB;
        $file_size_bytes = $_FILES['image']['size'];

        if($file_size_bytes > $max_size_mb * 1024 * 1024){
          $image_error_size = "Max allowed size is $max_size_mb Mb";
        }

        //validate image extension
        $allowed_extensions = ALLOWED_IMG_ENTENSIONS;
        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $extension = strtolower($extension);
        if(!in_array($extension,$allowed_extensions)){
          $image_error_extension = "Allowed Extensions are : " . implode(",",$allowed_extensions);
        }

        //storing image
        if(!$image_error_size && !$image_error_extension){
          $dst_img_path_rel = 'res/img/uploaded_images/' . time() . uniqid(rand()) . '.' . $extension;
          $dst_img_path = __DIR__ . '/' . $dst_img_path_rel;
          move_uploaded_file($_FILES['image']['tmp_name'],$dst_img_path);
          
          $patient_email = $_SESSION['patient']->email;
          
          database_check_up($patient_email, $symptoms, $dst_img_path_rel);
          $message='Photo Uploaded Successfully';
        }







    }












?>





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
        <a href="details.php" class="sign button">Upload File</a>
      </div>
    </header>
    <!-- -------End Header---------- -->
    
    <form action="photo.php" method="post" enctype="multipart/form-data">
      <div class="choose">
        <div class="container">
          <?php if ($message): ?> 
              <div class="error_message">
                <p>   <?php echo $message ?>    </p> 
              </div>
          <?php endif; ?>
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
            <label for="inpBtn" class="lblBtn">Select <span>photo</span> from your computer</label>
            <span id="file-chosen">No file chosen</span>
          </div>

          <!-- -------------error----------- -->
          <?php if ($image_error_size): ?> 
            <div class="error_message">
              <p>   <?php echo $image_error_size ?>    </p> 
            </div>  
            <?php endif; ?>

          <?php if ($image_error_extension): ?> 
            <div class="error_message">
              <p>   <?php echo $image_error_extension ?>    </p> 
            </div>
          <?php endif; ?>
          <!-- --------------end error------------ -->


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
