<?php
include 'inc/connectionwomen.php';

// Add error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if we're receiving JSON data
$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

if ($contentType === "application/json") {
    // Handle JSON data
    $content = trim(file_get_contents("php://input"));
    $decoded = json_decode($content, true);
    
    $productType = $decoded['product_type'];
    $name = $decoded['name'];
    $price = $decoded['price'];
    $category_id = $decoded['category_id'];
    $size = $decoded['size'];
} else {
    // Handle regular POST data
    $productType = $_POST['product_type'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    $size = $_POST['size'];
}

// Escape inputs to prevent SQL injection
$productType = mysqli_real_escape_string($connect, $productType);
$name = mysqli_real_escape_string($connect, $name);
$price = mysqli_real_escape_string($connect, $price);
$category_id = mysqli_real_escape_string($connect, $category_id);
$size = mysqli_real_escape_string($connect, $size);

$sql = "INSERT INTO product_table_women (product_type, name, price, category_id, size) 
        VALUES ('$productType', '$name', '$price', '$category_id', '$size')";

if ($connect->query($sql) === TRUE) {
    if ($contentType === "application/json") {
        // Return JSON response
        echo json_encode(['success' => true, 'message' => 'Product added successfully']);
    } else {
        // Redirect for regular form submission
        header("Location: index.php?submit=success");
    }
} else {
    if ($contentType === "application/json") {
        // Return JSON error
        echo json_encode(['success' => false, 'message' => $connect->error]);
    } else {
        // Show error for regular form submission
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

$connect->close();
?>
