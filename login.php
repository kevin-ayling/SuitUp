<html>
<link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
    
<?php
session_start();


if(isset($_SESSION["login"])){
      header("Location: loggedIn.php");

}
    if(isset($_SESSION["error"])){
        echo $_SESSION["error"];
        unset($_SESSION["error"]);
    }
?>
    
<head>
    <title>Suit Up</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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
                        <li><a href="Login.php"><font face = "Merienda One">Account</font></a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="wrapper">
            <div class="container" id="main">

                <!-- Content -->
                <article id="content">
                    <header>
                        <center>
                            <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
                            <h2><font face = "Pacifico">Suit Up</font></h2></center>
                    </header>
                    <header>
                        <center><img src="images/jessLogo.png" alt="" height="100" width="150" /></center>

                        <h2><center><font face = "Pacifico"> User Login:</font></center></h2>
                    </header>
                </article>
         

<form action="checkLog.php" method=POST>

    <input type=text placeholder="Email" name="email">
    <br></br>
    <input type=password placeholder="Password" name="password">
    <br></br>

    <input type=submit name=submit>

</form>
           </div>
        </div>

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



</html>