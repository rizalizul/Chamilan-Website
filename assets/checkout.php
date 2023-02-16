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
</head>
<body>

	<?php
		include 'navbar.php';
	 ?>

	<!-- Start breadcrumb -->
	<div class="breadcrumb">
	<!-- container -->
		<div class="container">
			<h1>Pembayaran</h1>
			<ol class="item-breadcrumb">
				<li><a href="index.html">Beranda</a></li>
				<li>Pembayaran</li>
			</ol>
		</div>
	<!-- /container -->
	</div>
	<!-- End breadcrumb -->

	<!-- Start checkout-form-->
	<div class="checkout-form">
		<!-- container -->
		<div class="container">
			<!-- Row -->
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <form action="#">
                        <h3>Detail</h3>
                        <div class="row">
                            <div class="col-lg-6 mb-30">
                                <label for="b_f_name">Nama Depan<span>*</span></label>
                                <input id="b_f_name" type="text">    
                            </div>
                            <div class="col-lg-6 mb-30">
                                <label for="b_name">Nama Belakang<span>*</span></label>
                                <input id="b_name" type="text"> 
							</div>
							<div class="col-md-12 mb-30">
								<label for="b_email">Alamat Email<span>*</span></label>
								<input id="b_email" type="text">    
							</div> 
                            <div class="col-md-12 mb-30">
                                <label>Alamat<span>*</span></label>
                                <input placeholder="Alamat Penerima" type="text">     
                            </div> 
                            <div class="col-md-12 mb-30">
                                <label for="b_city">Kota<span>*</span></label>
                                <input id="b_city" placeholder="Nama Kota" type="text">     
                            </div>
                             <div class="col-lg-6 mb-30">
                                <label for="b_zip">Kode Pos<span>*</span></label>
                                <input placeholder="Postcode / Zip" id="b_zip" type="text">    
                            </div> 
                            
                             <div class="col-lg-6 mb-30">
                                <label>No Telepon<span>*</span></label>
                                <input placeholder="08xxxxxxxxxx" type="text">    
                            </div> 
                            <div class="col-md-12">
                                <div class="order-notes">
                                     <label for="order_note">Catatan</label>
                                    <textarea id="order_note" placeholder="Catatan Pembeli"></textarea>
                                </div>    
                            </div>     	    	    	    	    	    	    
                        </div>
                    </form>    
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="order-wrapper">
                        <h3>Order</h3>
                        <div class="order-table table-responsive mb-30">

                        	<?php $result = mysqli_fetch_array($res) ?> 
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Produk</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-name"><?php echo $result['nama_produk'] ?><strong> × 1</strong></td>
                                        <td class="amount">Rp <?php echo $result['harga'] ?></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total Belanjaan</th>
                                        <td>Rp <?php echo $result['harga'] ?></td>
									</tr>
									<tr>
										<th>Ongkir</th>
										<td>Rp. 0</td>
									</tr>
                                    <tr>
                                        <th>Total Order</th>
                                        <td><strong>Rp <?php echo $result['harga'] ?></strong></td>
                                    </tr>
                                </tfoot>
                            </table>    
                        </div>
                        <div class="payment-method">
                            <div class="order-button">
                                <button type="submit" class="btn-primary">Order</button> 
                            </div>    
                        </div>    
                    </div>  
                </div>
            </div> 
            <!-- Row -->
        </div>
		<!-- /container -->
	</div>
	<!-- End checkout-form -->


	<!-- Start footer -->
	<footer class="site-footer site-footer-2 clearfix">
		<div class="site-footer__main">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 footer-block">
						<img src="assets/images/logo.png" alt="">
						<p class="address pt-30">
							<table>
								<tr>
									<td>Kantor</td>
									<td>: Jln. Kliningan No.6</td>
								</tr>
								<tr>
									<td>Telepon </td>
									<td>: +62 89607515020</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>: info@chamilan.com</td>
								</tr>
							</table>
						</p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 footer-block footer-1">
						<h3 class="widget-title">Quick Links</h3>
						<ul>
							<li><a href="about.html">Tentang</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12 footer-block footer-3">
						<h3 class="widget-title">JAM KERJA</h3>
						<ul>
							<li>
								<span>Senin </span>
								<span>: 6.00 - 21.00 </span>
							</li>
							<li>
								<span>Selasa </span>
								<span>: 6.00 - 21.00 </span>
							</li>
							<li>
								<span>Rabu </span>
								<span>: 6.00 - 21.00 </span>
							</li>
							<li>
								<span>Kamis </span>
								<span>: 6.00 - 21.00 </span>
							</li>
							<li>
								<span>Jum'at </span>
								<span>: 6.00 - 21.00 </span>
							</li>
							<li>
								<span>Sabtu </span>
								<span>: 7.00 - 19.00 </span>
							</li>
							<li>
								<span>Minggu &nbsp;</span>
								<span>: 7.00 - 17.00</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="site-footer__copyright">
			<div class="container">
				<div class="copyright_container">
					<div class="col-md-4 col-sm-6">
						<ul class="social">
							<li>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-google"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="copyright col-md-4 col-sm-6">
						© 2019. All rights reserved. <a href="#">Chamilan</a>
					</div>
					<div class="payment col-md-4 col-sm-12">
						<img src="assets/images/payment.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer -->

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