<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$admin = false;
if (isset($_SESSION["admin"]))
	$admin = true;

include_once("connect-to-db.php");

$athletes = array();
$query = "select * from athlete where approved = 1";
if ($admin)
	$query = "select * from athlete";
$table = mysqli_query($dbRef, $query);
while ($row = mysqli_fetch_array($table)) {
	$athletes[] =  $row;
}

?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from 138.68.248.212/demo/prosoccer/team.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 22:26:26 GMT -->

<head>
	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Team || AFFG</title>
	<meta name="description" content="Team|| American Football Federation Ghana">
	<meta name="keywords" content="American Football, Ghana Football">
	<meta name="author" content="spadeems.com">

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
					<div class="caption">TEAM</div>
				</div>
			</div>
		</div>
	</div>


	<!-- ABOUT SECTION -->
	<div class="section singlepage">
		<div class="container">

			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">TEAM</h2>
						<div class="border-style"></div>
						<div class="page-description">
							<p><strong>AFFG</strong> Alone we can do so little; together we can do so much.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row">

				<div class="col-sm-12 col-md-12">
					<div class="row">
						<div id="player-caro" class="owl-carousel owl-theme">
							<?php
							foreach ($athletes as $athlete) {
							?>
								<div class="item player-item">
									<div class="gambar">
										<?php
										if ($athlete['approved'] == 0) {
										?>
											<form action="team-approve-process.php" method="POST" style="position: fixed;z-index: 1001;top:5px;right:10px;">
												<input type="text" value="<?php echo $athlete['id']; ?>" name="id" hidden>
												<button type="submit" class="btn btn-link" name="approved" style="font-size: 2rem;" title="Approve Athlete" value="1">
													<i class="fa fa-check"></i>
												</button>
											</form>
										<?php
										}
										?>
										<img src="images/<?php echo $athlete['picture']; ?>" alt="" class="img-responsive">
									</div>
									<div class="item-body">
										<div class="name">
											<?php echo strtoupper($athlete['firstname'] . " " . $athlete['lastname']); ?>
										</div>
										<div class="code">
											<?php echo $athlete['id']; ?>
										</div>
										<!-- <div class="position">
											<span class="cf">CF</span> Forwarder
										</div> -->
									</div>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<div class="player-pagination pagination">
					</div>
				</div>
			</div>
			<div class="loadmore">
				<!-- Register button-->
				<a href="register.php" target="_blank">Register Here</a>
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
			$("#header .navbar-nav li a:contains(TEAM)").parent().addClass("active");
		});
	</script>
	<script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5'></script>
	<script type='text/javascript' src='js/jqBootstrapValidation.js'></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

	<script type="text/javascript" src="js/script.js"></script>



</body>

<!-- Mirrored from 138.68.248.212/demo/prosoccer/team.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 22:26:26 GMT -->

</html>