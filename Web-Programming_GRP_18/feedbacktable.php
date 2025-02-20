<?php
include 'inc/connection.php';

// Add error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if we're receiving JSON data
$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

if ($contentType === "application/json") {
    // Handle JSON data
    $content = trim(file_get_contents("php://input"));
    $decoded = json_decode($content, true);
    

    $customer_name = $decoded['customer_name'];
    $category_id = $decoded['category_id'];
    $comment = $decoded['comment'];
    $ratings = $decoded['ratings'];
} else {
    // Handle regular POST data

    $customer_name = $_POST['customer_name'];
    $category_id = $_POST['category_id'];
    $comment = $_POST['comment'];
    $ratings = $_POST['ratings'];
}

// Escape inputs to prevent SQL injection

$customer_name = mysqli_real_escape_string($connect, $customer_name);
$category_id = mysqli_real_escape_string($connect,  $category_id);
$comment = mysqli_real_escape_string($connect, $comment);
$ratings = mysqli_real_escape_string($connect, $ratings);

$sql = "INSERT INTO feedback_table (customer_name, category_id, comment, ratings) 
        VALUES ( '$customer_name', ' $category_id', '$comment', '$ratings')";

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
