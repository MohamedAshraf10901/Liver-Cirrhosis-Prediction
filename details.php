<?php
    require_once __DIR__ . '/db/users.php';

    session_start();
    $image='';
    $result='';

    $w=' , ';

    $a1='General fatigue and asthenia';
    $a2='Feeling sick and tired';
    $a3='Lose of weight';
    $a4='Anorexia';
    $a5='The appearance of red spots on the palms of the hands';
    
    $b1='Jaundice, yellowing of the skin and the whites of the eyes';
    $b2='High temperature with chills';
    $b3='vomiting blood';
    $b4='Blackening or yellowing of the stool';
    $b5='itchy skin';
    $b6='Abdominal pain and swelling caused by fluid accumulation';
    $b7='Bleeding or bruising is rapid and noticeable';
    $b8='Foot and leg swelling';
    $b9='memory loss, hallucinations, confusion, and distracted thinking';
    
    $c1='alcoholism';
    $c2='Viral hepatitis B, C and D';
    $c3='Long-term use of certain medicines';
    $c4='Exposure to toxins for a long time';
    $c5='Frequent episodes of heart failure';

    $a_arr = array($a1,$a2,$a3,$a4,$a5);
    $c_arr = array($c1,$c2,$c3,$c4,$c5);
    $b_arr = array($b1,$b2,$b3,$b4,$b5,$b6,$b7,$b8,$b9);
    


     if(isset($_POST['get_result'])){
      $patient_name = $_SESSION['patient']->name;
      $patient_email = $_SESSION['patient']->email;
      $sellected_symptoms = $_POST['symptoms'];
      $symptoms=implode(" , ",$sellected_symptoms);
      
      
      foreach ($a_arr as $word) {
        if (strpos($symptoms, $word) !== false) {
        $result='You have early stage cirrhosis.';  
        database_check_up($patient_name, $patient_email, $symptoms, $image, $result);
        header('location: result.php');
        exit;
        }
      }

      foreach ($b_arr as $word) {
        if (strpos($symptoms, $word) !== false) {
        $result='You have late stage cirrhosis.';  
        database_check_up($patient_name, $patient_email, $symptoms, $image, $result);
        header('location: result2.php');
        exit;
        }
      }

      foreach ($c_arr as $word) {
        if (strpos($symptoms, $word) !== false) {
        $result='There is a possibility that you will get cirrhosis.';  
        database_check_up($patient_name, $patient_email, $symptoms, $image, $result);
        header('location: result3.php');
        exit;
        }
      }

    
    }


     


?>













<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cirrhosis || Symptom</title>

  <link rel="stylesheet" href="res/css/bootstrap.min.css" />
  <link rel="stylesheet" href="res/css/all.css" />
  <link rel="stylesheet" href="res/css/main.css" />
  <link rel="stylesheet" href="res/css/style.css" />
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
          <li><a href="index.php#home" class="navLink active">home</a></li>
          <li><a href="content.php#content" class="navLink">content</a></li>
          <li><a href="logsite.php" class="navLink">Check Up</a></li>
          <li><a href="appoint.php" class="navLink">Doctors Page</a></li>
          <li><a href="contact.php" class="navLink">Contact us</a></li>

        </ul>
      </div>
      <a href="photo.php" class="sign button">Upload Photo</a>
    </div>

      </div>
    </div>
  </header>

<section class="slidee" id="symptoms">
    <div class="signin">
      <div class="container">
        <form method="post" action="details.php">
          <div class="row">
            <h4>The Symptoms</h4>
            
            <h5>Please select symptoms you feel</h5>
            <div class="questions">
              <div class="question">
                <input type="checkbox" id="Q1" name="symptoms[]" value="General fatigue and asthenia" >
                <label for="Q1">General fatigue and asthenia.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q2" name="symptoms[]" value="Feeling sick and tired" >
                <label for="Q2">Feeling sick and tired</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q3" name="symptoms[]" value="Lose of weight" >
                <label for="Q3">Lose of weight</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q4" name="symptoms[]" value="Anorexia" >
                <label for="Q4">Anorexia.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q5" name="symptoms[]" value="The appearance of red spots on the palms of the hands" >
                <label for="Q5">The appearance of red spots on the palms of the hands.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q6" name="symptoms[]" value="Jaundice, yellowing of the skin and the whites of the eyes" >
                <label for="Q6">Jaundice, yellowing of the skin and the whites of the eyes.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q7" name="symptoms[]" value="High temperature with chills" >
                <label for="Q7">High temperature with chills.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q8" name="symptoms[]" value="vomiting blood" >
                <label for="Q8">vomiting blood.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q9" name="symptoms[]" value="Blackening or yellowing of the stool" >
                <label for="Q9">Blackening or yellowing of the stool.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q10" name="symptoms[]" value="itchy skin" >
                <label for="Q10">itchy skin.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q11" name="symptoms[]" value="Abdominal pain and swelling caused by fluid accumulation" >
                <label for="Q11">Abdominal pain and swelling caused by fluid accumulation.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q12" name="symptoms[]" value="Bleeding or bruising is rapid and noticeable" >
                <label for="Q12">Bleeding or bruising is rapid and noticeable.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q13" name="symptoms[]" value="Foot and leg swelling" >
                <label for="Q13">Foot and leg swelling.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q14" name="symptoms[]" value="memory loss, hallucinations, confusion, and distracted thinking" >
                <label for="Q14">memory loss, hallucinations, confusion, and distracted thinking.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q15" name="symptoms[]" value="alcoholism" >
                <label for="Q15">alcoholism.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q16" name="symptoms[]" value="Viral hepatitis B, C and D" >
                <label for="Q16">Viral hepatitis B, C and D.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q17" name="symptoms[]" value="Long-term use of certain medicines" >
                <label for="Q17">Long-term use of certain medicines.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q18" name="symptoms[]" value="Exposure to toxins for a long time" >
                <label for="Q18">Exposure to toxins for a long time.</label>
              </div>
              <div class="question">
                <input type="checkbox" id="Q19" name="symptoms[]" value="Frequent episodes of heart failure" >
                <label for="Q19">Frequent episodes of heart failure.</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="input-group">
              <button type="submit" name = "get_result" class="button nextBtn">Get Result <i class="fa-solid fa-arrow-right-to-bracket"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
</section>

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
          <P class="copyright">Copyright &copy; 2022 <a href="index.php#home">WebTeb&trade;</a></P>
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