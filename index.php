<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
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
	<!--magnific-popup CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
	<!-- Bootstrap -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css"> -->
	<!-- Fonts -->
	<link href='../../../../fonts.googleapis.com/css2260.css?family=Yantramanav:300,400,500,700,900' rel='stylesheet' type='text/css'>
	<script src="waktu.js"></script>
</head>
<body onload="startTime()">

	<!-- Start header -->
		<div>
			<!-- header-desktop -->
			<header class="header home2">
				<!-- top-bar -->
				<div class="topbar">
					<div class="container">
						<div class="top-bar">
							<div class="top-bar__left pull">
								<p style="margin-bottom: 0px;">Tempat Beli Makanan Ringan Terpercaya</p>
							</div>
							<div class="top-bar__right pull">

<?php
if(empty($_SESSION['username'])){
?>

								<div class="top-bar-account">
									<a class="top-bar__item" href="account.php">
										<i class="fa fa-lock" aria-hidden="true"></i>
										Masuk
									</a>
								</div>
								<div class="top-bar-register">
									<a class="top-bar__item" href="account.php">
										<i class="fa fa-user-o" aria-hidden="true"></i>
										Daftar
									</a>
								</div>

<?php
}else{
	?>
								<div class="top-bar-account">
									<a class="top-bar__item" href="#">
										<i class="fa fa-user-o" aria-hidden="true"></i>
										<?php echo $_SESSION['username'] ?>
									</a>
								</div>
								<div class="top-bar-register">
									<a class="top-bar__item" href="logout.php">
										<i class="fa fa-sign-out" aria-hidden="true"></i>
										Logout
									</a>
								</div>

<?php } ?>

							</div>
						</div>
					</div>
					<!-- /Container -->
				</div>
				<!-- /top-bar -->

				<!-- header-main -->
				<div class="header-main pb-30">
					<div class="container">
						<nav id="nav" class="navbar ml-10 mr-20">
							<div class="nav-collapse">
								<span></span>
							</div>
							<div class="navbar-header">
								<!-- Logo -->
								<div class="navbar-brand">
									<a class="logo" href="index.php"><img src="assets/images/logo_home.png" alt=""></a>
								</div>
								<!-- /Logo -->
							</div>
							<!--  Main navigation  -->

							<div class="otf-flex-item"></div>

							<ul class="main-nav nav navbar-nav navbar-right">
								<li class="dropdown active">
									<a href="index.php">Beranda</a>
								</li>
								<li class="dropdown">
									<a href="product.php">Produk</a>
									<ul class="dropdown-menu">
										<li><a href="productmanis.php">Produk Manis</a></li>
										<li><a href="productasin.php">Produk Asin</a></li>
										<li><a href="productpedas.php">Produk Pedas</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="about.php">Tentang</a></li>
							</ul>
							<!-- /Main navigation -->
							<div class="otf-flex-item"></div>
							<div class="site-header -icon">
								<div id="waktu" style="font-size:18px; font-weight:bold; color: #555;"></div>
							</div>
						</nav>
					</div>
				</div>
				<!-- /header-main -->
			</header>
			<!--/header-desktop -->

			<!-- header-mobile -->
			<div class="header-mobile home2">
				<nav class="navbar">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
						aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- logo -->
						<div class="navbar-brand">
							<a class="logo" href="index.php"><img src="assets/images/logo.png" alt=""> </a>
						</div>
						<!-- logo -->
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="index.php" role="button" aria-haspopup="true"
								aria-expanded="false">Beranda</a>
							</li>
							<li class="dropdown">
								<a href="product.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Produk <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="product.php">Produk Manis</a></li>
									<li><a href="product.php">Produk Asin</a></li>
									<li><a href="product.php">Produk Pedas</a></li>
								</ul>
							</li>
							<li><a href="about.php">Tentang</a></li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="footer-mobile-bar">
				<ul class="columns-2">
					<li class="my-account">
						<a class="my-accrount-footer" href="account.php">
							<i class="fa fa-user-o" aria-hidden="true"></i>
						</a>
					</li>
					<li class="cart">
						<a class="footer-cart-contents" href="product.php" title="View your shopping cart">
							<img src="assets/images/counter/snack_icon.png" alt="" style="width:50px;">
							<!-- <span class="count">1</span> -->
						</a>
					</li>
				</ul>
			</div>
			<!--/header-mobile -->
		</div>
	<!-- End header -->

	<!-- Start slider -->
		<section class="section-main-slider">

			<div class="main-slider my-slider slider-pro skin2" id="my-slider-1" data-slider-width="100%" data-slider-height="925">

				<div class="sp-slides text-white">
					<!-- Slide 1 -->
					<div class="sp-slide section-bg" style="background-image:url(assets/images/bg-man-eat.jpg); width: 1350px; height: 925px;">
						<div class="container">
							<h2 class="sp-layer main-slider__title" data-horizontal="0" data-vertical="300" data-show-transition="up"
							data-hide-transition="left" data-show-duration="800" data-show-delay="800" data-hide-delay="800">
								Tempat Beli Chamilan<br>
								<div class="font-bold">Terpercaya</div>
							</h2>
							<div class="sp-layer main-slider__text" data-horizontal="0" data-vertical="500" data-show-transition="up"
							data-hide-transition="left" data-show-duration="800" data-show-delay="1200" data-hide-delay="1200">
								<p>
									Produk yang dijual di Chamilan dijamin original buatan Indonesia,<br>
									Dengan berbagai jenis cemilan mulai dari rasa Asin, Pedas, dan Manis
								</p>
								<div class="main-slider__btn-group">
									<a class="btn btn-features btn-primary mt-60" href="product.php">Beli Sekarang<i class="fa fa-long-arrow-right"
										aria-hidden="true"></i>
									</a>
								</div>
							</div>
							<span class="sp-layer main-slider__img" data-horizontal="600" data-vertical="120" data-width="45%"
							data-show-transition="up" data-hide-transition="left" data-show-duration="800" data-show-delay="400"
							data-hide-delay="400">
								<img class="img-responsive" src="" height="612" width="759" alt="">
							</span>

						</div>
					</div>
					<!-- end sp-slide -->

					<!-- Slide 2 -->
					<div class="sp-slide section-bg" style="background-image:url(assets/images/bg-man-eat.jpg)">
						<div class="container">

							<h2 class="sp-layer main-slider__title" data-horizontal="0" data-vertical="300" data-show-transition="up"
							data-hide-transition="left" data-show-duration="800" data-show-delay="800" data-hide-delay="800">
								Tempat Beli Chamilan<br>
								<div class="font-bold">Terenak</div>
							</h2>

							<div class="sp-layer main-slider__text" data-horizontal="0" data-vertical="500" data-show-transition="up"
							data-hide-transition="left" data-show-duration="800" data-show-delay="1200" data-hide-delay="1200">
								<p>
									Produk yang dijual di Chamilan dijamin original buatan Indonesia,<br>
									Dengan berbagai jenis cemilan mulai dari rasa Asin, Pedas, dan Manis
								</p>
								<div class="main-slider__btn-group">
									<a class="btn btn-features btn-primary mt-60" href="product.php">Beli Sekarang<i class="fa fa-long-arrow-right"
										aria-hidden="true"></i>
									</a>
								</div>
							</div>
							<span class="sp-layer main-slider__img" data-horizontal="600" data-vertical="120" data-width="45%"
							data-show-transition="up" data-hide-transition="left" data-show-duration="800" data-show-delay="400"
							data-hide-delay="400">
								<img class="img-responsive" src="" height="612" width="759" alt="">
							</span>

						</div>
					</div>
					<!-- end sp-slide -->
				</div>

				<!-- end sp-slides -->
			</div>
			<!-- end main-slider -->

		</section>
	<!-- End slider -->


	<!-- Start Kelebihan -->
		<section class="features feature-icon-absolute clearfix text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 features_content">
						<div class="features_list">
							<div class="features-images">
								<img src="assets/images/halal-icon.png" alt="">
							</div>
							<div class="features-description">
								<h4>Halal</h4>
								<p>Cemilan yang dijamin kehalalan nya.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 features_content">
						<div class="features_list">
							<div class="features-images">
								<img src="assets/images/flavour-icon.png" alt="Beragam Rasa">
							</div>
							<div class="features-description">
								<h4>Beragam Rasa</h4>
								<p>Tersedia beragam rasa cemilan mulai dari rasa asin, pedas, dan manis.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 features_content">
						<div class="features_list">
							<div class="features-images">
								<img src="assets/images/pengawet-icon.png" alt="Tanpa Pengawet">
							</div>
							<div class="features-description">
								<h4>Tanpa Pengawet</h4>
								<p>Tidak menggunakan pengawet buatan yang berbahaya bagi tubuh.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 features_content">
						<div class="features_list">
							<div class="features-images">
								<img src="assets/images/pewarna-icon.png" alt="Tanpa Pewarna">
							</div>
							<div class="features-description">
								<h4>Tanpa Pewarna</h4>
								<p>Tidak menggunakan zat pewarna pada cemilan.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End Kelebihan  -->

	
	<!-- Start Kenapa Memilih Kami -->
		<section class="features skin1 feature-counter section-bg clearfix" style="background-image:url(assets/images/snack5.png)">
			<div class="container">
				<div class="features-heading pb-50">
					<h2 class="title-memilih">Kenapa Memilih Kami</h2>
					<p class="features-heading__description">
						Chamilan adalah tempat beli Cemilan dengan berbagai varian rasa. Pembeli tak perlu repot  lagi
						<br />
						mencari cemilan kesukaan di toko-toko, Hanya tinggal mencari cemilan kesukaan di Chamilan
						<br />Lalu pesan kemudian pihak Chamilan akan mengantarkan cemilan kesukaan ke rumah.
					</p>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="features_list">
							<div class="features-images">
								<img src="assets/images/counter/snack_icon_white.png" alt="">
							</div>
							<div class="features-description">
								<span class="counter">15,034</span>
								<p id="name_features">
									Produk Cemilan
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="features_list">
							<div class="features-images">
								<img src="assets/images/counter/user_icon_white.png" alt="">
							</div>
							<div class="features-description">
								<span class="counter">785</span>
								<p id="name_features">
									Pelanggan
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End Kenapa Memilih Kami -->


	<!-- Start product -->
		<section class="products pt-60 pb-100">
			<div class="container">
	
				<div class="row">
					<div class="col-md-12  pt-40">
						<div class="features-heading skin2">
							<h2 class="features-heading__title">Produk Terlaris</h2>
						</div>
						<ul class="columns-4 text-center product-skin2">
							<li class="item-product">
								<div class="product-block">
									<div class="product-image ">
										<div class="product-thumbnail">
											<a href="product_single.php" title="">
												<img class="product-featured-image" src="assets/images/product/produk_pedas_1.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="product-meta">
										<h4 class="product-name">
											<a href="product_single.php" title="">Makaroni Pedas</a>
										</h4>
										<div class="product-price">
											<span class="amout">
												<span class="money">Rp 7.000</span>
											</span>
											<a href="product_single.php" class="add_to_cart_button">Beli</a>
										</div>
									</div>
								</div>
							</li>
							<li class="item-product">
								<div class="product-block">
									<div class="product-image ">
										<div class="product-thumbnail">
											<a href="product_single.php" title="">
												<img class="product-featured-image" src="assets/images/product/produk_manis_1.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="product-meta">
										<h4 class="product-name">
											<a href="product_single.php" title="">Produk 2</a>
										</h4>
	
										<div class="product-price">
											<span class="amout">
												<span class="money">Rp 10.000</span>
											</span>
											<a href="product_single.php" class="add_to_cart_button">Beli</a>
										</div>
									</div>
								</div>
							</li>
							<li class="item-product">
								<div class="product-block">
									<div class="product-image ">
										<div class="product-thumbnail">
											<a href="product_single.php" title="">
												<img class="product-featured-image" src="assets/images/product/produk_asin_1.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="product-meta">
										<h4 class="product-name">
											<a href="product_single.php" title="">Produk 3</a>
										</h4>
	
										<div class="product-price">
											<span class="amout">
												<span class="money">Rp 12.000</span>
											</span>
											<a href="product_single.php" class="add_to_cart_button">Beli</a>
										</div>
									</div>
								</div>
							</li>
							<li class="item-product">
								<div class="product-block">
									<div class="product-image ">
										<div class="product-thumbnail">
											<a href="product_single.php" title="">
												<img class="product-featured-image" src="assets/images/product/produk_pedas_2.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="product-meta">
										<h4 class="product-name">
											<a href="product_single.php" title="">Basreng</a>
										</h4>
	
										<div class="product-price">
											<span class="amout">
												<span class="money" data-currency-usd="$3.99">Rp 4.000</span>
											</span>
											<a href="product_single.php" class="add_to_cart_button">Beli</a>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!-- End product -->

	<?php
		include 'footer.php';
	?>

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!--/Back to to -->
		
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