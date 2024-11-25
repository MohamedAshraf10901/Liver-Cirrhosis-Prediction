<?php
    require_once __DIR__ . '/db/users.php';
    $doctors = database_get_all_doctors();

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
                <a href="admin_profile.php"><i class="fas fa-lock"></i> Admin Profile</a>
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
              <a href="doctors.php"><i class="fas fa-user-doctor active"></i> Doctors</a>
              </li>
              <li class="link">
              <a href="view_patients.php"><i class="fas fa-user-doctor"></i> Patients</a>
              </li>
            </ul>
          </nav>
        </div>
        <?php  foreach($doctors as $doctor): ?>
          <div class="card col-lg-8 col-md-9 col-sm-10">
              <div class="imgSec">
                  <img src="res/img/admin6.jpg" alt="">
              </div>
              
                <form class="firForm">
                  <p class="inputTxt"> Doctor Name: <?php echo $doctor->name ?></p>
                  <p class="inputTxt"> Specialization: <?php echo $doctor->specialization ?></p>
                  <p class="inputTxt"> more Info: <?php echo $doctor->info ?></p>
                </form>          
          </div>
        <?php endforeach; ?>
        
      </div>
      <button type="button"><a href="add_doctor.php">Add Doctor</a></button>
    </div>

    <script src="res/js/all.min.js"></script>
    <script src="res/js/popper.min.js"></script>
    <script src="res/js/bootstrap.min.js"></script>
  </body>
</html>
