<!DOCTYPE html>
<html lang="en">
<head>
  
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

	<title>Hotel Santa Fé</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="hotel santa fé, hotel santa fé san cristobal, san cristobal hoteles,hotel santa fe chiapas, hotel santa fé sclc">
	<meta name="keywords" content="hotel santa fé, hotel santa fé san cristobal, san cristobal hoteles,hotel santa fe chiapas, hotel santa fé sclc">
	<meta name="author" content="idiaySoft">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<!--Para chekin-->
	<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">

	<!--Icono-->
	<link rel="icon" type="image/png" href="images/basic/logosf.png" />

	<!-- Styles -->
	<link rel="stylesheet" href="js/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="js/owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="js/owl-carousel/owl.transitions.css">
	<link rel="stylesheet" href="js/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="js/flexslider/flexslider.css">
	<link rel="stylesheet" href="js/isotope/isotope.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="js/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" href="css/style.css">
	<!--Para chekin-->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/jquery-ui.css">


	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>

	<!-- Icon Fonts -->
	<link rel="stylesheet" href="css/icomoon/style.css" type="text/css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

	<!-- SKIN -->
	<link rel="stylesheet" href="css/color-scheme/default-black.css" type="text/css">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
           <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.2/jquery.xdomainrequest.min.js"></script>      
	<![endif]-->

</head>
<body id="header6">
<div id="page-top"></div>
<div class="outer-wrapper">
	<div class="header-wrap">

		<!-- HEADER -->
		<header id="header-main">
		<div class="container">
			<div class="navbar yamm navbar-default">
				<div class="navbar-header">
					<button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a href="index.html" class="navbar-brand"><img src="images/basic/logosf.png" width="40" alt=""/></a>
				</div>

				<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
						<li class="page-scroll"><a href="index.html">Inicio</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	</div>
<?php  
	$date1 = $_POST['llegada'];
	$date2 = $_POST['salida'];
	$tipo = $_POST['tipo'];
	$datetime1 = new DateTime($date1);
	$datetime2 = new DateTime($date2);
	$interval = $datetime1->diff($datetime2);
	
if ($tipo == 1) {
	$precio1 = 300;
	$dias = $interval->format('%R%a');
	$total = $dias * $precio1;
	echo '

	<div class="inner-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="blog-single">
						<article class="blogpost">
							<h2 class="post-title"><a href="#">Habitación King Size</a></h2>
							<div class="space30"></div>
							<!-- Media Gallery -->
							<div class="post-media">
								<div id="blog-slider" class="owl-carousel owl-theme">
									<div class="item">						
										<img src="images/projects/king1.jpg" class="img-responsive" alt="">
									</div>
									<div class="item">						
										<img src="images/projects/king5.jpg" class="img-responsive" alt="">
									</div>
								</div>
							</div>
							<div class="space30"></div>
							<p>
								Cuenta con una cama King size, baño completo, agua caliente, amenidades de cortesía como son: Jabón, shampoo, etc.; además TV de plasma con servicio satelital y acceso a internet.
							</p>
					   </article>
					</div>
					<br>
					<h4 class="uppercase space30">Total a pagar: </h4><h3> $'.$total.'</h3>
				</div>
			</div>
		</div>
	</div>
';
}
if ($tipo == 2) {
	$precio1 = 400;
	$dias = $interval->format('%R%a');
	$total = $dias * $precio1;
	echo '

	<div class="inner-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="blog-single">
						<article class="blogpost">
							<h2 class="post-title"><a href="#">Habitación Doble</a></h2>
							<div class="space30"></div>
							<!-- Media Gallery -->
							<div class="post-media">
								<div id="blog-slider" class="owl-carousel owl-theme">
									<div class="item">						
										<img src="images/projects/doble1.jpg" class="img-responsive" alt="">
									</div>
									<div class="item">						
										<img src="images/projects/doble2.jpg" class="img-responsive" alt="">
									</div>
								</div>
							</div>
							<div class="space30"></div>
							<p>
								Cuenta con dos camas matrimoniales, baño completo, agua caliente, amenidades de cortesía, TV de plasma con servicio satelital y acceso a internet.
							</p>
					   </article>
					</div>
					<br>
					<h4 class="uppercase space30">Total a pagar: </h4><h3> $'.$total.'</h3>
				</div>
			</div>
		</div>
	</div>
';
}
if ($tipo == 3) {
	$precio1 = 450;
	$dias = $interval->format('%R%a');
	$total = $dias * $precio1;
	echo '

	<div class="inner-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="blog-single">
						<article class="blogpost">
							<h2 class="post-title"><a href="#">Habitación Triple</a></h2>
							<div class="space30"></div>
							<!-- Media Gallery -->
							<div class="post-media">
								<div id="blog-slider" class="owl-carousel owl-theme">
									<div class="item">						
										<img src="images/projects/triple2.jpg" class="img-responsive" alt="">
									</div>
									<div class="item">						
										<img src="images/projects/triple6.jpg" class="img-responsive" alt="">
									</div>
								</div>
							</div>
							<div class="space30"></div>
							<p>
								Cuentan con una cama matrimonial y una cama individual, baño completo, agua caliente, amenidades de cortesía , televisión de plasma con servicio satelital y acceso a Internet.
							</p>
					   </article>
					</div>
					<br>
					<h4 class="uppercase space30">Total a pagar: </h4><h3> $'.$total.'</h3>
				</div>
			</div>
		</div>
	</div>
';
}
if ($tipo == 4) {
	$precio1 = 100;
	$dias = $interval->format('%R%a');
	$total = $dias * $precio1;
	echo '

	<div class="inner-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="blog-single">
						<article class="blogpost">
							<h2 class="post-title"><a href="#">Habitación Compartida</a></h2>
							<div class="space30"></div>
							<!-- Media Gallery -->
							<div class="post-media">
								<div id="blog-slider" class="owl-carousel owl-theme">
									<div class="item">						
										<img src="images/projects/compartida1.jpg" class="img-responsive" alt="">
									</div>
									<div class="item">						
										<img src="images/projects/compartida2.jpg" class="img-responsive" alt="">
									</div>
								</div>
							</div>
							<div class="space30"></div>
							<p>
								Habitaciones con baño privado (agua caliente), albergan hasta cuatro personas, cuentan con Tv de plasma con servicio satelital y amenidades decortesía.
							</p>
					   </article>
					</div>
					<br>
					<h4 class="uppercase space30">Total a pagar: </h4><h3> $'.$total.'</h3>
				</div>
			</div>
		</div>
	</div>
';
}
	
		
	?>		


	<!-- FOOTER COPYRIGHT -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p>&copy; Copyright 2016. Hotel Santa Fé, Diseñado por <a href="http://www.facebook.com/IdiaySoft-1521677124815269/?ref=hl" target="_blank"> I-diaySoft</a></p>
				</div>
				<div class="col-md-4">
					<div class="f-social pull-right">
						<a class="fa fa-facebook" href="https://www.facebook.com/Hotel-Santa-fe-749084488555234/?skip_nax_wizard=true"></a>
						<a class="fa fa-youtube" href="https://www.youtube.com/channel/UCwGwgO7wBu-l9PSjaD0_C9g?guided_help_flow=3"></a>
						<a class="fa fa-instagram" href="https://www.instagram.com/hotel.santa.fe.sdc/"></a>
						<a class="fa fa-google-plus" href="#"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- STYLE SWITCHER 
