<?php
include "koneksi/config.php";


  $query = "SELECT * FROM produk WHere id = ". $_GET['id'];
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
			<h1>Pesanan</h1>
			<ol class="item-breadcrumb">
	            <li><a href="index.php">Beranda</a></li>
	            <li>Pesanan</li>
            </ol>
		</div>
		<!-- /container -->
   	</div>
    <!-- End breadcrumb -->


	<!-- Start cart -->
	<div class="page-cart">
		<!-- container -->
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<form class="cart-form table_responsive" action="#" method="post">
						<table class="shop_table table cart cart-form__contents">
							<thead>
								<tr>
									<th class="product-thumbnail">Produk</th>
									<th class="product-name">Nama Produk</th>
									<th class="product-price">Harga</th>
									<th class="product-quantity">Kuantitas</th>
								</tr>
							</thead>
							<tbody>
								<?php $result = mysqli_fetch_array($res) ?> 
								<tr class="cart-form__cart-item cart_item">
									<td class="product-thumbnail">
										<a href="#">
										<!-- <a href="product_single.php?id=<?php echo $result['id']; ?>"> -->
											<img src="admin/assets/produk/<?php echo $result['gambar'] ?>" alt="">
										</a>
									</td>
									<td class="product-name" data-title="Product">
										<p><?php echo $result['nama_produk'] ?></p>	
									</td>
									<td class="product-price" data-title="Price">
										<span class="price-amount amount"><?php echo $result['harga'] ?></span>			
									</td>
									<td class="product-quantity" data-title="Quantity">
										<div class="quantity">
											<input type="number" class="input-text qty text" step="1" min="1" value="1" title="Qty" size="4">
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="6" class="actions">
										<div class="clearfix">
											<div class="pull-right"> 
												<input type="submit" class="btn btn-primary" name="update_cart" value="Perbaharui Pesanan"> 
												<input type="hidden" id="_wpnonce" name="_wpnonce" value="#"><input type="hidden" name="_wp_http_referer" value="#">
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
				<div class="col-md-4">
					<div class="grand-totall">
                        <div class="title-wrap">
                            <h4 class="cart-bottom-title section-bg-gary-cart">Total Belanjaan</h4>
                        </div>
                        <h4 class="grand-totall-title">Total : <span>Rp. 12.000</span></h4>
                        <a href="checkout.php?id=<?php echo $result['id']; ?>" class="btn btn-primary checkout-button">Proses ke Pembayaran</a>
                    </div>
				</div>
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- End cart -->

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