<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
	<head>
		<title>Suit Up</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							

						<!-- Nav -->
							<nav id="nav">
								<ul>

									<li><a href="index.php"><font face = "Merienda One">Home</font></a></li>
                                    <li><a href="AboutUs.php"><font face = "Merienda One">About Us</font></a></li>
                                    <li><a href="SignUp.php"><font face = "Merienda One">Sign Up</font></a></li>
                                    <li><a href="Login.php"><font face = "Merienda One">Account</font></a></li>
                                    <?php
                                    session_start();
                                    if(isset($_SESSION["Name"])){
                                    	?> <li><a href="logout.php"><font face = "Merienda One">Log out</font></a></li>
                                    	<?php
                                    }
                                    ?>
                                    
								</ul>
							</nav>

					</div>

					<!-- Hero -->
						<section id="hero" class="container">
                            <img src="images/jessLogo.png" alt="" height ="200" width="250"/>
							<header>
                                <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
								<h2><font face = "Pacifico"> Suit Up</font></h2>
							</header>
                            <font face = "Merienda One">
							<p>Build a professional online presence<br>
                                Facebook, Twitter, Instagram, LinkedIn</p></font>
							<ul class="actions">
                                <li><a href="SignUp.php" class="button"><font face = "Merienda One">Suit Up Today</font></a></li>
							</ul>
						</section>

				</div>

			<!-- Features 1 -->
				
					<div class="container" >
						<div class="row features">
							<section class="4u 12u(narrower) feature">
								<div class="image-wrapper first">
									<a href="#" class="image featured" >
                                        </a>
								</div>
								<header>
                                    <h3 style="color:#242E70;"><font face = "Pacifico">Sit back and let us do the clean up</font></h3>
								</header>
                                <p style="color:#242E70;"><b style="color:#242E70;">Don't worry about going through years of tagged photos and regrettable uploads, let us do the work for you! Suit Up works closely with you to securely clean up your profiles of choice, never breaching your privacy.</b></p>
								<ul class="actions">
				
								</ul>
							</section>
							<section class="4u 12u(narrower) feature">
								<div class="image-wrapper">
									<a href="#" class="image featured" ></a>
								</div>
								<header>
                                    <h3 style="color:#242E70;"><font face = "Pacifico">Recieve a detailed report to customize your experience</font></h3>
								</header>
                                <p style="color:#242E70;"><b style="color:#242E70;">If you want to pick and choose how you clean up, you can opt for your own personalized report to notify you about what could be a red flag! You can use this in conjunction with or separate from our clean sweep monitoring.</b></p>
								<ul class="actions">
									
								</ul>
							</section>
							<section class="4u 12u(narrower) feature">
								<div class="image-wrapper">
									<a href="#" class="image featured"></a>
								</div>
								<header>
                                    <h3 style="color:#242E70;"><font face = "Pacifico">One time, a few times or constantly</font></h3>
								</header>
								<p style="color:#242E70;"><b style="color:#242E70;">We work to create an experience tailored to YOU. Whether you want a one time sweep of all platforms or monthly monitoring, we do it all! Customize a plan today to keep your social media presence in tip top shape.</b></p>
								<ul class="actions">
									
								</ul>
							</section>
						</div>
                    
            </div>
			<!-- Promo -->
				<div id="promo-wrapper">
					<section id="promo">
                        
                        <h2 style="color:#242E70;"><font face = "Merienda One"> "51 percent of employers who research job candidates on social media said they’ve found content that caused them to not hire the candidate" -Career Builder</font></h2>
                        </section>
					

			<!-- Features 2 -->
				

			<!-- Footer -->
				<div id="footer-wrapper">
					<div id="footer" class="container">
			

					</div>
					<div id="copyright" class="container">
						<ul class="menu">
							<li>&copy; Suit Up. All rights reserved.</li><li>Art: Tyler Anderson</li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
        </div>
	</body>
</html>