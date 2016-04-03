<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["login"]);
unset($_SESSION["error"]); 
session_unset();
session_destroy();
header('Location: index.php'); 
?>