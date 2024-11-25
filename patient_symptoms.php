<?php
    require_once __DIR__ . '/db/users.php';

    if(isset($_POST['submit_symp'])){
        $email = $_POST['email'];
        $status = $_POST['status'];
        $drug = $_POST['drug'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $ascites = $_POST['ascites'];
        $hepatomegaly = $_POST['hepatomegaly'];
        $spiders = $_POST['spiders'];
        $edema = $_POST['edema'];
        $bilirubin = $_POST['bilirubin'];
        $cholesterol = $_POST['cholesterol'];
        $albumin = $_POST['albumin'];
        $copper = $_POST['copper'];
        $alk_phos = $_POST['alk_phos'];
        $sgot = $_POST['sgot'];
        $tryglicerides = $_POST['tryglicerides'];
        $platelets = $_POST['platelets'];
        $prothrombin = $_POST['prothrombin'];
        $stage = $_POST['stage'];

        database_insert_patient_symptoms($email,$status,$drug,$age,$sex,$ascites,$hepatomegaly,$spiders,$edema,$bilirubin,$cholesterol,$albumin,$copper,$alk_phos,$sgot,$tryglicerides,$platelets,$prothrombin,$stage);
    

    
    
    }  




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="res/css/stylee.css">
</head>

<body>
    <div class="container">
        <div class="title">Symptoms</div>
        <form action="result4.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Your Email</span>
                    <input type="email" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="input-box">
                    <span class="details">Your Age</span>
                    <input type="text" name="age" placeholder="Enter Your Age" required>
                </div>
                <div class="input-box">
                    <span class="details">Bilirubin</span>
                    <input type="text" name="bilirubin" placeholder="Enter Your Bilirubin" required>
                </div>
                <div class="input-box">
                    <span class="details">Cholesterol</span>
                    <input type="text" name="cholesterol" placeholder="Enter Your Cholesterol" required>
                </div>
                <div class="input-box">
                    <span class="details">Albumin</span>
                    <input type="text" name="albumin" placeholder="Enter Your Albumin" required>
                </div>
                <div class="input-box">
                    <span class="details">Copper</span>
                    <input type="text" name="copper" placeholder="Enter Your Copper" required>
                </div>
                <div class="input-box">
                    <span class="details">ALK_Phos</span>
                    <input type="text" name="alk_phos" placeholder="Enter Your ALK_Phos" required>
                </div>
                <div class="input-box">
                    <span class="details">SGOT</span>
                    <input type="text" name="sgot" placeholder="Enter Your Phone SGOT" required>
                </div>
                <div class="input-box">
                    <span class="details">Tryglicerides</span>
                    <input type="text" name="tryglicerides" placeholder="Enter Your Tryglicerides" required>
                </div>
                <div class="input-box">
                    <span class="details">Platelets</span>
                    <input type="text" name="platelets" placeholder="Enter Your Platelets" required>
                </div>
                <div class="input-box">
                    <span class="details">Prothrombin</span>
                    <input type="text" name="prothrombin" placeholder="Enter Your Prothrombin" required>
                </div>
                <div class="input-box">
                    <span class="details">Stage</span>
                    <input type="text" name="stage" placeholder="Enter Your Stage" required>
                </div>
                               
            </div>
            
            <div class="gender-details">
                <input type="radio" name="sex" value="M" id="dot-1">
                <input type="radio" name="sex" value="F" id="dot-2">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">M</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">F</span>
                    </label>
                </div>
                
            </div>

            <div class="gender-details">
                <input type="radio" name="status" value="D" id="dot-3">
                <input type="radio" name="status" value="C" id="dot-4">
                <span class="gender-title">Status</span>
                <div class="category">
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">D</span>
                    </label>
                    <label for="dot-4">
                        <span class="dot four"></span>
                        <span class="gender">C</span>
                    </label>
                </div>
            </div>

            <div class="gender-details">
                <input type="radio" name="drug" value="D-penicillamine" id="dot-5">
                <input type="radio" name="drug" value="Placebo" id="dot-6">
                <span class="gender-title">Drug</span>
                <div class="category">
                    <label for="dot-5">
                        <span class="dot five"></span>
                        <span class="gender">D-penicillamine</span>
                    </label>
                    <label for="dot-6">
                        <span class="dot six"></span>
                        <span class="gender">Placebo</span>
                    </label>
                </div>
            </div>

            <div class="gender-details">
                <input type="radio" name="ascites" value="Y" id="dot-7">
                <input type="radio" name="ascites" value="N" id="dot-8">
                <span class="gender-title">Ascites</span>
                <div class="category">
                    <label for="dot-7">
                        <span class="dot seven"></span>
                        <span class="gender">Y</span>
                    </label>
                    <label for="dot-8">
                        <span class="dot eight"></span>
                        <span class="gender">N</span>
                    </label>
                </div>
            </div>

            <div class="gender-details">
                <input type="radio" name="hepatomegaly" value="Y" id="dot-9">
                <input type="radio" name="hepatomegaly" value="N" id="dot-10">
                <span class="gender-title">Hepatomegaly</span>
                <div class="category">
                    <label for="dot-9">
                        <span class="dot nine"></span>
                        <span class="gender">Y</span>
                    </label>
                    <label for="dot-10">
                        <span class="dot ten"></span>
                        <span class="gender">N</span>
                    </label>
                </div>
            </div>

            <div class="gender-details">
                <input type="radio" name="spiders" value="Y" id="dot-11">
                <input type="radio" name="spiders" value="N" id="dot-12">
                <span class="gender-title">Spiders</span>
                <div class="category">
                    <label for="dot-11">
                        <span class="dot eleven"></span>
                        <span class="gender">Y</span>
                    </label>
                    <label for="dot-12">
                        <span class="dot twelve"></span>
                        <span class="gender">N</span>
                    </label>
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" name="edema" value="Y" id="dot-13">
                <input type="radio" name="edema" value="N" id="dot-14">
                <span class="gender-title">Edema</span>
                <div class="category">
                    <label for="dot-13">
                        <span class="dot threeten"></span>
                        <span class="gender">Y</span>
                    </label>
                    <label for="dot-14">
                        <span class="dot fourten"></span>
                        <span class="gender">N</span>
                    </label>
                </div>
            </div>

            <div class="button">
                <input type="submit" name="submit_symp" value="Register">
            </div>
        </form>
    </div>
    
    
</body>