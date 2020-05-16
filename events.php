<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$admin = false;
if (isset($_SESSION["admin"]))
    $admin = true;

include_once("connect-to-db.php");
$ongoingEvents = array();
$query = "select * from events where startDate <= CURDATE() and CURDATE() <= endDate";
$table = mysqli_query($dbRef, $query);
while ($row = mysqli_fetch_array($table)) {
    $ongoingEvents[] =  $row;
}

$upcomingEvents = array();
$query = "select * from events where CURDATE() < startDate";
$table = mysqli_query($dbRef, $query);
while ($row = mysqli_fetch_array($table)) {
    $upcomingEvents[] =  $row;
}

$pastEvents = array();
$query = "select * from events where endDate < CURDATE()";
$table = mysqli_query($dbRef, $query);
while ($row = mysqli_fetch_array($table)) {
    $pastEvents[] =  $row;
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from 138.68.248.212/demo/prosoccer/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 22:26:17 GMT -->

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AFF Ghana</title>

    <meta name="keywords" content="American Football Federation Ghana">
    <meta name="author" content="Spadeems.com">

    <!-- ==============================================
	Favicons
	=============================================== -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <!-- ==============================================
	CSS
	=============================================== -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">


    <!-- ==============================================
	Google Fonts
	=============================================== -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- ==============================================
	Custom Stylesheet
	=============================================== -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/events.css" />



    <script type="text/javascript" src="js/modernizr.min.js"></script>



</head>

<body>

    <!-- Load page -->
    <div class="animationload">
        <div class="loader"></div>
    </div>


    <!-- NAVBAR SECTION -->
    <?php include('header.php'); ?>

    <!-- BANNER -->
    <div class="section subbanner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="caption">EVENTS</div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (!empty($ongoingEvents)) {
    ?>
        <!-- ONGOING EVENTS SECTION -->
        <div class="section singlepage events">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="page-title">
                            <h2 class="lead">Ongoing Events</h2>
                            <div class="border-style"></div>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-md-center">
                    <?php
                    $cardId = 1;
                    foreach ($ongoingEvents as $event) {

                        $startDate = date("j F Y", strtotime($event["startDate"]));
                        $endDate = date("j F Y", strtotime($event["endDate"]));
                        $startTime = date("g:i A", strtotime($event["startTime"]));
                        $endTime = date("g:i A", strtotime($event["endTime"]));
                        $website = false;
                        if ($event["website"])
                            $website = true;
                    ?>
                        <div class="col-lg-4 col-md-6 card-parent">
                            <div class="card mb-3" id="card1<?php echo $cardId; ?>">
                                <div class="card-img-overlay card-front">
                                    <?php
                                    if ($admin) {
                                    ?>
                                        <form method="GET" class="eventForm position-relative">
                                            <input type="text" name="id" maxlength="13" value="<?php echo $event['id'] ?>" hidden>
                                            <button type="submit" class="edit ml-2 mt-2" aria-label="Edit" data-toggle="tooltip" data-placement="top" title="Edit Event" formaction="events-edit.php">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="submit" class="delete mr-2 mt-2" aria-label="Delete" data-toggle="tooltip" data-placement="top" title="Delete Event">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>
                                    <?php
                                    }
                                    ?>
                                    <style>
                                        <?php echo "#card1" . $cardId; ?>:before {
                                            background-image: url(<?php echo "images/" . ($event['image'] != "" ? $event['image'] : "noimage.png"); ?>);
                                        }
                                    </style>
                                    <div class="content">
                                        <h2 class="title"><?php echo $event["name"] ?></h2>
                                        <ul style="list-style-type: none;">
                                            <li><?php echo $startDate . " - " . $endDate ?></li>
                                            <li><?php echo $startTime . " - " . $endTime ?></li>
                                            <li><?php echo $event["location"]; ?></li>
                                            <?php
                                            if ($website) {
                                            ?>
                                                <li class="mb-2"><a href="<?php echo $event['website']; ?>" style="color: white!important;">View More</a></li>
                                            <?php
                                            } else if ($event['description']) {
                                            ?>
                                                <li><a class="btn btn-link" style="color: white!important;">View more</a></li>
                                            <?php
                                            }
                                            if ($event['link']) {
                                            ?>
                                                <li class="loadmore"> <a href="<?php echo $event['link'] ?>" target="_blank">Register</a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                                if (!$website && $event['description']) {
                                ?>
                                    <div class="card-img-overlay card-back text-justify p-4" style="display: none;">
                                        <?php echo $event['description']; ?>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                        $cardId++;
                    }
                    ?>
                </div>

            </div>
        </div>
    <?php
    }
    if (!empty($upcomingEvents) || $admin) {
    ?>
        <!-- UPCOMING EVENTS SECTION -->
        <div class="section singlepage events">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="page-title">
                            <h2 class="lead">Upcoming Events</h2>
                            <div class="border-style"></div>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-md-center">
                    <?php
                    $cardId = 1;
                    foreach ($upcomingEvents as $event) {

                        $startDate = date("j F Y", strtotime($event["startDate"]));
                        $endDate = date("j F Y", strtotime($event["endDate"]));
                        $startTime = date("g:i A", strtotime($event["startTime"]));
                        $endTime = date("g:i A", strtotime($event["endTime"]));
                        $website = false;
                        if ($event["website"])
                            $website = true;
                    ?>
                        <div class="col-lg-4 col-md-6 card-parent">
                            <div class="card mb-3" id="card2<?php echo $cardId; ?>">
                                <div class="card-img-overlay card-front">
                                    <?php
                                    if ($admin) {
                                    ?>
                                        <form method="GET" class="eventForm">
                                            <input type="text" name="id" maxlength="13" value="<?php echo $event['id'] ?>" hidden>
                                            <button type="submit" class="edit ml-2 mt-2" aria-label="Edit" data-toggle="tooltip" data-placement="top" title="Edit Event" formaction="events-edit.php">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="submit" class="delete mr-2 mt-2" aria-label="Delete" data-toggle="tooltip" data-placement="top" title="Delete Event">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>
                                    <?php
                                    }
                                    ?>
                                    <style>
                                        <?php echo "#card2" . $cardId; ?>:before {
                                            background-image: url(<?php echo "images/" . ($event['image'] != "" ? $event['image'] : "noimage.png"); ?>);
                                        }
                                    </style>
                                    <div class="content">
                                        <h2 class="title"><?php echo $event["name"] ?></h2>
                                        <ul style="list-style-type: none;">
                                            <li><?php echo $startDate . " - " . $endDate ?></li>
                                            <li><?php echo $startTime . " - " . $endTime ?></li>
                                            <li><?php echo $event["location"]; ?></li>
                                            <?php
                                            if ($website) {
                                            ?>
                                                <li class="mb-2"><a href="<?php echo $event['website']; ?>" style="color: white!important;">View More</a></li>
                                            <?php
                                            } else if ($event['description']) {
                                            ?>
                                                <li><a class="btn btn-link" style="color: white!important;">View more</a></li>
                                            <?php
                                            }
                                            if ($event['link']) {
                                            ?>
                                                <li class="loadmore"> <a href="<?php echo $event['link'] ?>" target="_blank">Register</a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                                if (!$website && $event['description']) {
                                ?>
                                    <div class="card-img-overlay card-back text-justify p-4" style="display: none;">
                                        <?php echo $event['description']; ?>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                        $cardId++;
                    }
                    ?>
                    <?php
                    if ($admin) {
                    ?>
                        <div class="col-lg-4 col-md-6 mb-3 card-parent">
                            <style>
                                #card-add:before {
                                    background-image: url("images/add-event.png");
                                }
                            </style>
                            <a href="events-add.php" class="btn" style="width: 100%;" data-toggle="tooltip" data-placement="bottom" title="Add an event">
                                <div class="card" id="card-add">
                                    <div class="card-img-overlay card-front">
                                        <div class="content">
                                            <h2 class="title">Add an event</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    <?php
    }
    if (!empty($pastEvents)) {
    ?>
        <!-- PAST EVENTS SECTION -->
        <div class="section singlepage events">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="page-title">
                            <h2 class="lead">Past Events</h2>
                            <div class="border-style"></div>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-md-center">
                    <?php
                    $cardId = 1;
                    foreach ($pastEvents as $event) {

                        $startDate = date("j F Y", strtotime($event["startDate"]));
                        $endDate = date("j F Y", strtotime($event["endDate"]));
                        $startTime = date("g:i A", strtotime($event["startTime"]));
                        $endTime = date("g:i A", strtotime($event["endTime"]));
                        $website = false;
                        if ($event["website"])
                            $website = true;
                    ?>
                        <div class="col-lg-4 col-md-6 card-parent">
                            <div class="card mb-3" id="card3<?php echo $cardId; ?>">
                                <div class="card-img-overlay card-front">
                                    <?php
                                    if ($admin) {
                                    ?>
                                        <form method="GET" class="eventForm position-relative">
                                            <input type="text" name="id" maxlength="13" value="<?php echo $event['id'] ?>" hidden>
                                            <button type="submit" class="edit ml-2 mt-2" aria-label="Edit" data-toggle="tooltip" data-placement="top" title="Edit Event" formaction="events-edit.php">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="submit" class="delete mr-2 mt-2" aria-label="Delete" data-toggle="tooltip" data-placement="top" title="Delete Event">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>
                                    <?php
                                    }
                                    ?>
                                    <style>
                                        <?php echo "#card3" . $cardId; ?>:before {
                                            background-image: url(<?php echo "images/" . ($event['image'] != "" ? $event['image'] : "noimage.png"); ?>);
                                        }
                                    </style>
                                    <div class="content">
                                        <h2 class="title"><?php echo $event["name"] ?></h2>
                                        <ul style="list-style-type: none;">
                                            <li><?php echo $startDate . " - " . $endDate ?></li>
                                            <li><?php echo $startTime . " - " . $endTime ?></li>
                                            <li><?php echo $event["location"]; ?></li>
                                            <?php
                                            if ($website) {
                                            ?>
                                                <li class="mb-2"><a href="<?php echo $event['website']; ?>" style="color: white!important;">View More</a></li>
                                            <?php
                                            } else if ($event['description']) {
                                            ?>
                                                <li><a class="btn btn-link" style="color: white!important;">View more</a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                                if (!$website && $event['description']) {
                                ?>
                                    <div class="card-img-overlay card-back text-justify p-4" style="display: none;">
                                        <?php echo $event['description']; ?>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                        $cardId++;
                    }
                    ?>
                </div>

            </div>
        </div>
    <?php
    }
    ?>

    <!-- CLIENT SECTION -->
    <div class="section stat-client p-main bg-client">
        <div class="container">
            <div class="row">

                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                    <div class="client-img">
                        <img src="images/client1.png" alt="" class="img-responsive" />
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                    <div class="client-img">
                        <img src="images/client2.png" alt="" class="img-responsive" />
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                    <div class="client-img">
                        <img src="images/client3.png" alt="" class="img-responsive" />
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                    <div class="client-img">
                        <img src="images/client4.png" alt="" class="img-responsive" />
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                    <div class="client-img">
                        <img src="images/client5.png" alt="" class="img-responsive" />
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                    <div class="client-img">
                        <img src="images/client6.png" alt="" class="img-responsive" />
                    </div>
                </div>


            </div>
        </div>
    </div>


    <!-- FOOTER SECTION -->
    <?php include('footer.php'); ?>


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#header .navbar-nav li a:contains(EVENTS)").parent().addClass("active");

            <?php
            if ($admin) {
            ?>
                $(".delete").click(function() {
                    $(this).addClass("clicked");
                });
                $(".eventForm").submit(function(e) {
                    if ($(this).find(".delete").hasClass("clicked")) {
                        $(this).find(".delete").removeClass("clicked");
                        e.preventDefault();
                        var formData = new FormData(this);
                        $.ajax({
                            type: 'POST', // Type of request to be send, called as method
                            url: "events-delete-process.php", // Url to which the request is send
                            data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                            cache: false, // To unable request pages to be cached
                            contentType: false, // The content type used when sending data to the server.
                            processData: false, // To send DOMDocument or non processed data file it is set to false
                            success: function(data, textStatus, jqXHR) { // A function to be called if request succeeds
                                console.log(textStatus + ": " + jqXHR.status);
                                location.href = "events.php";
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                console.log(textStatus + ": " + jqXHR.status + " ");
                                alert("Error Occured, Try Again!");
                            }
                        });
                    }
                });
            <?php
            }
            ?>
        });
    </script>
    <script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5'></script>
    <script type='text/javascript' src='js/jqBootstrapValidation.js'></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/events.js"></script>




</body>

<!-- Mirrored from 138.68.248.212/demo/prosoccer/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 22:26:17 GMT -->

</html>