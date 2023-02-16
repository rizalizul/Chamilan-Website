<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Chamilan</title>

	<!-- preloader CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/preloader.css"> 
	<!-- slider-pro CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/slider-pro.css">
	<!-- slick CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
	<!-- Main Style CSS CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- font-awesome CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
	<!-- Fonts --> 
	<link href='../../../../fonts.googleapis.com/css2260.css?family=Yantramanav:300,400,500,700,900' rel='stylesheet' type='text/css'>
	<script src="waktu.js"></script>
</head>

<body onload="startTime()">

	<?php
		include 'navbar.php';
	?>

	<!-- Start page-404  -->
		<div class="page-404 section-bg" style="background-image:url(assets/images/bg_404.jpg)">
			<!-- container -->
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-8">
						<div class="content-404">
							<h1 class="title_404">404</h1>
							<div class="error-description pt-30 pb-30">
								We are sorry. But the page you are looking for is not available.<br/>
								Perhaps you can try a new searching.
							</div>
							<a href="index.php" class="btn btn-primary back-home">Kembali ke Beranda <i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!-- /container -->
		</div>
	<!-- End page-404 -->

	<?php
		include 'footer.php';
	?>

	<!-- Back to top -->
		<div id="back-to-top"></div>
	<!--/Back to to -->

	<!-- Start Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- End Preloader -->

	<!-- Start all js here -->
	<!-- jquery js-->
  <script src="assets/js/jquery.min.js"></script>
	<!-- bootstrap js-->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- slick js-->
	<script src="assets/js/slick.min.js"></script>
	<!-- jquery-ui js-->
	<script src="assets/js/jquery-ui.min.js"></script>
	<!-- sliderPro js-->
	<script src="assets/js/jquery.sliderPro.min.js"></script>
	<!-- deal js-->
	<script src="assets/js/fastclick.min.js"></script>
	<script src="assets/js/timber.js"></script>
	<!-- Magnific js-->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- counter js-->
  <script src="assets/js/jquery.waypoints.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!-- main js-->
	<script src="assets/js/custom.js"></script>
	<!-- End all js here -->
</body>
</html>