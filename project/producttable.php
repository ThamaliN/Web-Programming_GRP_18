<?php include '<inc/connection.php';
//<?php require_once('inc/connection.php');  


$product_type = $_POST['product_type'];
$name = $_POST['name'];
$price =$_POST['price'];
$category_id =$_POST['category_id']
$size = $_POST['size']



$query = "INSERT INTO product_table_men (product_type, name,price, category_id, size ) VALUES 
('{$product_type}','{$name}','{$price}',{$category_id},'{$size}')";



$result = mysqli_query($conn, $query);

if ($result){
    echo "1 Recorded data";
}
else{
    echo "Database query failed";
}


?>

<?php mysqli_close ($conn);  ?>