<?php 

ini_set('memory_limit', '1024M');

// Assigning of server information

$servername = "localhost";
$username = "amk1002093";
$password ="vEyfRQoU";
$database= "wp_amk1002093";

// $connection = mysql_connect($servername, $username , $passwprd)

$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//echo "Connected successfully";

?>