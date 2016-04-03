<?php

session_start();
$sessionUsername = $_POST['email'];
$sessionPassword = $_POST['password'];


//$db = mysqli_connect('localhost', 'root', 'password', 'test');

$db = mysqli_connect('localhost', 'root', 'password', 'test');
if($db->connect_error){
    print "Error - Could not connnect to MySQL";
    exit;
}

$result = mysqli_query($db,"SELECT * FROM SiteUsers WHERE email = '$sessionUsername' AND password = '$sessionPassword'");    
if(!$result) {
	die("you suck: " . mysql_error());
}
 if($row = mysqli_fetch_array($result)){
     //session variables to be used on each page!!!
     $_SESSION["Name"]=$row['first'];
     $_SESSION["Email"]=$row['email'];
     
     $_SESSION["login"]= "true";
     header("Location: loggedIn.php");
        }
else{
    
    //Return to page with a session error that they aren't logged in 
    
}

?>