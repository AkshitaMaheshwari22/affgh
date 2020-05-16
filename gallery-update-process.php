<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include_once("connect-to-db.php");

http_response_code(500);

$admin = false;
if (isset($_SESSION["admin"]))
    $admin = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $admin) {

    $id = esc($_POST["id"]);
    $occurence = esc($_POST["order"]);

    $sqlQuery = "update gallery set occurence = '$occurence' where id = '$id'";
    mysqli_query($dbRef, $sqlQuery);

    $msg = mysqli_error($dbRef);
    if ($msg == "") {
        http_response_code(201);
    }
} else {
    header("Location:index.php");
}
