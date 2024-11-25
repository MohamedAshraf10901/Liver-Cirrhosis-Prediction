<?php

require_once __DIR__ . '/connection.php';

function database_get_all_patients(){
    $conn = database_connect();
    $result = mysqli_query($conn, "select * from patients"); 
    $patients = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $patients_objects = [];
    foreach($patients as $patient){
        $patients_objects[] = (object)$patient; }
    mysqli_close($conn);
    return $patients_objects;
}


function database_get_patient($id) {
    $conn = database_connect();
    $stmt = mysqli_prepare($conn, "select * from patients where id= ?");
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) > 0) {
        $patient = (object)mysqli_fetch_assoc($result);
    } else {
        $patient = null;
    }
    mysqli_close($conn);
    return $patient;
}


function database_insert_patient($name, $address, $phone_number, $email, $password, $confirm_password, $birth_date , $gender) {
    $conn= database_connect();
    $stmt = mysqli_prepare($conn, "insert into patients(name, address, phone_number, email, password , confirm_password , birth_date , gender) values (?, ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'ssssssss', $name, $address, $phone_number, $email , $password , $confirm_password , $birth_date , $gender);
    mysqli_stmt_execute($stmt);
    $id = mysqli_insert_id($conn);
    mysqli_close($conn);
    return $id;
}

function database_check_email_exists($email){
    $conn = database_connect();
    $stmt = mysqli_prepare($conn, "select email from patients where email = ? ");
    mysqli_stmt_bind_param($stmt, 's', $email );
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) > 0) {
       return true;   //email exist
    }
    mysqli_close($conn);
    return false;    //email doesnot exist    
}

function datbase_login_patient($email, $password){
    $conn = database_connect();
    $stmt = mysqli_prepare($conn, "select * from patients where email = ? and password = ?");
    mysqli_stmt_bind_param($stmt, 'ss', $email , $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) > 0) {
        $patient = (object)mysqli_fetch_assoc($result);
    } else {
        $patient = null;
    }
    mysqli_close($conn);
    return $patient;
}


function database_check_up($patient_name, $patient_email, $symptoms, $image, $result) {
    $conn= database_connect();
    $stmt = mysqli_prepare($conn, "insert into disease(patient_name, patient_email, symptoms, image, result) values (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'sssss',$patient_name, $patient_email, $symptoms, $image, $result);
    mysqli_stmt_execute($stmt);
    mysqli_close($conn);
}




function database_insert_patient_symptoms($email,$status,$drug,$age,$sex,$ascites,$hepatomegaly,$spiders,$edema,$bilirubin,$cholesterol,$albumin,$copper,$alk_phos,$sgot,$tryglicerides,$platelets,$prothrombin,$stage) {
    $conn= database_connect();
    $stmt = mysqli_prepare($conn, "insert into patients_symptoms(patient_email, status, drug, age, sex, ascites, hepatomegaly, spiders, edema, bilirubin, cholesterol, albumin, copper, alk_phos, sgot, tryglicerides, platelets, prothrombin, stage) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'sssisssssssssssssss', $email,$status,$drug,$age,$sex,$ascites,$hepatomegaly,$spiders,$edema,$bilirubin,$cholesterol,$albumin,$copper,$alk_phos,$sgot,$tryglicerides,$platelets,$prothrombin,$stage);
    mysqli_stmt_execute($stmt);
    $id = mysqli_insert_id($conn);
    mysqli_close($conn);
    return $id;
}

function database_get_patients_symptoms(){
    $conn = database_connect();
    $result = mysqli_query($conn, "select * from patients_symptoms"); 
    $patients = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $patients_objects = [];
    foreach($patients as $patient){
        $patients_objects[] = (object)$patient; }
    mysqli_close($conn);
    return $patients_objects;
}


//-----------------contact_us-------------------
function datbase_contact_patient($name,$email){
    $conn = database_connect();
    $stmt = mysqli_prepare($conn, "select * from patients where name = ? and email = ?");
    mysqli_stmt_bind_param($stmt, 'ss', $name, $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) > 0) {
        $patient = (object)mysqli_fetch_assoc($result);
    } else {
        $patient = null;
    }
    mysqli_close($conn);
    return $patient;
}

function database_insert_message($name, $email, $message) {
    $conn= database_connect();
    $stmt = mysqli_prepare($conn, "insert into complaints(patient_name, patient_email, message) values (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'sss',$name, $email, $message);
    mysqli_stmt_execute($stmt);
    mysqli_close($conn);
}
// -------------------------Doctors Bage-----------------------
function database_insert_doctors($name, $specialization, $info, $location, $schedule, $phone_number ) {
    $conn= database_connect();
    $stmt = mysqli_prepare($conn, "insert into doctors(name, specialization, info, location, schedule, phone_number) values (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'ssssss', $name, $specialization, $info, $location, $schedule, $phone_number);
    mysqli_stmt_execute($stmt);
    $id = mysqli_insert_id($conn);
    mysqli_close($conn);
    return $id;
}

function database_get_all_doctors(){
    $conn = database_connect();
    $result = mysqli_query($conn, "select * from doctors"); 
    $doctors = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $doctors_objects = [];
    foreach($doctors as $doctor){
        $doctors_objects[] = (object)$doctor; }
    mysqli_close($conn);
    return $doctors_objects;
}

//---------------------finish_appoint------------------
function datbase_appoint_patient($name, $email, $phone_number){
    $conn = database_connect();
    $stmt = mysqli_prepare($conn, "select * from patients where name = ? and email = ? and phone_number = ? ");
    mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $phone_number);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) > 0) {
        $patient = (object)mysqli_fetch_assoc($result);
    } else {
        $patient = null;
    }
    mysqli_close($conn);
    return $patient;
}

