<?php
include "koneksi/config.php";
  $query = "SELECT * FROM produk";
  $res = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chamilan</title>

	<link rel="shortcut icon" href="assets/images/logo_icon.png">
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

	
	<!-- Start breadcrumb -->
   	<div class="breadcrumb">
   		<!-- container -->
		<div class="container">
			<h1>Produk</h1>
			<ol class="item-breadcrumb">
				<li><a href="index.html">Beranda</a></li>
				<li>Produk</li>     
			</ol>
		</div>
		<!-- /container -->
   	</div>
	<!-- End breadcrumb -->


	<!-- Start archive-product -->
	<div class="archive-product">
		<!-- Container -->
		<div class="container">


			
			
			<!-- tab-content -->
			<div class="tab-content">
				<div id="grid-view" class="tab-pane fade in active">
					<div class="product products-grid">
						<div class="row row-products"> 
						<?php while($result = mysqli_fetch_array($res)) { ?>  
				 			<div class="col-md-4 col-sm-6">
				 				<div class="product-block" data-publish-date="">
									<div class="product-image product_1">
										<div class="product-thumbnail">
											<a href="product_single.php?id=<?php echo $result['id']; ?>" title="">
												<img class="product-featured-image" style="width: 357px; height: 357px;" src="admin/assets/produk/<?php echo $result['gambar'] ?>" alt="">
											</a>
										</div>
									</div>
									<div class="product-meta">
										<h4 class="product-name">
											<a href="product_single.php?id=<?php echo $result['id']; ?>" title="">
												<?php echo $result['nama_produk'];?>
											</a>
										</h4>
										<div class="product-price">
											<span class="amout">
												<span class="money">Rp <?php echo $result['harga'];?></span>
											</span>
											<a href="product_single.php?id=<?php echo $result['id']; ?>" class="add_to_cart_button">Beli</a>
										</div>
									</div><!-- /.product-meta -->
								</div>
				 			</div>
				 			<?php } ?>
				 		</div>
				 	</div>
				</div>
			</div>
			<!-- /tab-content -->
			
			<!-- pagination -->
			<!-- <nav class="pagination clearfix">
				<ul class="page-numbers">
					<li><a class="prev page-numbers" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
					<li><span class="page-numbers current">1</span></li>
					<li><a class="page-numbers" href="#">2</a></li>
					<li><a class="page-numbers" href="#">3</a></li>
					<li><a class="page-numbers" href="#">4</a></li>
					<li><a class="page-numbers" href="#">5</a></li>
					<li><a class="next page-numbers" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				</ul>
			</nav> -->
			<!-- /pagination -->
	 	</div>
	</div>
	<!-- End archive-product -->
	

 <?php include'footer.php' ?>

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

	<!-- Waktu -->
	<script>
			function startTime() {
				var today = new Date();
				var h = today.getHours();
				var m = today.getMinutes();
				var s = today.getSeconds();
				m = checkTime(m);
				s = checkTime(s);
				document.getElementById('waktu').innerHTML =
				h + ":" + m + ":" + s;
				var t = setTimeout(startTime, 500);
			}
			function checkTime(i) {
				if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
				return i;
			}
		</script>
		<!-- End Waktu -->

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