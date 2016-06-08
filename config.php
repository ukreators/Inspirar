<?php
//define("LOCALHOST","host");
$host='localhost';
$user='root';
$password='';
$database='blogdata';
//define("PAASWORD","");
//define("DATABASE","blogdata");

$connection = mysqli_connect($host, $user, $password,$database) or die ("<p class='error'>Sorry, we were unable to connect to the database server.</p>");

?>