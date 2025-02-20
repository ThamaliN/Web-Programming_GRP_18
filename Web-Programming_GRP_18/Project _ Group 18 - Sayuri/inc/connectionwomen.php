<?php
ini_set('memory_limit', '1024M');
// Increase memory limit (temporary)


// Assigning of server information
$servername = "localhost"; // $servername = "localhost";
$username = "amk1002093";  // $username = "amk1004804";
$password = "vEyfRQoU"; // $password = "reqAZZyd";
$dbname = "wp_amk1002093"; // $dbname = "wp_amk1004804";

// creating connection 
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

?>