<html>
<link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>


<?php
session_start();

if(!isset($_SESSION["login"])){
$_SESSION["error"] = "You have not logged in. Please log in first";
    header('Location: login.php'); 
}

    
    else{
         $check = $_SESSION["Email"];
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
                            <li><a href="logout.php"><font face = "Merienda One">Log out</font></a></li>
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

                            <h2><center><font face = "Pacifico"> Member Homepage:</font></center></h2>

                            <h3><center><font face = "Pacifico"> Welcome, <?php echo $_SESSION["Name"]; ?>
                             your current plan is: </font></center></h3>
                        </header>
                    </article>
                </div>




                <?php
            $db = mysqli_connect('localhost', 'root', 'password', 'test');
if($db->connect_error){
    print "Error - Could not connnect to MySQL";
    exit;
}

    
$result = mysqli_query($db,"SELECT * FROM SiteUsers WHERE email = '$check'");  
            
if(!$result) {
	die("you suck: " . mysql_error());
}
            
 if($row = mysqli_fetch_array($result)){
$query = $row['package'];
        }
            
    if($query == "oneTime"){        
            ?>

       <div class="container">
                            <div class="centerDiv">
                                <section style="background-color: #242E70; padding: 3em; text-align: center;">

                                    <header>
                                        <h3 style="color:#FFAB76;"><font face = "Pacifico">One-time Clean up</font></h3>
                                    </header>
                                    <p style="color:#FFAB76;">Suit Up will go through all of your online profiles and produce a report detailing potential outliers on your platforms. No need to give us any passwords - We will complete a thorough web search for your content. </p>

                                </section>

                            </div>
                        </div>
                    <div class="container" id="main">

                        <head>
                            <style type="text/css">
                                td,
                                th,
                                table {
                                    border: medium solid black;
                                }
                                
                                tr {
                                    text-align: center;
                                }
                                
                                th {
                                    font-weight: bold;
                                }

                            </style>
                        </head>

                        <body>

                            <table>
                                <caption><b>One Time Clean Up</b></caption>


                                <tr>
                                    <th> Social Media Platform </th>
                                    <th> Status </th>
                                </tr>
                                <tr>
                                    <td>Facebook</td>
                                    <td>
                                        <FONT COLOR="green">Finished with 5 clean ups</FONT>
                                    </td>

                                </tr>
                                <tr>
                                    <td>LinkedIn</td>
                                    <td>
                                        <FONT COLOR="green">Finished with 0 clean ups</FONT>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Twitter</td>
                                    <td>
                                        <FONT COLOR="red">Currently Under Review</FONT>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Instagram</td>
                                    <td>
                                        <FONT COLOR="red">Currently Under Review</FONT>
                                    </td>
                                </tr>
                            </table>
                        </body>
                    </div>


                    <?php
    } 
            if($query == "inter"){

            ?>
                        <div class="container">
                            <div style = "margin-bottom: 50">
                                
                                <section style="background-color: #242E70; padding: 2em; text-align: center;">

                                    <header>
                                <h3 style="color:#FFAB76;"><font face = "Pacifico">Intermittent Monitoring: $19.99 per month</font></h3>
                            </header>
                            <p style="color:#FFAB76;"> Last Billing Cycle: April 7, 2016 <br>
                                    Member since: March 31, 2016</p>
                                </section>

                            </div>
                        </div>

                        <div class="container" id="main"  >

                            <head>
                                <style type="text/css">
                                    td,
                                    th,
                                    table {
                                        border: medium solid black;
                                    }
                                    
                                    tr {
                                        text-align: center;
                                    }
                                    
                                    th {
                                        font-weight: bold;
                                    }

                                </style>
                            </head>

                            <body>

                                <table>
                                    <caption><b>Intermittent Monitoring</b></caption>


                                    <tr>
                                        <th> Social Media Platform </th>
                                        <th> Status </th>
                                    </tr>
                                    <tr>
                                        <td>Facebook</td>
                                        <td>
                                            <FONT COLOR="green">Finished with 10 clean ups</FONT>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>LinkedIn</td>
                                        <td>
                                            <FONT COLOR="red">Currently Under Review</FONT>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Twitter</td>
                                        <td>
                                            <FONT COLOR="red">Currently Under Review</FONT>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Instagram</td>
                                        <td>
                                            <FONT COLOR="red">Currently Under Review</FONT>
                                        </td>
                                    </tr>
                                </table>
                            </body>
                        </div>

                        <?php          
            }
            if($query == "consistent"){
            ?>


    <div class="container">
                            <div class="centerDiv">
                                <section style="background-color: #242E70; padding: 3em; text-align: center;">

                                    <header>
                                <h3 style="color:#242E70;"><font face = "Pacifico">Intermittent Monitoring</font></h3>
                            <header>
                                <h3 style="color:#FFAB76;"><font face = "Pacifico">Consistent Management</font></h3>
                            </header>
                            <p style="color:#FFAB76;">This package starts from scratch with what you have on your profiles. We will build a professional presence online that will help you in your employment search. This is the best package we offer and we guarantee your satisfaction.</p>

                                </section>

                            </div>
                        </div>
                
                            <div class="container" id="main">

                                <head>
                                    <style type="text/css">
                                        td,
                                        th,
                                        table {
                                            border: medium solid black;
                                        }
                                        
                                        tr {
                                            text-align: center;
                                        }
                                        
                                        th {
                                            font-weight: bold;
                                        }

                                    </style>
                                </head>

                                <body>

                                    <table>
                                        <caption><b>Consistent Monitoring</b></caption>


                                        <tr>
                                            <th> Social Media Platform </th>
                                            <th> Status </th>
                                        </tr>
                                        <tr>
                                            <td>Facebook</td>
                                            <td>
                                                <FONT COLOR="green">Finished with 0 clean ups</FONT>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>LinkedIn</td>
                                            <td>
                                                <FONT COLOR="green">Finished with 1 clean up</FONT>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Twitter</td>
                                            <td>
                                                <FONT COLOR="green">Finished with 1 clean up</FONT>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Instagram</td>
                                            <td>
                                                <FONT COLOR="red">Currently Under Review</FONT>
                                            </td>
                                        </tr>
                                    </table>
                                </body>
                            </div>








                            <?php          
            }
            ?>



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
