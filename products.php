<?php 
    require 'dbconnect.php';

    // if (!isset($_SESSION['email'])) {
    //     header('location:login.php');
    // }

    $sql="SELECT*FROM products";
    $result= mysqli_query($db,$sql);
    $products=mysqli_fetch_all($result,1);
    mysqli_close($db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get | Products</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
     <link rel="stylesheet" href="css/style.css">
   
<style>
body{
    background:transparent;
}
</style>
</head>


<body>
   <!-- <header class="header">

    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Beauty We Care</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php  ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="makeup.php">MAKE UP </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">SKIN CARE </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BODY CARE</a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="product.php">PRODUCTS</a>
                    </li>
                    
                 <li class="nav-item">
                        <a class="nav-link" href="#">BRANDS</a>
                    </li>


                   

                    <li class="nav-item dropdown">
                        <a href="appoitment.php">
                            <button class="btn btn-outline-dark">Make appointment</button>
                        </a>

                    </li
                </ul>

            </div>
        </div>
    </nav>
</header>-->

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
							
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
						<!--	<li class="menu-item"><a href="about.html">About</a></li>
							<li class="menu-item"><a href="service.html">Services</a></li>
							<li class="menu-item"><a href="gallery.html">Gallery</a></li>-->
							<li class="menu-item"><a href="create.php">Sell Products</a></li>
							
							
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>

<main>

    <div class="container mt-4">
        <div class="row">
        <?php foreach($products as $product): ?>
            <div class="col-sm-3 shadow-sm m-3">
                <img src=<?= $product['image']?> class="img-fluid" alt="">
                <h4><?= $product['description']?></h4>
                <h5><?= $product['price']?></h5>
                <h5><?= $product['quantity']?></h5>
                <p></p>
            </div>
            <?php endforeach; ?>
            
        </div>
    </div>


</main>


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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>