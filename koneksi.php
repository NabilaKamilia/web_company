<?php 
$servername = "localhost"; 
$database = "tsa_resto"; 
$username = "root"; 
$password = ""; 
 
// Create connection 
$connect = new mysqli($servername, $username, $password,$database);  
// Check connection 
// if ($connect->connect_error) { 
//   die("Connection failed: " . $connect->connect_error); 
// } 
// echo "Connected successfully"; 
?> 
