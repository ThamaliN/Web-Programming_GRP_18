<!-- index.php -->
<?php include 'inc/connection.php'; ?>
<?php
$title="Product Type - Men";
$md="Product Input - Men";
include 'header.php'?>


<body class="container mt-4">
    <h2>Input the product details:</h2>
    <form name="form1" method="post" action="producttable.php">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="product_type">Product Type:</label>
                    <input type="text" class="form-control" id="product_type" name="product_type" required>
                </div>
                <div class="col">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="row">
                <div class="col">
                    <label for="price">Price:</label>
                    <input type="number"  class="form-control" id="price" name="price" required>
                </div>
                <div class="col">
                    <label for="category_id">Category ID:</label>
                    <input type="number" class="form-control" id="category_id" name="category_id" required>
                </div>
                <div class="col">
                    <label for="size">Size:</label>
                    <select class="form-control" id="size" name="size">
                        <option value="UK12">UK12</option>
                        <option value="UK14">UK14</option>
                        <option value="UK16">UK16</option>
                        <option value="UK18">UK18</option>
                        <option value="Others">Others</option>
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
