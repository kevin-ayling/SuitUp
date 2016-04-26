<?php
session_start();

$Email = $_POST['email'];
$Password = $_POST['password'];
$Password2 = $_POST['password2'];
$First = $_POST['fname'];
$Last = $_POST['lname'];
$Address = $_POST['address'];
$City = $_POST['city'];
$State = $_POST['state'];
$Zip = $_POST['zip'];








if($_POST['password']==$_POST['password2']){
 
    //connect to database
$db = mysqli_connect('localhost', 'root', 'clabmell', 'test');
if($db->connect_error){
    print "Error - Could not connnect to MySQL";
    exit;
}
  
//making the table    

$siteUsers = $db->query("create table SiteUsers(email char(30) not null, password char(30) not null, first char(30) not null, last char(30) not null, address char(30) not null, city char(30) not null, state char(15) not null, zip char(15) not null, package char(30) not null)");
mysql_query($siteUsers);
    
    
    $result = mysqli_query($db,"SELECT * FROM SiteUsers WHERE email = '$Email'");    
    if(!$result) {
        die("you suck: " . mysql_error());
    }    
    
 
    
 if($row == mysqli_fetch_array($result)){
    //there is already someone with that email so throw an error message
     $_SESSION["error"] = "Someone already exists with this email, please try again!";
  
     
     header("Location: SignUp.php");
    }      
    
    
   else{ 
    

 //inserts people into table   
 $mailpath = '/xampp/htdocs/phpmailer';
 $path = get_include_path();
  set_include_path($path . PATH_SEPARATOR . $mailpath);
  require 'PHPMailerAutoload.php';
 
       
  $mail = new PHPMailer();
 
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPAuth = true; // enable SMTP authentication
  $mail->SMTPSecure = "tls"; // sets tls authentication
  $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server; or your email service
  $mail->Port = 587; // set the SMTP port for GMAIL server; or your email server port
  $mail->Username = "suituptoday2016@gmail.com"; // email username
  $mail->Password = "suitup2016"; // email password

  $sender = "suituptoday2016.com";
  $receiver = strip_tags($_POST['email']);
  $Money = $_POST['money'];

       
$query = "insert into SiteUsers values ('$Email', '$Password', '$First', '$Last', '$Address', '$City', '$State', '$Zip', '$Money')"; 
$db->query($query) or die ("Invalid insert " . $db->error); 
   
       
require_once('/xampp/htdocs/stripe/init.php');
\Stripe\Stripe::setApiKey(" sk_test_zaI1GQi4SHH7RoBgwob6cAaw");

//Get the credit card details submitted by the form
$token = $_POST['stripeToken'];
       
       
 

$price = 0;
if($Money =='oneTime'){
    $message= "One Time Clean Up: $9.99 \n";
    $price += 9.99;
    
    
    try {  
  $charge = \Stripe\Charge::create(array(
    "amount" => 999, // amount in cents, again
    "currency" => "usd",
    "source" => $token,
    "description" => "Example charge"
    ));
    
    
    
    $mail->addAddress($receiver);
  $mail->SetFrom("suituptoday2016@gmail.com", "Suit Up");
  $mail->Subject = "Purchase";
  $mail->Body = "Thank you $First $Last! \n Your Purchase History From Suit Up: \n $message Total Price: $$price \n \n";
      

  // echo 'Everything ok so far' . var_dump($mail);
  if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
   } 
   else { 
      //header("Location: index.php");
   }
    
    
} catch(\Stripe\Error\Card $e) {

}
    
}

if($Money == 'inter'){
    $message = "Intermediate Clean Up: $19.99 \n";
    $price += 19.99;
    
    try {  
  $charge = \Stripe\Charge::create(array(
    "amount" => 1999, // amount in cents, again
    "currency" => "usd",
    "source" => $token,
    "description" => "Example charge"
    ));
    
    
    
    $mail->addAddress($receiver);
  $mail->SetFrom("suituptoday2016@gmail.com", "Suit Up");
  $mail->Subject = "Purchase";
  $mail->Body = "Thank you $First $Last! \n Your Purchase History From Suit Up: \n $message Total Price: $$price \n \n";
      

  // echo 'Everything ok so far' . var_dump($mail);
  if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
   } 
   else { 
      //header("Location: index.php");
   }
    
    
} catch(\Stripe\Error\Card $e) {

}
    
}

if($Money == 'consistent'){
    $message = "Consistent Clean Up: $29.99 \n";
    $price += 29.99;
    
    
    try {  
  $charge = \Stripe\Charge::create(array(
    "amount" => 2999, // amount in cents, again
    "currency" => "usd",
    "source" => $token,
    "description" => "Example charge"
    ));
    
    
    
    $mail->addAddress($receiver);
  $mail->SetFrom("suituptoday2016@gmail.com", "Suit Up");
  $mail->Subject = "Purchase";
  $mail->Body = "Thank you $First $Last! \n Your Purchase History From Suit Up: \n $message Total Price: $$price \n \n";
      

  // echo 'Everything ok so far' . var_dump($mail);
  if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
   } 
   else { 
      //header("Location: index.php");
   }
    
    
} catch(\Stripe\Error\Card $e) {

}
}
    

       
       
       
   }
    
    
    
    
    
  header("Location: index.php");
    

}
?>
