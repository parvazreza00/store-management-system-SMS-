<?php
include('database.php');

?>

<?php
$sql1 ="SELECT * FROM product";
$query1 = mysqli_query($conn, $sql1);

$product_list = array();

while($data = mysqli_fetch_assoc($query1)){
    $product_id  = $data['product_id'];
    $product_name = $data['product_name'];
 
    $product_list[$product_id] = $product_name;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-2">
    

<?php
    $sql = "SELECT * FROM `store_product`";
    $query = mysqli_query($conn, $sql);

    echo "<table class='table'><tr><th>Id</th><th>Product Name</th>
                    <th>Product Quantity</th><th>ENtry Date</th><th>Action</th></tr>";
    while($data = mysqli_fetch_assoc($query)){
        $store_product_id  = $data['store_product_id'];
        $store_product_name = $data['store_product_name'];
        $store_product_quantity = $data['store_product_quantity'];
        $store_product_entrydate = $data['store_product_entrydate'];

        echo "<tr><td>$store_product_id</td>        
        <td>$product_list[$store_product_name]</td>
        <td>$store_product_quantity</td>
        <td>$store_product_entrydate</td>
        <td><a href='edit_store_product.php?id=$store_product_id' class='btn btn-primary'> Edit </a></td>
        <td><a href='#' class='btn btn-danger'>Delete</a></td></tr>";
    }
    echo "</table>";

   



?>


    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>