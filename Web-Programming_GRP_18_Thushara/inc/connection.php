<?php
ini_set('memory_limit', '1024M');
// Increase memory limit (temporary)


// Assigning of server information
$servername = "localhost";
$username = "amk1002093";
$password = "vEyfRQoU";
$dbname = "wp_amk1002093";

// creating connection 
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

?>
