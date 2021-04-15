<?php 
	include('createproduct.php')
	?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Beauty We Care | Sell Products</title>
		<!-- Loading third party fonts -->
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>

		<div id="site-content">
			
			<header class="site-header">
				<div class="container">
					<a id="branding" href="index.php">
						<img src="images/logo.png" alt="Company name" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">Beuaty We Care</h1>
							<small class="site-description">Fill the world with beauty</small>
						</div>
					</a> <!-- #branding -->

					
					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="about.html">About</a></li>
							<li class="menu-item"><a href="signin.php">Log in</a></li>
							<li class="menu-item"><a href="gallery.html">Gallery</a></li>
							<li class="menu-item current-menu-item"><a href="contact.html">Contact</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
		<!-- <section class="main-content"> -->
		<div class="container">

			<div class="row justify-content-start m-4 p-3">
    <div class="col-sm-6">
    <h3 class="text-center p-3">Create product</h3>
    <form action="createproduct.php" method="post" class="gx-3 mt-1 p-3 shadow-lg bg-white" enctype="multipart/form-data">
        <div class="form-group m-4">
        <label for="name" class="mt-2"><strong>Name</strong></label>
        <input name="name" type="text" required placeholder="Name" class="form-control p-3">
        </div>
        <div class="form-group m-4">
        <label for="description"><strong>description</strong></label>
        <input name="description" type="text"  required placeholder="description" class="form-control p-3">
        </div>
        <div class="form-group m-4">
        <label for="quantity"><strong>quantity</strong></label>
        <input type="number" min="1" name="quantity" required placeholder="quantity" class="form-control p-3">
        </div>
        <div class="form-group m-4">
        <label for="price"><strong>price</strong></label>
        <input type="number"min="1" name="price" required placeholder="price" class="form-control p-3">
        </div>
		 <div class="form-group m-4">
        <label for="file"><strong>upload</strong></label>
        <input type="file" name="image" required >
        </div>
			<div class="p-3">
        <button type="submit" class="btn btn-secondary text-uppercase p-2" name="createproduct"><i>create</i></button>

			</div>
    </form>
    
	 
    </div>
    </div>

</div>
		</div>		
    


		<!-- </section> -->

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="widget contact-widget">
								<h3 class="widget-title">Contact</h3>
								<div class="contact-info">
									<address>
										<img src="images/icon-map-small.png" class="icon">
										<p><strong>Company name</strong> 563 Avenue Street, New York</p>
									</address>
									<a href="mailto:contact@companyname.com" class="mail"><img src="images/icon-envelope-small.png" class="icon">contact@companyname.com</a>
									<a href="tel:(500)942042259" class="phone"><img src="images/icon-phone-small.png" class="icon">(500)942042259</a>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident et praesentium </p>
								<div class="social-links">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3>
								<form action="#" class="subscribe-form">
									<input type="email" placeholder="Enter our email...">
									<input type="submit" value="Sign up">
								</form>
							</div>
						</div>
					</div>

					<div class="colophon">
						<p>Copyright 2014 Company name. Designed by Themezy. All rights reserved.</p>
					</div>
				</div>
			</footer>
		</div>
		

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>