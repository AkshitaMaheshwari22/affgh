<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

include_once("connect-to-db.php");
$gallery = array();
$query = "select * from gallery order by occurence asc limit 8";
$table = mysqli_query($dbRef, $query);
while ($row = mysqli_fetch_array($table)) {
	$gallery[] =  $row;
}

$athletes = array();
$query = "select * from athlete where approved = 1 limit 4";
$table = mysqli_query($dbRef, $query);
while ($row = mysqli_fetch_array($table)) {
	$athletes[] =  $row;
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
	<div class="section banner">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>

			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/slide-1.jpg" alt="...">
					<div class="carousel-caption">
						<div class="container">
							<div class="wrap-caption">
								<div class="caption-heading">American Football Federation Ghana</div>
								<div class="caption-desc">The American Football Federation Ghana is the legal and sole body responsible for developing, regulating and promoting the American football sports discipline in Ghana. </div>
							</div>
						</div>
					</div>
				</div>



			</div>

			<!-- Controls -->
			<!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="fa fa-chevron-left" ></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="fa fa-chevron-right" ></span>
				<span class="sr-only">Next</span>
			</a>-->
		</div>

		<!-- END CAROUSEL -->

	</div>


	<!-- MATCH FACTS -->
	<div class="section stat-facts">
		<div class="bg-overlay">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-10 col-md-offset-1">

						<h1 style="text-align: center; font-size: 40px;">Vision</h1><br><br>
						<strong>
							<h2 style="text-align: justify-all">To be a leading federation in Ghana that plays a vital role in unearthing and developing talents.</h2>
						</strong><br><br>
						<strong>
							<h2 style="text-align: justify-all">As one of the Core Functions of the Ministry of Youth and Sports (MoYS) says: Promote and encourage the organisation and development of mass participation in Amateur and professional sports in Ghana, The American Football Federation Ghana is laying all its emphasis in creating solidified foundations and avenues that will enhance induction of interests in Ghanaian youth as well as discovery and development of talents regardless of economic, social or religious statuses. The Federation by coordinating with its representatives in various regions will have a direct link with youth masses and thus increasing participation in various events of American Football across the entire country. </h2>
						</strong>
					</div>
				</div>




			</div>
		</div>
	</div>
	</div>


	<!-- ABOUT SECTION -->
	<div class="section about">
		<div class="container">

			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">ABOUT FC</h2>
						<div class="border-style"></div>
					</div>
				</div>
			</div>

			<div class="row">

				<div class="col-sm-12 col-md-4">
					<!--<div id="shop-caro" class="owl-carousel owl-theme">
						<div class="item shop-item">
							<div class="img">
								<img src="images/shop-item-1.jpg" alt="" class="img-responsive" />
							</div>
							<div class="description">
								<div class="collection-name">
									<strong>NEW</strong> COLLECTIONS
									<div class="category">T-shirts</div>
								</div>
								<div class="collection-callout">
									<a href="#" title=""><span class="fa fa-facebook"></span>SHOP NOW</a>
								</div>
							</div>
						</div>
						<div class="item shop-item">
							<div class="img">
								<img src="images/shop-item-2.jpg" alt="" class="img-responsive" />
							</div>
							<div class="description">
								<div class="collection-name">
									<strong>NEW</strong> COLLECTIONS
									<div class="category">Pin</div>
								</div>
								<div class="collection-callout">
									<a href="#" title=""><span class="fa fa-facebook"></span>SHOP NOW</a>
								</div>
							</div>
						</div>

					</div>-->

				</div>



			</div>
		</div>
	</div>


	<!-- VIDEO SECTION -->
	<div class="section video bg-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">LATEST VIDEO</h2>
						<div class="border-style"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-8 col-md-offset-2">
					<!-- 16:9 aspect ratio -->
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="http://www.youtube.com/embed/hhlTKVcscXs"></iframe>
					</div>

				</div>

			</div>

		</div>
	</div>


	<!-- OUR PLAYER SECTION -->
	<div class="section player">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">KNOW OUR ATHLETES</h2>
						<div class="border-style"></div>
					</div>
				</div>
			</div>

			<div class="row">
				<div id="player-caro" class="owl-carousel owl-theme">
					<?php
					foreach ($athletes as $athlete) {
					?>

						<div class="item player-item">
							<div class="gambar">
								<img src="images/<?php echo $athlete['picture']; ?>" alt="" class="img-responsive">
							</div>
							<div class="item-body">
								<div class="name">
									<?php echo strtoupper($athlete['firstname'] . " " . $athlete['lastname']); ?>
								</div>
								<div class="code">
									<?php echo strtoupper($athlete['id']) ?>
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
			<div class="loadmore">
				<!-- Register button-->
				<a href="team.php" target="_blank">View Team</a>
				<a href="register.php" target="_blank">Register Here</a>
			</div>
		</div>
	</div>

	<!-- GALLERY SECTION -->
	<div class="section gallery bg-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">GALLERY</h2>
						<div class="border-style"></div>
					</div>
				</div>
			</div>
			<div class="row popup-gallery">
				<?php
				$imageId = 1;
				foreach ($gallery as $image) {
				?>
					<div class="col-xs-4 col-sm-3 col-md-3">
						<div class="w-item">
							<a href="images/<?php echo $image['image']; ?>" title="Gallery #<?php echo $imageId; ?>">
								<img src="images/<?php echo $image['image']; ?>" alt="" class="img-responsive" />
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php
					$imageId++;
				}
				?>
			</div>
		</div>

		<div class="loadmore">
			<a href="gallery.php" title="">See More</a>
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




</body>

<!-- Mirrored from 138.68.248.212/demo/prosoccer/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 22:26:17 GMT -->

</html>