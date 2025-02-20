<?php require_once('inc/connection.php');  ?>
<?php

$query = "UPDATE product_table_women SET size= 'UK16' WHERE id = 1";

$result_set = mysqli_query ($conn, $query);

if ($result_set) {
    echo mysqli_affected_rows ($conn) . " Records updated";
} else {
    echo "Datebase query failed";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Query</title>
</head>
<body>
   
</body>
</html>
<?php mysqli_close ($conn);  ?>
