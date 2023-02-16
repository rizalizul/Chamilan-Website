<?php
include "koneksi/config.php";


  $query = "SELECT * FROM produk WHere id = ". $_GET['id'];
  $res = mysqli_query($con,$query);
?>


<?php session_start(); 
	$_SESSION['position'] = "product.php";
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
	<style type="text/css">
		.desk1, .desk2 {
			width: 100%;
			word-break: break-all;
		}
	</style>
</head>

<body onload="startTime()">
	
	<?php
		include 'navbar.php';
	 ?>

	<!-- Start breadcrumb -->
   	<div class="breadcrumb">
   		<!-- container -->
			<div class="container">
				<ol class="item-breadcrumb">
					<li><a href="index.php">Beranda</a></li>
					<li>Produk</li>
				</ol>
			</div>
			<!-- /container -->
   	</div>
	<!-- End breadcrumb -->


	<!-- Start single-product -->
	<div class="single-product">
		<!-- Container -->
		<?php $result = mysqli_fetch_array($res) ?>  
		<div class="container">
			<!-- Row -->
			<div class="row">
				<div class="product-info">

					<div class="col-md-6">
						<div class="row">
							<ul class="featuredPostSlider col-md-10 col-sm-11 text-center">
								<li>
									<img class="gambar_produk_single" src="admin/assets/produk/<?php echo $result['gambar'] ?>" alt="">
								</li>
							</ul>
						</div>
			 		</div>
			 		<div class="col-md-6">
						<div class="product-meta clearfix" style="background-color: #f4f4f4;padding: 20px;">
							<h4 class="product-name">
								<a href="#" title="" class="desk1"><?php echo $result['nama_produk'] ?></a>
							</h4>

							<div class="product-price">
								<span class="amout">
									<span><span class="money">Rp <?php echo $result['harga'] ?></span></span>
								</span>
							</div><!-- /.product-price -->
							<div class="excerpt">
								<p class="desk1"><?php echo $result['deskripsi1'] ?></p>          
						    </div>

<?php
if(empty($_SESSION['username'])){
?>   
						    <div class="product-footer">
								<!-- <form action="#" class="add-to-cart" method="post" enctype="multipart/form-data">
									<input class="cart-qty-box" type="number" name="qtybutton" value="0">
									<input type="hidden" name="id" value="">
								</form> -->
								<!-- <a href="account.php" class="btn btn-primary" onclick="alert('Mohon Login terlebih dahulu')">Beli <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
							</div> -->


							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							  Beli <i class="fa fa-shopping-cart" aria-hidden="true"></i>
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        Mohon Login terlebih dahulu !
							      </div>
							      <div class="modal-footer">
							        <a href="account.php"><button type="button" class="btn btn-primary">Login</button></a>
							      </div>
							    </div>
							  </div>
							</div>
<?php 
}else{
?>
							<div class="product-footer">
								<!-- <form action="#" class="add-to-cart" method="post" enctype="multipart/form-data">
									<input class="cart-qty-box" type="number" name="qtybutton" value="0">
									<input type="hidden" name="id" value="">
								</form> -->
								<a href="cart.php?id=<?php echo $result['id']; ?>" class="btn btn-primary">Beli <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
							</div>

<?php
}
?>

						</div>
			 		</div>
			 	</div>
			 	<!-- product-tab-description -->
			 	<div class="col-md-12 product-description-tabs">
	                <ul class="nav">
					    <li class="active"><a data-toggle="tab" href="#tab_description">Deskripsi</a></li>
					</ul>
					<div class="tab-content">
					    <div id="tab_description" style="background-color: #f4f4f4; padding: 15px;" class="tab-pane fade in active">
					      	<p class="desk2"><?php echo $result['deskripsi2'] ?></p>
					      
					    </div>   
					</div>
			 	</div>
			 	<!--/product-tab-description -->
	 		</div>
	 	</div>
	</div>
</div>
	<!-- End single-product -->

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