============================================= -->
<div class="b-settings-panel">
	<div class="settings-section">
		<span>
		Boxed 
		</span>
		<div class="b-switch">
			<div class="switch-handle"></div>
		</div>
		<span>
		Wide 
		</span>
	</div>
	<hr class="dashed" style="margin: 15px 0px;">
	<h5>Main Background</h5>
	<div class="settings-section bg-list">
		<div class="bg-pattern1"></div>
		<div class="bg-pattern2"></div>
		<div class="bg-pattern6"></div>
		<div class="bg-pattern10"></div>
		<div class="bg-pattern16"></div>
		<div class="bg-pattern4"></div>
		<div class="bg-pattern5"></div>
		<div class="bg-pattern7"></div>
		<div class="bg-pattern9"></div>
		<div class="bg-pattern11"></div>
		<div class="bg-pattern12"></div>
		<div class="bg-pattern13"></div>
		<div class="bg-pattern17"></div>
		<div class="bg-pattern8"></div>
		<div class="bg-pattern14"></div>
		<div class="bg-pattern15"></div>
		<div class="bg-pattern3"></div>
		<div class="bg-pattern18"></div>
	</div>
	<hr class="dashed" style="margin: 15px 0px;">
	<h5>Color Scheme</h5>
	<div class="settings-section color-list">
		<div data-src="css/color-scheme/moderate-green.css" style="background: #8ec249"></div>
		<div data-src="css/color-scheme/vivid-blue.css" style="background: #228dff"></div>
		<div data-src="css/color-scheme/orange.css" style="background: #fa6900"></div>
		<div data-src="css/color-scheme/brown.css" style="background: #a68c69"></div>
		<div data-src="css/color-scheme/yellow.css" style="background: #fabe28"></div>
		<div data-src="css/color-scheme/violet.css" style="background: #ba01ff"></div>
		<div data-src="css/color-scheme/strong-cyan.css" style="background: #00b9bd"></div>
		<div data-src="css/color-scheme/soft-cyan.css" style="background: #4bd5ea"></div>
		<div data-src="css/color-scheme/red.css" style="background: #ff0104"></div>
		<div data-src="css/color-scheme/lite-brown.css" style="background: #f3a76d"></div>
		<div data-src="css/color-scheme/lime-green.css" style="background: #3bdbad"></div>
		<div data-src="css/color-scheme/light-voilet.css" style="background: #aaa5ff"></div>
		<div data-src="css/color-scheme/gray-green.css" style="background: #697060"></div>
		<div data-src="css/color-scheme/gray-cyan.css" style="background: #aeced2"></div>
		<div data-src="css/color-scheme/de-green.css" style="background: #b6cd71"></div>
		<div data-src="css/color-scheme/cream.css" style="background: #e0d6b2"></div>

	</div>
	<div class="btn-settings"></div>
</div>
<!-- END STYLE SWITCHER 
============================================= -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Plugins -->
<script src="js/bootstrap.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/owl-carousel/owl.carousel.min.js"></script>
<script src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/isotope/isotope.pkgd.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script src="js/tweecool.js"></script>
<script src="js/flexslider/jquery.flexslider.js"></script>
<script src="js/easypie/jquery.easypiechart.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.inview.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.easing/jquery.easing.js"></script>

<script src="js/main.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="js/gmaps/greyscale.js"></script>
 
</body>
</html>