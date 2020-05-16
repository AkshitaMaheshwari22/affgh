<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
date_default_timezone_set('Asia/Kolkata');
include_once("connect-to-db.php");

http_response_code(500);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = "AFFGP " . rand(2010000, 2019999); //13 bit unique id
    $firstname = esc($_POST["firstname"]);
    $lastname = esc($_POST["lastname"]);
    $dob = date("Y-m-d", strtotime(esc($_POST["dob"])));
    $birthplace = esc($_POST["birthplace"]);
    $picture = "";


    $date = date("Y-m-d_H-i-s");

    if (!empty($_FILES["picture"]["name"])) {
        $orgName = $_FILES["picture"]["name"]; //original file name
        $tmpName = $_FILES["picture"]["tmp_name"]; //temporary file name

        $picture = $date . "_" . $orgName; //name of saved picture
        move_uploaded_file($tmpName, "images/" . $picture); //picture saved in img folder
    }

    $sqlQuery = "insert into athlete(id,firstname,lastname,dob,birthplace,picture) values('$id','$firstname','$lastname','$dob','$birthplace','$picture')";
    mysqli_query($dbRef, $sqlQuery);

    $msg = mysqli_error($dbRef);
    if ($msg == "") {
        http_response_code(201);
    }
} else {
    header("Location:index.php");
}