function database_confirm_appoint($name, $email, $phone_number, $date, $time) {
    $conn= database_connect();
    $stmt = mysqli_prepare($conn, "insert into appointment(patient_name, patient_email, phone_number, date, time) values (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'sssss',$name, $email, $phone_number, $date, $time);
    mysqli_stmt_execute($stmt);
    mysqli_close($conn);
}






//--------------------------------A D M I N---------------------------------------

function database_insert_admin($name, $address, $phone_number, $email, $password, $confirm_password, $birth_date , $gender) {
    $conn= database_connect();
    $stmt = mysqli_prepare($conn, "insert into admin(name, address, phone_number, email, password , confirm_password , birth_date , gender) values (?, ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'ssssssss', $name, $address, $phone_number, $email , $password , $confirm_password , $birth_date , $gender);
    mysqli_stmt_execute($stmt);
    $id = mysqli_insert_id($conn);
    mysqli_close($conn);
    return $id;
}

function database_get_admin($id) {
    $conn = database_connect();
    $stmt = mysqli_prepare($conn, "select * from admin where id= ?");
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) > 0) {
        $admin = (object)mysqli_fetch_assoc($result);
    } else {
        $admin = null;
    }
    mysqli_close($conn);
    return $admin;
}

function database_update_admin($name, $address, $phone_number, $email, $password, $confirm_password, $birth_date, $gender, $id) {
    $conn= database_connect();
    $stmt = mysqli_prepare($conn, "UPDATE admin SET name = ? and address = ? and phone_number = ? and email = ? and password = ? and confirm_password = ? and birth_date = ? and gender = ? WHERE id = ?");
    mysqli_stmt_bind_param($stmt, 'ssssssssi', $name, $address, $phone_number, $email, $password, $confirm_password, $birth_date, $gender, $id);
    mysqli_stmt_execute($stmt);
    mysqli_close($conn);
}


function database_check_admin_email_exists($email){
    $conn = database_connect();
    $stmt = mysqli_prepare($conn, "select email from admin where email = ? ");
    mysqli_stmt_bind_param($stmt, 's', $email );
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) > 0) {
        mysqli_close($conn);
       return true;   //email exist
    }
    mysqli_close($conn);
    return false;    //email doesnot exist    
}


function datbase_login_admin($email, $password){
    $conn = database_connect();
    $stmt = mysqli_prepare($conn, "select * from admin where email = ? and password = ?");
    mysqli_stmt_bind_param($stmt, 'ss', $email , $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) > 0) {
        $admin = (object)mysqli_fetch_assoc($result);
    } else {
        $admin = null;
    }
    mysqli_close($conn);
    return $admin;
}



function database_get_complaints(){
    $conn = database_connect();
    $result = mysqli_query($conn, "select * from complaints"); 
    $complaints = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $complaints_objects = [];
    foreach($complaints as $complaint){
        $complaints_objects[] = (object)$complaint; }
    mysqli_close($conn);
    return $complaints_objects;
}

function database_get_appointments(){
    $conn = database_connect();
    $result = mysqli_query($conn, "select * from appointment"); 
    $appointments = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $appointments_objects = [];
    foreach($appointments as $appointment){
        $appointments_objects[] = (object)$appointment; }
    mysqli_close($conn);
    return $appointments_objects;
}

function database_view_patients(){
    $conn = database_connect();
    $result = mysqli_query($conn, "select * from disease"); 
    $patients = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $patients_objects = [];
    foreach($patients as $patient){
        $patients_objects[] = (object)$patient; }
    mysqli_close($conn);
    return $patients_objects;
}