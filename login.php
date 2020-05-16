<?php
session_start();

if (isset($_SESSION["admin"])) {
    if (isset($_SERVER['HTTP_REFERER'])) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        header('Location: index.php');
    }
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
                    <div class="caption">LOGIN</div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGIN SECTION -->
    <div class="section singlepage events">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="page-title">
                        <h2 class="lead">LOGIN</h2>
                        <div class="border-style"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6 col-md-8 col-md-offset-2 col-lg-offset-3">
                    <form id="loginForm">
                        <!-- .form-row starts -->
                        <div class="form-row mb-3">
                            <div class="col-md-12 form-group">
                                <label for="email" class="font-weight-bold">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <!-- .form-row ends -->
                        <!-- .form-row starts -->
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="password" class="font-weight-bold">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <!-- .form-row ends -->
                        <!-- .form-row starts -->
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <button class="btn btn-default btn-block" type="submit" id="login">Login</button>
                            </div>
                        </div>
                        <!-- .form-row ends -->
                    </form>

                </div>
            </div>

        </div>
    </div>

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
            $("#header .navbar-nav li a:contains(HOME)").parent().addClass("active");
        });
    </script>
    <script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5'></script>
    <script type='text/javascript' src='js/jqBootstrapValidation.js'></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

    <script type="text/javascript" src="js/script.js"></script>
    <script>
        $("#loginForm").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST', // Type of request to be send, called as method
                url: "login-process.php", // Url to which the request is send
                data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                cache: false, // To unable request pages to be cached
                contentType: false, // The content type used when sending data to the server.
                processData: false, // To send DOMDocument or non processed data file it is set to false
                success: function(data, textStatus, jqXHR) { // A function to be called if request succeeds
                    console.log(textStatus + ": " + jqXHR.status);
                    location = "index.php";
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus + ": " + jqXHR.status + " ");
                    alert("Invalid password or email!");
                }
            });
        });
    </script>




</body>

<!-- Mirrored from 138.68.248.212/demo/prosoccer/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 22:26:17 GMT -->

</html>