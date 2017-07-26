
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="PROSFEL - serwis opon, wulkanizacja">
		<meta name="author" content="Roman Kowalski">
		<!-- <link rel="icon" href="../../favicon.ico"> -->

		<title>PROSFEL - mobilny serwis opon</title>

		<!-- Bootstrap core CSS -->
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="assets/css/style.css?v=3" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900&amp;subset=latin-ext" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body data-spy="scroll" data-target="#navbar-side">


		<script>
			var bodyTag = document.getElementsByTagName('body')[0];
			// bodyTag.className += " preloader-active";

			var preloader = document.createElement("div");
			var image = document.createElement("img");
			image.src = "images/logo.png";
			preloader.id = "preloader";
			preloader.appendChild(image);
			bodyTag.appendChild(preloader);

		</script>

		<!-- <div id="preloader"> -->
      <!-- <div class="static-logo"> -->
          <!-- <img src="img/logo_aqua.png" alt=""> -->
     
          <!-- <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i> -->
      <!-- </div> -->
    <!-- </div> -->

		<div class="container">

			<div class="row">

				<div id="header">
				</div>
				
				<div class="mobile-nav">

					<img src="images/logo.png" alt="PROSFEL logo" class="img-responsive logo center-block">

					<div class="nav-item">
						<img src="images/compass.png" alt="adres" class="img-responsive center-block">
						ul. Leśna 25<br>
						77-310 Debrzno
					</div>

					<div class="nav-item">
						<img id="phone" src="images/phone.png" alt="telefon" class="img-responsive center-block">
						<a href="tel:+48725161949">725 161 949</a><br><a href="tel:+48502627579">502 627 579</a>
					</div>

					<div class="nav-item">
						<img src="images/email.png" alt="email" class="img-responsive center-block" >
						<a href="mailto:kamil_pokrzywka@wp.pl">kamil_pokrzywka@wp.pl</a>
					</div>
				
				</div><!-- /.mobile-nav-->




				<div class="col-md-4 nopadding">

					<aside>
					
						<div class="logo">
							<img src="images/logo.png" alt="PROSFEL logo" class="img-responsive">
						</div> <!-- /.logo -->

						<nav id="navbar-side">
							<ul class="nav">
								<li><a data-scroll href="#about">O firmie</a></li>
								<li><a data-scroll href="#mobile">Mobilny serwis opon</a></li>
								<li><a data-scroll href="#sale">Sprzedaż i montaż opon</a></li>
								<li><a data-scroll href="#workshop">Wulkanizacja &amp; Mechanika pojazdowa</a></li>
							</ul>
						</nav>


						<div class="address">
							
							<div class="line line-address">
								<img src="images/compass.png" alt="">
								<div class="txt">
									ul. Leśna 25<br>
									77-310 Debrzno
								</div>
							</div>

							<hr>

							<div class="line line-phone">
								<img src="images/phone.png" alt="">
								<div class="txt">
									<a href="tel:+48725161949">725 161 949</a><br>
									<a href="tel:+48502627579">502 627 579</a>
								</div>
							</div>

							<hr>

							<div class="line line-email">
								<img src="images/email.png" alt="">
								<div class="txt">
									 <a href="mailto:kamil_pokrzywka@wp.pl">kamil_pokrzywka@wp.pl</a>
								</div>
							</div>

						</div> <!-- /.address -->

						
					</aside>    
				</div>

				<div class="col-md-8 nopadding">
					<section>

						<article id="slider">

							<div class="owl-wrapper">
								<div class="owl-carousel">
									<div class="item" style="background-image: url('images/slajd07.jpg');"></div>
									<div class="item" style="background-image: url('images/slajd03.jpg');"></div>
									<div class="item" style="background-image: url('images/slajd05.jpg');"></div>
									<div class="item" style="background-image: url('images/slajd06.jpg');"></div>
								</div>
								<div class="overlay">
							 
									<div class="description">
										<h1>PROSFEL - o firmie</h1>
									</div>

									<a href="https://www.facebook.com/prosfelpokrzywka/" target="_blank">
										<img src="images/facebook.png" class="social-icon" alt="facebook icon">
									</a>

								</div>
							</div>

						</article>

					
						<article id="about"> 
								<?php include("layout/layout-about.php"); ?>
						</article>

						<article id="mobile">
								<?php include("layout/layout-mobile.php"); ?>
						</article>
						
						<article id="sale">
								<?php include("layout/layout-sale.php"); ?>
						</article>
						
						<article id="workshop">
								<?php include("layout/layout-workshop.php"); ?>
						</article>
					
					</section>    
				</div>

			</div><!-- /.row -->


			<div class="row" id="footer">
				<footer>
					
				</footer>
			</div>


		</div><!-- /.container -->

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
		<script src="dist/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/smooth-scroll.min.js"></script>
		<script src="assets/js/imagesloaded.pkgd.min.js"></script>
		<script src="assets/js/main.js?v=3"></script>

	</body>
</html>
