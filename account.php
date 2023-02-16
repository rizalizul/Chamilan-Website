<?php session_start(); ?>
<!-- Login -->
<?php
include 'koneksi/config.php';

if($_SERVER['REQUEST_METHOD']== "POST"){
   $username = $_POST['user-name'];
   $password = $_POST['user-password'];
   $sql 	 = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
   $data = $con->query($sql) or die($con->error);
   if(mysqli_num_rows($data)>0){
		$row  = mysqli_fetch_object($data);
		$_SESSION['username'] = $row->username;
		$_SESSION['lvl'] = $row->lvl;

		if ($_SESSION['lvl'] == "1") {
			header("location:admin/dashboard.php");
		}else{
			if(!empty($_SESSION['position'])){
				echo $url;
					header("location:".$_SESSION['position']);
			}
			else{
				header("location:index.php");
			}
			
		}

   }else{
      echo '<div class="alert alert-danger">
				<div class="container-fluid">
					<div class="col-md-1">
						<i class="fa fa-exclamation-circle"></i>
					</div>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true"><i class="fa fa-times"></i></span>
					</button>
		  			<b>Info:</b> Akun tidak valid atau akun tidak ditemukan.
				</div>
			</div>';;
   }

}
?>
<!-- /Login -->

<!-- Daftar Akun -->
<?php
	include 'koneksi/config.php';

	if (isset($_POST['daftar'])) {
	$username 		= $_POST['username'];
	$password 		= $_POST['password'];
	$nama_lengkap 	= $_POST['nama_lengkap'];
    $email 			= $_POST['email'];

    $query = mysqli_query($con, "INSERT INTO user (id,username,password,nama_lengkap,email,lvl)
	VALUES (
	'',
    '$username',
    '$password',
    '$nama_lengkap',
    '$email',
    ''
    )");

    if ($query) {
        header("location:account.php?pesan=sukses");
    } else {
        echo "gagal";
    }
}
?>
<!-- /Daftar Akun -->

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
			<h1>Akun</h1>
			<ol class="item-breadcrumb">
				<li><a href="index.php">Beranda</a></li>
				<li>Akun</li>     
			</ol>
		</div>
		<!-- /container -->
   	</div>
	<!-- End breadcrumb -->


	<!-- Start account -->
	<div class="page-account">
		<!-- container -->
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="account-wrapper">
						<ul class="account-tab-list nav">
							<li class="active"><a data-toggle="tab" href="#login">Masuk</a></li>
							<li><a data-toggle="tab" href="#register">Daftar</a></li>
						</ul>

						<div class="tab-content">
							<div id="login" class="tab-pane fade in active">
								<div class="account-form-container login-form">
									<div class="account-form">

										<form action="account.php" method="post">
											<input type="text" name="user-name" placeholder="Username">
											<input type="password" name="user-password" placeholder="Kata Sandi">
											<div class="button-box">
												<div class="login-toggle-btn d-flex justify-content-between">
													<div class="remember d-flex">
														 <p></p>
													</div>
													<div class="forgot">
														<a href="#">Lupa Kata Sandi?</a>
													</div>
												</div>
												<button type="submit" name="masuk" class="btn btn-default btn-normal"><span>Masuk</span></button>
											</div>
										</form>
									</div>
								</div>
							</div>
		
							<div id="register" class="tab-pane fade">
								<div class="account-form-container register-form">
									<div class="account-form">

										<form action="#" method="post">
											<input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required="">
											<input type="text" name="username" placeholder="Username" required="">
											<input type="email" name="email" placeholder="Email" required="">
											<input type="password" name="password" placeholder="Kata Sandi" required="">
											
											<div class="button-box">
												<button type="submit" name="daftar" class="btn btn-default btn-normal"><span>Daftar</span></button>
											</div>
										</form> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- End account -->


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
