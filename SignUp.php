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

<body class="no-sidebar">
    <div id="page-wrapper2">

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
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Main -->
        <div class="wrapper">
            <div class="container" id="main">

                <!-- Content -->
                <article id="content">
                    <header>
                        <center>
                            <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
                            <h2><font face = "Pacifico">Register Today!</font></h2></center>
                    </header>
                    <header>
                        <center><img src="images/jessLogo.png" alt="" height="100" width="150" /></center>

                        <h2><center><font face = "Pacifico"> Plans we offer:</font></center></h2>
                    </header>
                </article>

                <div class="container">
                    <div class="row features">
                        <section class="4u 12u (narrower) feature" style="background-color: #242E70; padding-right: 2em; padding-bottom: 2em;">

                            <header>
                                <h3 style="color:#FFAB76;">One-time Clean up</h3>
                            </header>
                            <p style="color:#FFAB76;">Suit Up will go through all of your online profiles and produce a report detailing potential outliers on your platforms. No need to give us any passwords - We will complete a thorough web search for your content. </p>

                        </section>
                        <section class="4u 12u(narrower) feature" style="background-color:#19BCCB; padding-right: 2em; padding-bottom: 2em">

                            <header>
                                <h3 style="color:#242E70;">Intermittent Monitoring</h3>
                            </header>
                            <p style="color:#242E70;">We'll start with a complete overhaul of what is visible publicly from your profiles. You can give us your account information and we will check in on content every 6 months. As always, your information is protected.</p>

                        </section>
                        <section class="4u 12u(narrower) feature" style="background-color: #242E70; padding-right: 2em; padding-bottom: 2em">

                            <header>
                                <h3 style="color:#FFAB76;">Consistent Management</h3>
                            </header>
                            <p style="color:#FFAB76;">This package starts from scratch with what you have on your profiles. We will build a professional presence online that will help you in your employment search. This is the best package we offer and we guarantee your satisfaction.</p>

                        </section>
                    </div>
                </div>

                <ul class="actions">

                </ul>

                <form action=validate.php method=POST>
                    <input type=email name="email" required placeholder="Enter a valid email address">
                    <br>
                    <input type=password placeholder="Password" name="password" id="password" required>
                    <br>
                    <input type=password placeholder="Confirm Password" name="password2" id="confirm_password" required>
                    <br>
                    <input type=text placeholder="First name" name="fname" id="fname" required>
                    <br>
                    <input type=text placeholder="Last name" name="lname" id="lname" required>
                    <br>
                    <input type=text placeholder="Address" name="address" required>
                    <br>
                    <input type=text placeholder="City" name="city" id="city" required>
                    <br>
                    <input type=text placeholder="State" name="state" id="state" required>
                    <br>
                    <input type=number placeholder="Zip code" name="zip" required>
                    <br>
                    <br>

                    <input type=submit name="submit">

                </form>
                </article>
            </div>
        </div>

        <script>
            var password = document.getElementById("password");
            confirm_password = document.getElementById("confirm_password");

            function validatePassword() {
                if (password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Passwords Don't Match");
                } else {
                    confirm_password.setCustomValidity('');
                }
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;

        </script>





        <!-- Footer -->
        <div id="footer-wrapper">

            <div id="copyright" class="container">
                <ul class="menu">
                    <li>&copy; Suit Up. All rights reserved.</li>

                </ul>
            </div>
        </div>



        <!-- Scripts -->

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>

</body>

</html>
