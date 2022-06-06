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
				          <!-- <li><a href="index.php#healthy-drinks">Healthy Drinks</a></li> -->
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
								<h1 class="mb-10">Pesan Biling Sekarang Mainkan dengan Senang Hati!!!</h1>
								<p>Tidak ada simpan sisa Biling.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Reguler 1 Jam</h4>
									<p class="price float-right">
										IDR 10K
									</p>
								</div>
								<p>
									Reguler Billing 60 menit.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Reguler 2 Jam</h4>
									<p class="price float-right">
										IDR 19K
									</p>
								</div>
								<p>
									Reguler Billing 120 menit.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Reguler 3 Jam</h4>
									<p class="price float-right">
										IDR 27K
									</p>
								</div>
								<p>
									Reguler Billing 180 menit.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Reguler 6 Jam</h4>
									<p class="price float-right">
										IDR 55K
									</p>
								</div>
								<p>
									Reguler Billing 360 menit.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Reguler 9 Jam</h4>
									<p class="price float-right">
										IDR 85K
									</p>
								</div>
								<p>
									Reguler Billing 540 menit.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Reguler 12 Jam</h4>
									<p class="price float-right">
										IDR 110K
									</p>
								</div>
								<p>
									Reguler Billing 720 menit.
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Paket Gadang 1 </h4>
									<p class="price float-right">
										IDR 70K
									</p>
								</div>
								<p>
									Paket gadang dari pukul 21.30 WIB sampai pukul 05.00 WIB
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Paket Gadang 2</h4>
									<p class="price float-right">
										IDR 85K
									</p>
								</div>
								<p>
									Paket gadang dari pukul 20.30 WIB sampai pukul 05.00 WIB + Free Kopi dan Indomie
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4>Paket Gadang 3</h4>
									<p class="price float-right">
										IDR 95K
									</p>
								</div>
								<p>
									Paket gadang dari pukul 19.30 WIB sampai pukul 05.00 WIB + Free Kopi, Indomie + Telor
								</p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<p class="price float-right">
										<!-- IDR 95K -->
									</p>
								</div>
								<p>
									<center>
										
									<h4>Pilih Paket</h4>
									</center>
									<center>
									<form action="#" method="post">
									<input type="number" name="id_user" id="id_user" value="<?php echo $id?>" hidden >
									<input type="text" name="username" value="<?php echo $username?>" hidden >
									<div id="main" data-loading="true" >
										
									<select name="produk" id="produk" class="" style="width: 50%; background-color: #777777; color: #efda4bd9; " >
										<option value="Reguler1Jam" data-price="10000" id="reg1" style="width: 100%;" >Reguler 1 Jam</option>
										<option value="Reguler 2 Jam" id="reg2" data-price="19000" style="width: 100%;" >Reguler 2 Jam</option>
										<option value="Reguler 3 Jam" id="reg3" data-price="27000" style="width: 100%;" >Reguler 3 Jam</option>
										<option value="Reguler 6 Jam"  data-price="55000" style="width: 100%;" >Reguler 6 Jam</option>
										<option value="Reguler 9 Jam" data-price="85000" style="width: 100%;" >Reguler 9 Jam</option>
										<option value="Reguler 12 Jam" data-price="110000" style="width: 100%;" >Reguler 12 Jam</option>
										<option value="Paket Gadang 1" data-price="70000" style="width: 100%;" >Paket Gadang 1</option>
										<option value="Paket Gadang 2" data-price="85000" style="width: 100%;" >Paket Gadang 2</option>
										<option value="Paket Gadang 3" data-price="95000" style="width: 100%;" >Paket Gadang 3</option>
									</select>
									</div>
									<!-- <input type="text" name="kode_billing" value="<?php echo(rand()) ?>" hidden > -->	
									<h4 id="tes1" ></h4>
									<img src="img/ovo.png" style="width: 90px; height: 50px;">	
									<h4 id="tes2" ></h4>	
									<input type="number" name="total_bayar" id="total_bayar" >
									<br>
									<!-- The Modal -->
									<!-- <button id="myBtn">Konfirmasi</button>
									<div id="myModal" class="modal">
									  
									  <div class="modal-content">
									    <span class="close">&times;</span>
									    <p>Some text in the Modal..</p>
									  </div>

									</div> -->
									
									    <button type="submit" name="bayar" class="btn btn-info" style="background-color: #efda4bd9 !important; border: 1px solid #efda4bd9 !important;" >Bayar</button>
									</form>	
									<br>
									<h4>Billing Saya</h4>
									<input type="number" name="" id="random" value="<?php echo rand(2,100); ?>" hidden >

									<table class="table table-striped table-dark">
		  								<thead>
		    								<tr>
										      <th scope="col">No</th>
										      <th scope="col">Id Biling</th>
										      <th scope="col">Produk</th>
										      <th scope="col">Kode Billing</th>
										      <th scope="col">Total Bayar</th>
										    </tr>
										  </thead>
										  <tbody>
										    <?php
											$sql = "SELECT * FROM billing WHERE id_user = '$id' ORDER BY id DESC";
											$result = $conn->query($sql);
											if ($result->num_rows < 0) { 
												echo '<tr><td colspan="6"> tidak ada data!</td></tr>';
											} else { 
											$no = 1;
											while($row = $result->fetch_assoc()) {
							
											// menampilkan row dengan data di database
												echo "<tr>";
												echo "<th scope='row'>".$no.'</th>';
												echo "<td>".$row['id']."</td>"; 
												echo "<td>".$row['produk']."</td>";
												echo "<td>".$row['kode_biling']."</td>";
												echo "<td>".$row['total_bayar']."</td>";

												echo "</tr>";

												$no++;
											}

										}
									?>
										  </tbody>
										</table>
									</center>
								</p>
							</div>
						</div>
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
			<script>
				$("document").ready(function () {
					$("#produk").on('change', function() {
						const harga = $('#produk option:selected').data('price');
						const random = parseInt($("#random").val());
						const id_user = parseInt($("#id_user").val());
						const total_unik = random+id_user;
						const total = harga+random+id_user;
						$("#tes1").text("Total yang harus anda Bayar: Rp "+total+",-");
						$("#total_bayar").val(total);
						$("#tes2").html("Mohon Transfer ke nomor Ovo Berikut: 085703209368"+"<br/>"+ "dengan kode unik:"+total_unik);
					})
					
				})
			</script>
			<script>
			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the button that opens the modal
			var btn = document.getElementById("myBtn");

			// Get the <span> element that closes the modal
			// var span = document.getElementsByClassName("close")[0];

			// When the user clicks the button, open the modal 
			btn.onclick = function() {
			  modal.style.display = "block";
			}

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			  modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			  if (event.target == modal) {
			    modal.style.display = "none";
			  }
			}
			</script>
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



