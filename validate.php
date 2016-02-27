<?php
session_start();

$Email = $_POST['email'];
$Password = $_POST['password'];
$Password2 = $_POST['password2'];
$Last = $_POST['lname'];
$Address = $_POST['address'];
$City = $_POST['city'];
$State = $_POST['state'];
$Zip = $_POST['zip'];




if($_POST['password']==$_POST['password2']){
 
    //connect to database
$db = mysqli_connect('localhost', 'root', 'password', 'test');
if($db->connect_error){
    print "Error - Could not connnect to MySQL";
    exit;
}
  
//making the table    

$siteUsers = $db->query("create table SiteUsers(email char(30) not null, password char(30) not null, first char(30) not null, last char(30) not null, address char(30) not null, city char(30) not null, state char(15) not null, zip char(15) not null)");
mysql_query($siteUsers);
    
    
    $result = mysqli_query($db,"SELECT * FROM SiteUsers WHERE email = '$Email'");    
    if(!$result) {
        die("you suck: " . mysql_error());
    }    
    
    
 if($row = mysqli_fetch_array($result)){
    //there is already someone with that email so throw an error message
     
     
            }    
    
   else{ 
 //inserts people into table   
       $query = "insert into SiteUsers values ('$Email', '$Password', '$Password2', '$Last', '$Address', '$City', '$State', '$Zip')"; 
   		$db->query($query) or die ("Invalid insert " . $db->error); 
    
   }
  header("Location: index.html");
    
}

?>
