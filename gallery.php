<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$admin = false;
if (isset($_SESSION["admin"]))
	$admin = true;

include_once("connect-to-db.php");
$gallery = array();
$query = "select * from gallery order by occurence asc";
$table = mysqli_query($dbRef, $query);
while ($row = mysqli_fetch_array($table)) {
	$gallery[] =  $row;
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">



<head>
	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gallery || AFFG</title>
	<meta name="description" content "American Football Federation, Ghana">
	<meta name="keywords" content="Gallery, AFFG">
	<meta name="author" content="rudhisasmito.com">

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
					<div class="caption">GALLERY</div>
				</div>
			</div>
		</div>
	</div>


	<!-- GALLERY SECTION -->
	<div class="section singlepage">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">LATEST PHOTO</h2>
						<div class="border-style"></div>

					</div>
				</div>
			</div>
			<div class="row popup-gallery">
				<?php
				$imageId = 1;
				foreach ($gallery as $image) {
				?>

					<?php
					if ($admin) {
					?>
						<div class="col-xs-4 col-sm-3 col-md-3">
							<div class="w-item">
								<div class="modal-click" data-toggle="modal" data-target="#myModal<?php echo $imageId; ?>" title="Edit Gallery #<?php echo $imageId; ?>">
									<img src="images/<?php echo $image['image']; ?>" alt="" class="img-responsive" />
									<div class="project-info">
										<div class="project-icon">
											<span class="fa  fa-pencil-square-o
"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
					} else {
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
					}
					?>
					<!-- Modal -->
					<div class="modal fade" id="myModal<?php echo $imageId; ?>" role="dialog">
						<div class="modal-dialog">
							<form class="galleryChangeForm">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Gallery #<?php echo $imageId; ?></h4>
									</div>
									<div class="modal-body">
										<input type="text" id="id" name="id" value="<?php echo $image['id']; ?>" hidden>
										<div class="form-group">
											<label for="order">Order:</label>
											<input type="text" class="form-control" id="order" placeholder="Enter order of image" name="order" value="<?php echo $image['occurence']; ?>">
										</div>

									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-default delete">Delete</button>
										<button type="submit" class="btn btn-default update">Update</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				<?php
					$imageId++;
				}
				?>
			</div>
			<?php
			if ($admin) {
			?>
				<form id="galleryForm">
					<div class="loadmore">
						<label for="images" class="btn btn-default btn-lg">Upload Images</label>
						<input type="file" id="images" name="images[]" accept="image/*" multiple style="display: none;">
					</div>
				</form>
			<?php
			}
			?>
		</div>
	</div>


	<!-- VIDEO SECTION -->



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
			$("#header .navbar-nav li a:contains(GALLERY)").parent().addClass("active");
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
		<?php
		if ($admin) {
		?>
			$("#galleryForm").on('submit', (function(e) {
				e.preventDefault();
				var formData = new FormData(this);

				$.ajax({
					type: 'POST', // Type of request to be send, called as method
					url: "gallery-upload-process.php", // Url to which the request is send
					data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					cache: false, // To unable request pages to be cached
					contentType: false, // The content type used when sending data to the server.
					processData: false, // To send DOMDocument or non processed data file it is set to false
					success: function(data) { // A function to be called if request succeeds
						location.href = "gallery.php";
					},
					error: function(data) {
						alert("Error in uploading images, Please try again");
					}
				});
			}));
			$("#images").change(function() {
				$("#galleryForm").submit();
			});
			$(".update").click(function() {
				$(this).addClass("clicked");
			});
			$(".delete").click(function() {
				$(this).addClass("clicked");
			});
			$(".galleryChangeForm").submit(function(e) {
				e.preventDefault();
				if ($(this).find(".update").hasClass("clicked")) {
					$(this).find(".update").removeClass("clicked");
					var formData = new FormData(this);
					$.ajax({
						type: 'POST', // Type of request to be send, called as method
						url: "gallery-update-process.php", // Url to which the request is send
						data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
						cache: false, // To unable request pages to be cached
						contentType: false, // The content type used when sending data to the server.
						processData: false, // To send DOMDocument or non processed data file it is set to false
						success: function(data, textStatus, jqXHR) { // A function to be called if request succeeds
							console.log(textStatus + ": " + jqXHR.status);
							location.href = "gallery.php";
						},
						error: function(jqXHR, textStatus, errorThrown) {
							console.log(textStatus + ": " + jqXHR.status + " ");
							alert("Error Occured, Try Again!");
						}
					});
				} else if ($(this).find(".delete").hasClass("clicked")) {
					$(this).find(".delete").removeClass("clicked");
					var formData = new FormData(this);
					$.ajax({
						type: 'POST', // Type of request to be send, called as method
						url: "gallery-delete-process.php", // Url to which the request is send
						data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
						cache: false, // To unable request pages to be cached
						contentType: false, // The content type used when sending data to the server.
						processData: false, // To send DOMDocument or non processed data file it is set to false
						success: function(data, textStatus, jqXHR) { // A function to be called if request succeeds
							console.log(textStatus + ": " + jqXHR.status);
							location.href = "gallery.php";
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
	</script>


</body>

<!-- Mirrored from 138.68.248.212/demo/prosoccer/gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 22:26:26 GMT -->

</html>