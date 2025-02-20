<?php require_once('inc/connection.php');?>
<?php
$title="Home page";
$md="incoming tide";
include 'header.php'?>



    <!-- First 4 images -->

    <div class="first-images"> 
        <img src="Front Images/Front Image 1 .jpg">
        <img src="Front Images/Front Image 2.jpg">
        <img src="Front Images/Front Image 3.jpg">
        <img src="Front Images/Front Image 4.jpg">           

    </div>

    <!-- Second 4 images -->
    <div class="second-images"> 
        <img src="Front Images/Front Image 5.jpg">
        <img src="Front Images/Front Image 6.jpg">
        <img src="Front Images/Front Image 7.jpg">
        <img src="Front Images/Front Image 8.jpg">      

    </div>   

    <!-- New In -->
    <header class="new-in">
        <nav>
            <div class="nav-links">
                <ul>
                    <li><a href="input.php">New In - Men</a></li> <!--will include the correct link lastly -->
                    <li><a href="input.php">New In - Women</a></li> 
                    <li><a href="input.php">New In - Kids</a></li>            
                </ul>
            </div>
        </nav>
    </header>

        <div class="image-grid">

            <p><a href="women.html" target="_blank" rel="external nofollow"> 
                <img src="Front Images/Collection 2.jpg" alt="Shop Women" width="100" height="48" /><br />Shop Women </a></p>
                
    
                <p><a href="men.php" target="_blank" rel="external nofollow"> 
                    <img src="Front Images/Collection 3.jpg" alt="Shop Men" width="100" height="48" /><br /> Shop Men </a></p>
        </div>
    
    
    
        <div class="image-grid">
            <p><a href="kids.html" target="_blank" rel="external nofollow"> 
                <img src="Front Images/Collection 6.jpg" alt="Shop Kids Girls" width="100" height="48" /><br /> Shop Kids Girls </a></p>
    
            <p><a href="kids.html" target="_blank" rel="external nofollow"> 
                    <img src="Front Images/Collection 7.jpg" alt="Shop Kids Boys" width="100" height="48" /><br /> Shop Kids Boys </a></p>
        </div>
    
        <?php include 'footer.php' ?>
<?php mysqli_close ($conn);  ?>