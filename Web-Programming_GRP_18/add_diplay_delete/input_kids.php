


<!-- index.php -->
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>Input the product details:</h2>
    <form name="form1" method="post" action="product_table.php">
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
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
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

