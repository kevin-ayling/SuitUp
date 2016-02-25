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
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header-wrapper">
            <div id="header" class="container">

                <!-- Logo -->


                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="index.html"><font face = "Merienda One">Home</font></a></li>
                        <li><a href="right-sidebar.html"><font face = "Merienda One">About Us</font></a></li>
                        <li><a href="no-sidebar.html"><font face = "Merienda One">Sign Up</font></a></li>
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
                        <h2>Register Today!</h2>
                        <p>Browse through our different packages and register for what suits you!</p>
                    </header>


                    <form action=validate.php method=POST>
                        <input type=email name="email" required placeholder="Enter a valid email address">
                        <br>
                        <input type=password placeholder="Password" name="password" id="password" required>
                        <br>
                        <input type=password placeholder="Confirm Password" name="password2" id="confirm_password" required>
                        <br>
                        <input type=text placeholder="First name" name="fname" id = "fname" required>
                        <br>
                        <input type=text placeholder="Last name" name="lname" id = "lname" required>
                        <br>
                        <input type=text placeholder="Address" name="address" required>
                        <br>
                        <input type=text placeholder="City" name="city" id = "city" required>
                        <br>
                        <input type=text placeholder="State" name="state" id = "state" required>
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




        <div class="row features">
            <section class="4u 12u(narrower) feature">
                <div class="image-wrapper first">
                    <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                </div>
                <header>
                    <h3>Dolor sit consequat magna</h3>
                </header>
                <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit dolor neque semper magna lorem ipsum.</p>
                <ul class="actions">
                    <li><a href="#" class="button">Elevate my awareness</a></li>
                </ul>
            </section>
            <section class="4u 12u(narrower) feature">
                <div class="image-wrapper">
                    <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
                </div>
                <header>
                    <h3>Dolor sit consequat magna</h3>
                </header>
                <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit dolor neque semper magna lorem ipsum.</p>
                <ul class="actions">
                    <li><a href="#" class="button">Elevate my awareness</a></li>
                </ul>
            </section>
            <section class="4u 12u(narrower) feature">
                <div class="image-wrapper">
                    <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
                </div>
                <header>
                    <h3>Dolor sit consequat magna</h3>
                </header>
                <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit dolor neque semper magna lorem ipsum.</p>
                <ul class="actions">
                    <li><a href="#" class="button">Elevate my awareness</a></li>
                </ul>
            </section>
        </div>


        <!-- Footer -->
        <div id="footer-wrapper">
            <div id="footer" class="container">
                <header class="major">
                    <h2>Euismod aliquam vehicula lorem</h2>
                    <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit
                        <br /> dolor neque semper magna lorem ipsum feugiat veroeros lorem ipsum dolore.</p>
                </header>
                <div class="row">
                    <section class="6u 12u(narrower)">
                        <form method="post" action="#">
                            <div class="row 50%">
                                <div class="6u 12u(mobile)">
                                    <input name="name" placeholder="Name" type="text" />
                                </div>
                                <div class="6u 12u(mobile)">
                                    <input name="email" placeholder="Email" type="text" />
                                </div>
                            </div>
                            <div class="row 50%">
                                <div class="12u">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="row 50%">
                                <div class="12u">
                                    <ul class="actions">
                                        <li>
                                            <input type="submit" value="Send Message" />
                                        </li>
                                        <li>
                                            <input type="reset" value="Clear form" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </section>
                    <section class="6u 12u(narrower)">
                        <div class="row 0%">
                            <ul class="divided icons 6u 12u(mobile)">
                                <li class="icon fa-twitter"><a href="#"><span class="extra">twitter.com/</span>untitled</a></li>
                                <li class="icon fa-facebook"><a href="#"><span class="extra">facebook.com/</span>untitled</a></li>
                                <li class="icon fa-dribbble"><a href="#"><span class="extra">dribbble.com/</span>untitled</a></li>
                            </ul>
                            <ul class="divided icons 6u 12u(mobile)">
                                <li class="icon fa-instagram"><a href="#"><span class="extra">instagram.com/</span>untitled</a></li>
                                <li class="icon fa-youtube"><a href="#"><span class="extra">youtube.com/</span>untitled</a></li>
                                <li class="icon fa-pinterest"><a href="#"><span class="extra">pinterest.com/</span>untitled</a></li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
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
