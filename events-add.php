<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$admin = false;
if (isset($_SESSION["admin"]))
    $admin = true;

if ($admin) {
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"><!-- Datepicker -->


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
                        <div class="caption">Event</div>
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
                            <h2 class="lead">Add an event</h2>
                            <div class="border-style"></div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-white">
                        <form method="POST" id="eventForm">
                            <div class="bg-gray p-5 rounded">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="eventName" name="eventName" aria-describedby="eventNameHelp" placeholder="Name" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="eventStartDate" name="eventStartDate" aria-describedby="eventStartDateHelp" placeholder="Start Date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="eventEndDate" name="eventEndDate" aria-describedby="eventEndDateHelp" placeholder="End Date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="eventStartTime" name="eventStartTime" aria-describedby="eventStartTimeHelp" placeholder="Start Time">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="eventEndTime" name="eventEndTime" aria-describedby="eventEndTimeHelp" placeholder="End Time">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="eventLocation" name="eventLocation" aria-describedby="eventLocationHelp" list="locationList" placeholder="Location" maxlength="100">
                                            <!-- <datalist id="locationList">
                                                <option value="Online Webinar">Online Webinar</option>
                                            </datalist> -->
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="eventDescription" name="eventDescription" aria-describedby="eventDescriptionHelp" placeholder="Description" rows="4"></textarea>
                                            <small id="eventDescriptionHelp" class="form-text text-muted">Only first 400 characters will be visible on the card.</small>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="eventLink" name="eventLink" aria-describedby="eventLinkHelp" placeholder="Link to register" maxlength="255">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <button type="button" id="eventLinkTest" class="btn btn-block py-2 btn-default">Test link</button>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="eventWebsite" name="eventWebsite" aria-describedby="eventWebsiteHelp" placeholder="Website link" maxlength="255">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <img src="images/noimage.png" class="img-fluid" alt="uploaded image" id="eventImagePreview">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="eventImage" name="eventImage" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin: 2rem 0rem;">
                                        <button type="submit" id="submit" class="btn btn-block btn-default btn-lg">Submit</button>
                                    </div>
                                </div>
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
                $("#header .navbar-nav li a:contains(EVENTS)").parent().addClass("active");
            });
        </script>
        <script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5'></script>
        <script type='text/javascript' src='js/jqBootstrapValidation.js'></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

        <script type="text/javascript" src="js/script.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> <!-- Datepicker -->

        <script>
            $(function() {
                $("#eventStartDate").datepicker({
                    dateFormat: "dd MM yy"
                });
                $("#eventEndDate").datepicker({
                    dateFormat: "dd MM yy"
                });
            });
            $(function() {
                $('#eventStartTime').timepicker({
                    timeFormat: 'h:mm p',
                    interval: 30,
                    startTime: '11:00',
                    dynamic: false,
                    dropdown: true,
                    scrollbar: true,
                    change: changeTime
                });
                $('#eventEndTime').timepicker({
                    timeFormat: 'h:mm p',
                    interval: 30,
                    dynamic: false,
                    startTime: '12:00',
                    dropdown: true,
                    scrollbar: true,
                    change: changeTime
                });
                $("#eventEndDate,#eventStartDate").change(function() {

                    if ($("#eventStartDate").val() != "" && $("#eventEndDate").val() != "") {
                        let day = ["sun", "mon", "tue", "wed", "thu", "fri", "sat"];

                        let startDate = new Date($("#eventStartDate").val());
                        let endDate = new Date($("#eventEndDate").val());

                        let DifferenceInTime = endDate.getTime() - startDate.getTime();
                        let DifferenceInDays = Math.ceil(DifferenceInTime / (1000 * 3600 * 24.0)) + 1;

                        if (DifferenceInDays <= 0) {
                            $(this).val("");
                            alert("Start date can't be ahead of end date!");
                            return false;
                        }

                        if (DifferenceInDays >= 7)
                            $('.day').prop("disabled", false).parent().removeClass("disabled");
                        else {
                            $('.day').prop("disabled", true).parent().addClass("disabled");
                            for (let i = 0; i < DifferenceInDays; i++) {
                                $("#" + day[(startDate.getDay() + i) % 7]).prop("disabled", false).parent().removeClass("disabled");
                            }
                        }
                    }
                });

                function changeTime() {
                    if ($("#eventStartTime").val() != "" && $("#eventEndTime").val() != "") {

                        let startTime = new Date("04/16/2020 " + $("#eventStartTime").val());
                        let endTime = new Date("04/16/2020 " + $("#eventEndTime").val());

                        let DifferenceInTime = endTime.getTime() - startTime.getTime();

                        if (DifferenceInTime <= 0) {
                            $(this).val("");
                            alert("Start time can't be ahead of end time!");
                            return false;
                        }
                    }
                }
                $("#eventLinkTest").click(function() {
                    if ($("#eventLink").val() != "")
                        window.open($("#eventLink").val(), "_blank");
                });
                $("#eventForm").on('submit', (function(e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    $.ajax({
                        type: 'POST', // Type of request to be send, called as method
                        url: "events-add-process.php", // Url to which the request is send
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
                }));
                $("#eventImage").change(function() {
                    showpreview($(this)[0], $("#eventImagePreview"));
                });

                function showpreview(file, ref) {

                    if (file.files && file.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $(ref).prop('src', e.target.result);
                        };
                        reader.readAsDataURL(file.files[0]);
                    }
                }
            });
        </script>




    </body>

    <!-- Mirrored from 138.68.248.212/demo/prosoccer/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 22:26:17 GMT -->

    </html>
<?php
} else {
    header("Location:index.php");
}
?>