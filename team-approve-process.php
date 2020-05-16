<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include_once("connect-to-db.php");

$admin = false;
if (isset($_SESSION["admin"]))
    $admin = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $admin) {

    $id = esc($_POST["id"]);
    $approved = esc($_POST["approved"]);

    $sqlQuery = "update athlete set approved = '$approved' where id = '$id'";
    mysqli_query($dbRef, $sqlQuery);

    $msg = mysqli_error($dbRef);
    if ($msg == "") {
        header("Location: team.php");
    }
} else {
    header("Location:index.php");
}
