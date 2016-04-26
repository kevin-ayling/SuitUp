<!DOCTYPE HTML>

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
	<body class="right-sidebar">
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
				</div>

			<!-- Main -->
				<div class="wrapper">
					<div class="container" id="main">
						<div class="row 150%">
							<div class="8u 12u(narrower)">

								<!-- Content -->
									<article id="content">
										<header>
                                             <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
                                            <h2 style="color:#000000;"><center><font face = "Pacifico">About Us</font></center> </h2>
<center><img src="images/jessLogo.png" alt="" height ="100" width="150"/></center>
              
                                            <p><b style="color:#000000;">We provide a unique service designed to clean up your social media footprint and prepare a professional online appearance.</b></p>
										</header>
										<center><img src="images/icons.png" alt="" /></center>
										<p><b style="color:#000000;">
When it comes to applying for a job, social media can make or break a candidate for recruiters and employers alike. The generation today trying to get hired in the work force is the first to experience social media as a tool used for recruitment. If an employer sees a potential hire does not show descent discretion online it could be the difference in getting the job or continuing the job search. 
Our team of professionals with years of experience in social media outreach and public relations will take control of your entire social media presence. With your permission, we will change any platform you want us to upgrade and improve with guidance from you the entire way. Our services can include Facebook, Twitter, Instagram and even LinkedIn. Pictures, comments and tweets will all be reviewed to determine what we as a team consider appropriate and act from there. We will also fill in information that employers look for, making sure that you are the best candidate possible.
                                            With the premium package we will remain a part of your social media entourage for the next 12 months-- monitoring your actions and reputation while even suggesting posts, shares and photos. As a result, employers will see a more well-rounded, aware candidate while also maximizing likes from your friends.</b></p>
                                        <p><b style="color:#000000;">
                                            Chief Executive Officer – Jess Bleser<br>
Chief Operating Officer – Kevin Ayling<br>
                                            Chief Financial Officer – Henry Garrett</b></p>
									</article>

							</div>
							<div class="4u 12u(narrower)">

								<!-- Sidebar -->
									<section id="sidebar">
										<section style="color:#FFAB76; background-color: #242E70; padding-left: 2em; padding-right: 1em; padding-bottom: 1em; padding-top: 1em">
											<header>
                                                <h3 style="color:#FFAB76;"><font face = "Pacifico">Step it up!</font></h3>
											</header>
											<p><b style="color:#FFAB76;">Don't let anyone's first impression of you be negative. Create a professional appearance online so everyone can see. Don't leave it up to chance. Sign up today!</b></p>
										</section>
                                </section>
										<section style="color:#242E70; background-color: #19BCCB; padding-left: 2em; padding-right: 1em; padding-bottom: 1em; padding-top: 1em">
		
											<header>
                                                <h3 style="color:#242E70;"><font face = "Pacifico">How it Works</font></h3>
											</header>
											<p><b style="color:#242E70;">We have image recognizing software automatically review your online profiles and generate a report of possible red flags. We also have experienced career consultants available for our premium members! Sign up for a plan today!</b></p>
											<ul class="actions">
												<li><a href="SignUp.php" class="button" style = "background-color: #FFAB76; margin: 0  auto;": >Sign Up</a></li>
											</ul>
										</section>
									<section id="sidebar">
										<section style="color:#FFAB76; background-color: #242E70; padding-left: 2em; padding-right: 1em; padding-bottom: 1em; padding-top: 1em">
											<header>
                                                <h3 style="color:#FFAB76;"><font face = "Pacifico">Dress to Impress</font></h3>
											</header>
											<p><b style="color:#FFAB76;">You wouldn't leave your house without dressing properly, don't leave your online presence undressed either. You can meet just as many people online, don't let them down! Suit Up!</b></p>
										</section>
                                </section>

							</div>
						
					</div>
				</div>
            </div>
        </div>

			<!-- Footer -->


		

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>