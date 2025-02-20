<?php 
require_once('config/connection.php');

$title = "login page";
$md = "login";
include 'header.php';

// Check if the form is submitted
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == 'madhavi' && $password == 'pass') {
        echo "Login successful";
    } else {
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">

</head>
<body>
    <form action="login.php" method="post">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login" name="submit">
    </form>
</body>
</html>

<?php 
include 'footer.php';
?>

