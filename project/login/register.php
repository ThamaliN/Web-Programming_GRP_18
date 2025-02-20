<?php
require 'config/connection.php';  // Include the database connection

$message = "";  // To store success/error messages

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST['first_name'];  
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address']; 

    // Check if email already exists
    $checkStmt = $pdo->prepare("SELECT * FROM login WHERE email = ?");
    $checkStmt->execute([$email]);

    if ($checkStmt->rowCount() > 0) {
        $message = "⚠️ Email already exists!";
    } else {
        // Hash the password for security
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Insert user into the 'login' table
        $stmt = $pdo->prepare("INSERT INTO login (first_name, last_name, email, password, address) VALUES (?, ?, ?, ?, ?)");
        if ($stmt->execute([$first_name, $last_name, $email, $passwordHash, $address])) {
            $message = "✅ Registration successful! <a href='login.php'>Login here</a>";
        } else {
            $message = "❌ Error in registration.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>

        <?php if (!empty($message)) { echo "<p>$message</p>"; } ?>

        <form action="register.php" method="POST">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="address" placeholder="Address" required> 

            <div class="password-wrapper">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <span class="toggle-password">👁</span>
            </div>
            <div id="strength"></div>

            <button type="submit">Register</button>
        </form>

        <a href="login.php">Already have an account? Login here</a>
    </div>

    <script src="script.js"></script>
</body>
</html>
