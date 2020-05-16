<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include_once("connect-to-db.php");

http_response_code(500);

$admin = false;
if (isset($_SESSION["admin"]))
    $admin = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $admin) {

    $id = esc($_POST["eventId"]);
    $name = esc($_POST["eventName"]);
    $startDate = date("Y-m-d", strtotime(esc($_POST["eventStartDate"])));
    $startTime = date("H:i:s", strtotime(esc($_POST["eventStartTime"])));
    $endDate = date("Y-m-d", strtotime(esc($_POST["eventEndDate"])));
    $endTime = date("H:i:s", strtotime(esc($_POST["eventEndTime"])));
    $location = esc($_POST["eventLocation"]);
    $description = str_replace("\\n", "<br>", esc($_POST["eventDescription"]));
    $link = esc($_POST["eventLink"]);
    $website = esc($_POST["eventWebsite"]);
    $image = esc($_POST["eventImageName"]);


    date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d_H-i-s");

    if (!empty($_FILES["eventImage"]["name"])) {
        $orgName = $_FILES["eventImage"]["name"]; //original file name
        $tmpName = $_FILES["eventImage"]["tmp_name"]; //temporary file name

        $image = $date . "_" . $orgName; //name of saved image
        move_uploaded_file($tmpName, "img/" . $image); //image saved in img folder
    }

    $sqlQuery = "update events set name = '$name', startDate = '$startDate', startTime = '$startTime', endDate = '$endDate', endTime = '$endTime', location = '$location', description = '$description', link = '$link', website = '$website', image = '$image' where id = '$id'";
    mysqli_query($dbRef, $sqlQuery);

    $msg = mysqli_error($dbRef);
    if ($msg == "") {
        http_response_code(201);
    }
} else {
    header("Location:index.php");
}
