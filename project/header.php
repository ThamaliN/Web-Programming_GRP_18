<?php require_once('inc/connection.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" conyent="<?php echo $md;?>">

    <title>
        <?php echo $title;?>
    </title>
    <link rel="stylesheet" href="frontpagestyle1.css">
    <link rel="stylesheet" href="frontpagestyles2.css">

</head>
<body>

    <!-- Logo Section -->
    <div class="logo">
        <img src="Front Images/Logo 1.jpg" alt="Logo Image" class="logo-image">
    </div>   
        <div class="fashion">
            <h1 class="brand-name">BlackThread</h1>
            <p class="motto">Effortless Elegance for Every Day</p>
        </div>
        
    <!-- Login -->
    <div class="header">

    <div class="login-section">
        <a href="login.html" class="login-link">
            <h1 class="login-word">Login</h1>
        </a> 
        <img src="Front Images/login icon.png" alt="Login Image" class="login-image">
    </div>

    <!-- Cart -->
    <div class="cart-section">
        <a href="cart.html" class="cart-link">
        <h1 class="cart-word">Cart</h1>
        </a>
        <img src="Front Images/cart.png" alt="Cart Image" class="cart-image">
    </div>
    </div>
        

    <!-- categories -->
    <header class="categories">
        <nav>
            <div class="nav-links">
                <ul>
                    <li><a href="frontpage.html">Home</a></li> 
                    <li><a href="women.html">Women</a></li>
                    <li><a href="men.html">Men</a></li> 
                    <li><a href="kids.html">Kids</a></li> 
                    <li><a href="giftvoucher.html">Gifts Cards</a></li> 
                    <li><a href="discounts.html">Discounts</a></li> 
                    <li><a href="wishlist.html">Wish List</a></li> 
                    
                </ul>
            </div>
        </nav>
    </header>
<?php mysqli_close ($conn);  ?>
    
