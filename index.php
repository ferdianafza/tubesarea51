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
				  						<a href="tel:(+62) 878 2677 3757">(+62) 878 2677 757</a>
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
				          <!-- <li><a href="#healthy-drinks">Healthy Drinks</a></li> -->
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

			<!-- Start video-sec Area -->
			<section class="video-sec-area pb-100 pt-40" id="about">
				<div class="container">
					<div class="row justify-content-start align-items-center">
						<div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
							<div class="overlay overlay-bg"></div>
							<a class="play-btn" href="https://www.youtube.com/watch?v=Bo1PfSiLgFM"><img class="img-fluid" src="img/play-icon.png" alt=""></a>
						</div>
						<div class="col-lg-6 video-left">
							<h6>No Game No Life.</h6>
							<h1>Area 51 <br>
							Cafe Internet </h1>
							<!-- <p><span class="p1">We are here to listen from you deliver exellence</span></p> -->
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
							</p>
							<img class="img-fluid" src="img/signature.png" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- End video-sec Area -->

			<!-- Start menu Area -->
			<section class="menu-area section-gap" id="healthy-drinks">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Temani Waktu Bermain Internet Anda Dengan Makanan Dan Minuman Kami</h1>
								<!-- <p>Who are in extremely love with eco friendly system.</p> -->
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Fruity Soup</h4>
									<p class="price float-right">
										IDR 14K
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Apple Juice</h4>
									<p class="price float-right">
										IDR 14K
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Salad</h4>
									<p class="price float-right">
										IDR 14K
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Strawberry Juice</h4>
									<p class="price float-right">
										IDR 14K
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Manggo Juice</h4>
									<p class="price float-right">
										IDR 14K
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Avocado Juice</h4>
									<p class="price float-right">
										IDR 14K
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Orange Juice</h4>
									<p class="price float-right">
										IDR 14K
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Banana Juice</h4>
									<p class="price float-right">
										IDR 14K
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Pineapple Juice</h4>
									<p class="price float-right">
										IDR 14K
									</p>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End menu Area -->

			<!-- Start gallery Area -->
			<section class="gallery-area section-gap" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Game Sedang Populer Saat ini</h1>
								<p>Bermain Bareng Bersama Teman Lebih Mengasikan!!! .</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<a href="img/g1.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/g1.jpg" alt="">
							</a>
							<a href="img/f2.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/f2.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-8">
							<a href="img/g3.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/g3.jpg" alt="">
							</a>
							<div class="row">
								<div class="col-lg-6">
									<a href="img/g4.jpg" class="img-pop-home">
										<img class="img-fluid" src="img/g4.jpg" alt="">
									</a>
								</div>
								<div class="col-lg-6">
									<a href="img/f5.jpg" class="img-pop-home">
										<img class="img-fluid" src="img/f5.jpg" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End gallery Area -->

			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Cuplikan</h1>
								<!-- <p>Who are in extremely love with eco friendly system.</p> -->
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 single-blog">
							<video id="myImage" class="img-fluid" alt="" controls autoplay>
							  <source src="videos/trailer-pubg.mp4" type="video/mp4">
							  Your browser does not support the video tag.
							</video>
							<br>
							<marquee behavior="scroll" direction="left">
								Mainkan sekarang dan jadilah seorang pro player
							</marquee>
							<a href="#"><h4>Player Unknown Battle Ground</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<!-- <p class="post-date">
								31st January, 2018
							</p> -->
						</div>
						<div class="col-lg-6 col-md-6 single-blog">
							<video id="myImage-end" class="img-fluid" alt="" controls autoplay>
								<source src="videos/trailer-cod.mp4" type="video/mp4">
							</video>
							<marquee behavior="scroll" direction="left">
								Mainkan sekarang dan jadilah seorang pro player
							</marquee>		
							<a href="#"><h4>Call of Duty</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<!-- <p class="post-date">
								31st January, 2018
							</p> -->
						</div>
					</div>
				</div>
			</section>
			<!-- End blog Area -->


			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Tentang Area51</h6>
								<p>
									Area51 merupakan sebuah cafe internet dimana orang-orang dapat datang ke lokasi kami memainkan komputer gaming dengan sensasi memuaskan karna spesifikasi dari komputer yang tersedia tinggi, orang-orang juga dapat memesan billing secara online melalui website kami mereka hanya perlu memasukan username akun mereka dan kode biling yang diberikan setelah melakukan pembayaran
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
			<!-- End footer Area -->

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



