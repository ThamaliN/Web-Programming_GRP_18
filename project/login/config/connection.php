<?php
// Database connection settings
$host = "localhost";  
$username = "amk1002388";  // Corrected: Previously used $user instead
$password = "FVQYNFbz";   // Corrected: Previously used $pass instead
$dbname = "wp_amk1002388"; // The database we created

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "✅ Database connected successfully!";
} catch (PDOException $e) {
    die("❌ Database connection failed: " . $e->getMessage());
}
?>
