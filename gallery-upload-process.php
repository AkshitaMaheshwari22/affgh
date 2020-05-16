<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include_once("connect-to-db.php");
date_default_timezone_set('Asia/Kolkata');

http_response_code(500);

$admin = false;
if (isset($_SESSION["admin"]))
    $admin = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sqlQuery = "select max(occurence) max from gallery;";
    $occurence = 0;

    $table = mysqli_query($dbRef, $sqlQuery);
    if ($row = mysqli_fetch_row($table)) {
        $occurence = $row[0];
    }

    if (mysqli_error($dbRef) == "") {

        $sqlQuery = "";

        foreach ($_FILES["images"]["tmp_name"] as $key => $tmp_name) {

            $id = uniqid(); //13 character long unique id generated
            $date = date("Y_m_d_H_i_s");
            $occurence++;

            $temp = $_FILES["images"]["tmp_name"][$key];
            $name = $_FILES["images"]["name"][$key];
            $image = $date . "_" . $name; //name of saved image

            if (empty($temp)) {
                break;
            }
            move_uploaded_file($temp, "images/" . $image);
            $sqlQuery .= "insert into gallery(id,occurence,image) values('$id','$occurence','$image');";
        }

        mysqli_multi_query($dbRef, $sqlQuery);

        $msg = mysqli_error($dbRef);
        if ($msg == "") {
            http_response_code(201);
        }
    }
} else {
    header("Location:index.php");
}
