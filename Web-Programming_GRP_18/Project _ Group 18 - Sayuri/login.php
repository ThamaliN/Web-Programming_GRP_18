<?php 
$title = "Login Page";
$md = "Black Thread Login Page";
include ('header.php'); ?>
    
    
    <div class="login-container">
        <h1 class="login-title"> BlackThread Customer Login</h1>
        <hr class="divider">
        <form class="login-form">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email">
            
            <label for="password" class="form-label">Password</label>
            <div class="password-container">
                <input type="password" id="password" name="password" class="form-input" placeholder="Enter your password">
                <a href="#" class="forgot-password">Forgot your password?</a>
            </div>
            
            <button type="submit" class="login-button">Sign In</button>
        </form>
        <div class="signup-link">
            <p>New Customer? <a href="#">Sign up</a></p>
        </div>
    </div>

    <?php include ('footer.php'); ?>  