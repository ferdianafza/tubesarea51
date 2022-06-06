 <?php   	
session_start();

    	if($_SESSION["login"] == false) {
    		header("Location: login.php");
    		exit;
    	} else {
    		$username = $_SESSION["username"];
    		$email = $_SESSION["email"];
    		$id = $_SESSION["id"];
    	}
require ("function.php");
if ( isset($_POST["bayar"])) {
  
  if (beli_billing($_POST) > 0 ) {
    echo "<script>
            alert('Pembelian Berhasil');
          </script>" ;
  } else {

    echo mysqli_error($conn);
  }
}

 ?> 
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<meta name="yandex-verification" content="7c4a6f41b54b9d11" />
		<meta name="google-site-verification" content="BGVkVoRR2VewZHK1GRYs92VDsHaQMUdOKdU70sh3vfQ" />
		<meta name="robots" content="index,follow" />
		<meta name="copyright" content="soupbuahtaza" />
		<meta property="og:site_name" content="https://soupbuahtaza.herokuapp.com/" />
		<meta property="og:image" content="https://soupbuahtaza.herokuapp.com/img/og-home.jpg" />
		<meta property="og:url" content="https://soupbuahtaza.herokuapp.com/" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="soupbuahtaza | Healthy Foods & Drinks" />
		<meta property="og:description" content="Soup Buah Taza is healthy foods and drinks restaurant. We have been serving our customer with our products since 2015." />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@soupbuahtaza" />
		<meta content="" property="fb:app_id" />
		<meta content="374667376063611" property="fb:pages" />
		<meta content="1365364024" property="fb:admins" />
		<!-- Author Meta -->
		<meta name="author" content="admin, admin@soupbuahtaza.com">
		<!-- Meta Description -->
		<meta name="description" content="Healthy Foods & Drinks">
		<!-- Meta Keyword -->
		<meta name="keywords" content="healthy drinks, healthy foods, soup buah taza, juice buah taza, healthy fruits">
		<script type="text/javascript" src="assets/jquery-3.6.0.min.js" ></script>
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Game Play & Relax</title>

		<!-- icons -->
		<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="img/favicons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="img/favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
		<link rel="manifest" href="img/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="img/favicons/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<script src="https://kit.fontawesome.com/d1c122202a.js" crossorigin="anonymous"></script>
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		<style>
			/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
		</style>

		</head>
		<body style="background-color: #0c0c0e;">

			  <header id="header" id="home">
				<div class="header-top">
		  			<div class="container">
				  		<div class="row justify-content-end">
				  			<div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
				  				<ul>
				  					<li>
				  						Mon-Fri: 11am to 11pm
				  					</li>
				  					<li>
				  						Sat-Sun: 11am to 12pm
				  					</li>
				  					<li>
				  						<a href="#">Hallo <?php  echo $username; ?></a>
				  					</li>
				  				</ul>
				  			</div>
				  		</div>
		  			</div>
				</div>
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="biling.php">Biling</a></li>
				          <li><a href="about.php">About</a></li>
				          <li class="menu-has-children"><a href="">Akun</a>
				            <ul>
				              <li><a href="logout.php">Keluar</a></li>
				              <!-- <li><a href="elements.html">Elements</a></li> -->
				            </ul>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			

			<div class="slideshow-container">

			<div class="mySlides fade">
			  <img class="image-banner" src="img/banner-pubg.jpg">
			  <div class="text"> </div>
			</div>

			<div class="mySlides fade">
			  <img class="image-banner" src="img/banner-cod.jpg">
			  <div class="text"> </div>
			</div>

			<div class="mySlides fade">
			  <img class="image-banner" src="img/banner-ros.jpg">
			  <div class="text"> </div>
			</div>

			<div class="mySlides fade">
			  <img class="image-banner" src="img/banner-gtav.jpg">
			  <div class="text"> </div>
			</div>

			</div>
			<br>

			<div class="down-banner">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span>
			</div>

			<!-- End banner Area -->

			<!-- Start menu Area -->
			<section class="menu-area section-gap" id="healthy-drinks list-billing">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Tentang Kami</h1>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">

									<img src="img/ferdian.jpeg" style="border-radius: 50%; width: 70px; height: 70px;">
								</div>
								<h4>Ferdian Afza Hidayat</h4>
								<p>
									<i class="fa-solid fa-envelope"></i>
									ferdianafza21@if.unjani.ac.id <br>
									<i class="fa-solid fa-location-dot"></i>
									Batujajar, Bandung Barat <br>
									<i class="fa-solid fa-school"></i>
									SMK AL-Ihsan Batujajar (RPL) <br>
									<i class="fa-solid fa-clock-rotate-left"></i>
									Rails Junior WEB Developer di PT 41 Studio 2018-2019<br><br>
									<a href="#" style="font-size: 25px;"><i class="fa-brands fa-facebook-f"></i></a>&nbsp;
									<a href="#" style="font-size: 25px;" ><i class="fa-brands fa-github"></i></a>
									<a href="#" style="font-size: 25px;" ><i class="fa-brands fa-twitter"></i></a>
									<a href="#" style="font-size: 25px;" ><i class="fa-brands fa-linkedin-in"></i></a>
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">

									<img src="img/rizal.jpeg" style="border-radius: 50%; width: 70px; height: 70px;">
								</div>
								<h4>Rizal Zulkipli</h4>
								<p>
									<i class="fa-solid fa-envelope"></i>
									rizalzulkipli21@if.unjani.ac.id <br>
									<i class="fa-solid fa-location-dot"></i>
									Tasikmalaya <br>
									<i class="fa-solid fa-school"></i>
									SMA NEGERI 4 TASIKMALAYA<br>
									
									<a href="#" style="font-size: 25px;"><i class="fa-brands fa-facebook-f"></i></a>&nbsp;
									<a href="#" style="font-size: 25px;" ><i class="fa-brands fa-github"></i></a>
									<a href="#" style="font-size: 25px;" ><i class="fa-brands fa-twitter"></i></a>
									<a href="#" style="font-size: 25px;" ><i class="fa-brands fa-linkedin-in"></i></a>
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">

									<img src="img/farhan.jpeg" style="border-radius: 50%; width: 70px; height: 70px;">
								</div>
								<h4>Farhan Andhika</h4>
								<p>
									<i class="fa-solid fa-envelope"></i>
									farhanandika21@if.unjani.ac.id <br>
									<i class="fa-solid fa-location-dot"></i>
									PURWAKARTA <br>
									<i class="fa-solid fa-school"></i>
									SMAN 3 PURWAKARTA<br>
									<!-- <i class="fa-solid fa-clock-rotate-left"></i>
									Rails Junior Developer di PT 41 Studio 2018-2019<br> -->
									<a href="#" style="font-size: 25px;"><i class="fa-brands fa-facebook-f"></i></a>&nbsp;
									<a href="#" style="font-size: 25px;" ><i class="fa-brands fa-github"></i></a>
									<a href="#" style="font-size: 25px;" ><i class="fa-brands fa-twitter"></i></a>
									<a href="#" style="font-size: 25px;" ><i class="fa-brands fa-linkedin-in"></i></a>
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">

									<img src="img/rizal.jpeg" style="border-radius: 50%; width: 70px; height: 70px;">
								</div>
								<h4>Ramdhan Triyadi Nugraha</h4>
								<p>
									<i class="fa-solid fa-envelope"></i>
									ramdhantriyadi21@if.unjani.ac.id <br>
									<i class="fa-solid fa-location-dot"></i>
									Kuningan <br>
									<i class="fa-solid fa-school"></i>
									SMA NEGERI 4 TASIKMALAYA<br>
									<a href="#" style="font-size: 25px;"><i class="fa-brands fa-facebook-f"></i></a>&nbsp;
									<a href="#" style="font-size: 25px;" ><i class="fa-brands fa-github"></i></a>
									<a href="#" style="font-size: 25px;" ><i class="fa-brands fa-twitter"></i></a>
									<a href="#" style="font-size: 25px;" ><i class="fa-brands fa-linkedin-in"></i></a>
								</p>
							</div>
						</div>

						>
					</div>
				</div>
			</section>
			<!-- End menu Area -->

			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Maecenas egestas arcu quis ligula 
								</p>
								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info pt-20"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="https://www.facebook.com/soupbuahtaza"><i class="fa fa-facebook"></i></a>
									<a href="https://www.twitter.com/@soupbuahtaza"><i class="fa fa-twitter"></i></a>
									<a href="https://www.instagram.com/soupbuahtaza"><i class="fa fa-instagram"></i></a>
									<a href="https://plus.google.com/soupbuahtaza"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			
			
			
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>
			<script src="js/slideshow.js"></script>
		</body>
	</html>



