<!-- index.php -->
<?php include 'inc/connection.php'; ?>
<?php
$title="Product Type - Men";
$md="Product Input - Men";
include 'header.php'?>


<body class="container mt-4">
    <h2>Customer Feedback:</h2>
    <form name="form1" method="post" action="feedbacktable.php">
        <div class="form-group">
            <div class="row">
                
                <div class="col">
                    <label for="customer_name">Customer_name:</label>
                    <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                </div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="row">
                <div class="col">
                    <label for="category_id">category_id:</label>
                    <input type="number"  class="form-control" id="category_id" name="category_id" required>
                </div>
                <div class="col">
                    <label for="comment">Comment:</label>
                    <input type="text" class="form-control" id="comment" name="comment" required>
                </div>
                <div class="col">
                    <label for="ratings">Ratings:</label>
                    <select class="form-control" id="size" name="size">
                        <option value="   ">Ratings</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
    </form>

    <?php if (isset($_GET['submit']) && $_GET['submit'] === 'success') { ?>
        <div class="alert alert-success mt-3">
            Product added successfully!
        </div>
    <?php } ?>

</body>
</html>
<?php include 'footer.php' ?>
