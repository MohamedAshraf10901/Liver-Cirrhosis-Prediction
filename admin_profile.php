<?php
    require_once __DIR__ . '/db/users.php';
    
    session_start();

    // echo"<pre";
    // print_r($users);
    // echo"</pre";


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="res/css/bootstrap.min.css" />
    <link rel="stylesheet" href="res/css/admin-style.css" />
  </head>
  <body>
    <div class="fluid">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-2">
          <nav>
          <h3 class="title">Liver <span>Cirrhosis</span></h3>
            <ul class="links-list">
              <li class="link">
                <a href="admin_profile.php" id="admin_p"><i class="fas fa-lock active"></i> Admin Profile</a>
              </li>
              <li class="link">
                <a href="users_info.php"><i class="fas fa-users"></i> Users Info</a>
              </li>
              <li class="link">
                <a href="complaints.php"><i class="fas fa-pen"></i> Complaints</a>
              </li>
              <li class="link">
                <a href="manage_appointment.php"><i class="fas fa-user-doctor"></i> Appointments</a>
              </li>
              <li class="link">
              <a href="doctors.php"><i class="fas fa-user-doctor"></i> Doctors</a>
              </li>
              <li class="link">
              <a href="view_patients.php"><i class="fas fa-user-doctor"></i> Patients</a>
              </li>
            </ul>
          </nav>
        </div>


        <div class="card col-lg-8 col-md-9 col-sm-10">
            <div class="imgSec">
                <img src="res/img/admin4.png" alt="">
            </div>
            <form class="firForm">
              <!-- <p class="inputTxt"> My ID: <?php echo $_SESSION['admin']->id ?></p> -->
              <p class="inputTxt"> My Name: <?php echo $_SESSION['admin']->name ?></p>
              <p class="inputTxt"> My Email: <?php echo $_SESSION['admin']->email ?></p>
              <p class="inputTxt"> My Phone:<?php echo $_SESSION['admin']->phone_number ?></p>
              <p class="inputTxt"> My Address: <?php echo $_SESSION['admin']->address ?></p>
              <p class="inputTxt"> Date Of Birth: <?php echo $_SESSION['admin']->birth_date ?></p>
              <p class="inputTxt"> Gender: <?php echo $_SESSION['admin']->gender ?></p>
                
            </form>
            <button type="button" ><a href="update_profile.php">Update Profile</a></button>
        </div>
      </div>
      
    </div>

    <script src="res/js/all.min.js"></script>
    <script src="res/js/popper.min.js"></script>
    <script src="res/js/bootstrap.min.js"></script>
  </body>
</html>
