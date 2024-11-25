<?php

require_once __DIR__ . "/../config/constants.php";

function database_connect(){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    return $conn;
}