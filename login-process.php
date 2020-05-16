<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include_once("connect-to-db.php");

http_response_code(500);

$email = esc($_POST["email"]);
$password = md5(esc($_POST["password"]));

$query = "select * from admin where email = '$email' and password = '$password';"; //get account corresponding to email and password
include_once("connect-to-db.php");
$table = mysqli_query($dbRef, $query); //execute query and store results

if ($table && mysqli_num_rows($table) != 0) {
    $row = mysqli_fetch_array($table); //convert the object into array
    $_SESSION["admin"] = $row["email"];
    http_response_code(201);
}
