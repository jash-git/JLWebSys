<?php

$server_name= "localhost";
$user_name= "root";
$password= "usbw";
$database_name= "jlwebsys";
$conn= mysqli_connect($server_name , $user_name , $password , $database_name); 
if ($conn) { 
//echo "connected" ;
$conn->query("SET NAMES UTF8"); 
}

?> 

