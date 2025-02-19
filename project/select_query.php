<?php require_once('inc/connection.php');  ?>
<?php 

$query = "SELECT id, product_type, name,price,category_id,size,stock_quantity FROM product_table";

$result_set = mysqli_query($conn, $query);

if ($result_set) {
    echo mysqli_num_rows($result_set) . "Record found. <hr>";

    $table = '<table>';
    $table .= '<tr><th>id</th><th>product_type</th><th>name</th><th>price</th><th>category_id</th><th>size</th><th>stock_quantity</th><tr>';

    while ($record = mysqli_fetch_assoc($result_set)){
        $table .='<tr>';
        $table .='<td>'. $record['id'].'</td>';
        $table .='<td>'. $record['product_type'].'</td>';
        $table .='<td>'. $record['name'].'</td>';
        $table .='<td>'. $record['price'].'</td>';
        $table .='<td>'. $record['category_id'].'</td>';
        $table .='<td>'. $record['size'].'</td>';
        $table .='<td>'. $record['stock_quantity'].'</td>';
        $table .='</tr>';
        //echo $record ['name'] . "<br>";
    }

    $table .= '</table>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Query</title>
    <style>
        table {border-collapse: collapse;}
        td , th {border: 1px solid black; padding: 10px;}
    </style>
</head>
<body>
    <?php echo $table; ?>
</body>
</html>
<?php mysqli_close ($conn);  ?>