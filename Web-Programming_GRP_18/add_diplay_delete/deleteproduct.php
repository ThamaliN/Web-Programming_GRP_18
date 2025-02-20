<?php
include 'db.php';

if (!isset($_GET['category_id']) || !ctype_digit($_GET['category_id'])) {
    die("Invalid category ID.");
}

$category_id = intval($_GET['category_id']);

// Check if any products exist for the given category_id before deleting
$checkQuery = "SELECT * FROM product_table_kids WHERE category_id = ?";
$checkStmt = $connect->prepare($checkQuery);
$checkStmt->bind_param("i", $category_id);
$checkStmt->execute();
$result = $checkStmt->get_result();

if ($result->num_rows === 0) {
    die("No products found for this category.");
}

$checkStmt->close();

// Proceed with deletion
$query = "DELETE FROM product_table_kids WHERE category_id = ?";
$stmt = $connect->prepare($query);

if (!$stmt) {
    die("Prepare statement failed: " . $connect->error);
}

$stmt->bind_param("i", $category_id);

if ($stmt->execute()) {
    header("Location: display.php?delete=success");
    exit();
} else {
    die("Error deleting product: " . $stmt->error);
}

$stmt->close();
$connect->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Kids Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2>Kids Product List</h2>

    <?php if (isset($_GET['delete']) && $_GET['delete'] === 'success') { ?>
        <div class="alert alert-success">Product deleted successfully!</div>
    <?php } ?>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Type</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category ID</th>
                <th>Size</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['product_type']); ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['category_id']; ?></td>
                    <td><?php echo $row['size']; ?></td>
                    <td>
                        <a href="delete_product.php?category_id=<?php echo $row['category_id']; ?>" class="btn btn-danger btn-sm" 
                           onclick="return confirm('Are you sure you want to delete all products in this category?');">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>

<?php
$connect->close();
?>
