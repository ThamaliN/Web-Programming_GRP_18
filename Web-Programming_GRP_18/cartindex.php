<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <link rel="stylesheet" href="cartstyles.css">
</head>
<body>

<div class="logo">
    <img src="Front Images/Logo 1.jpg" alt="Logo Image" class="logo-image">
</div>
<div class="fashion">
    <h1 class="brand-name">BlackThread</h1>
    <p class="motto">Effortless Elegance for Every Day</p>
</div>

<div class="header">
    <div class="login-section">
        <?php if (isset($_SESSION['username'])): ?>
            <p>Welcome, <?= htmlspecialchars($_SESSION['username']) ?> | <a href="functions.php?logout=true">Logout</a></p>
        <?php else: ?>
            <a href="#loginModal" class="login-link">Login</a>
        <?php endif; ?>
    </div>

    <div class="cart-section">
        <h1 class="cart-word">Cart</h1>
    </div>
</div>

<header class="categories">
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Women</a></li>
            <li><a href="#">Men</a></li>
            <li><a href="#">Kids</a></li>
            <li><a href="#">Gift Cards</a></li>
            <li><a href="#">Discounts</a></li>
            <li><a href="#">Wish List</a></li>
        </ul>
    </nav>
</header>

<!-- Products Section -->
<div class="products">
    <?php
    $products = [
        ["name" => "Product 1", "price" => 25.99, "image" => "Front Images/Front Image 6.jpg"],
        ["name" => "Product 2", "price" => 30.99, "image" => "Front Images/Front Image 8.jpg"],
        ["name" => "Product 3", "price" => 19.99, "image" => "Front Images/Front Image 3.jpg"],
    ];

    foreach ($products as $product):
    ?>
        <div class="product">
            <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
            <p><?= $product['name'] ?> - $<?= number_format($product['price'], 2) ?></p>
            <form method="post" action="functions.php">
                <input type="hidden" name="product_name" value="<?= $product['name'] ?>">
                <input type="hidden" name="price" value="<?= $product['price'] ?>">
                <button type="submit" name="add_to_cart">Add to Cart</button>
                <button type="submit" name="add_to_wishlist">❤️ Add to Wishlist</button>
            </form>
        </div>
    <?php endforeach; ?>
</div>

<!-- Login Modal -->
<div id="loginModal" class="modal">
    <h2>Customer Login</h2>
    <form method="post" action="functions.php">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="login">Login</button>
    </form>
</div>

<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>Shop</h3>
            <ul>
                <li><a href="frontpage.html">Home</a></li>
                <li><a href="frontpage.html">New In</a></li>
                <li><a href="frontpage.html">View Collection</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Information</h3>
            <ul>
                <li><a href="About Us.html">About Us</a></li>
                <li><a href="Contact Us.html">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Terms Of Use</h3>
            <ul>
                <li><a href="terms.html">Terms and Conditions</a></li>
                <li><a href="Privacy Policy.html">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="footer-section social-media">
            <h3>Follow Us On</h3>
            <a href="https://www.facebook.com"><img src="Front Images/Footer2.jpg"></a>
            <a href="https://www.instagram.com"><img src="Front Images/Footer1.jpg"></a>
        </div>
    </div>
</footer>

</body>
</html>
