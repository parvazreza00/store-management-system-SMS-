<?php
include('database.php');

session_start();
$user_first_name = $_SESSION['user_first_name'] ;
$user_last_name = $_SESSION['user_last_name'] ;

?>

<?php
$sql1 ="SELECT * FROM category";
$query1 = mysqli_query($conn, $sql1);

$category_list = array();

while($data = mysqli_fetch_assoc($query1)){
    $category_id = $data['category_id'];
    $category_name = $data['category_name'];
 
    $category_list[$category_id] = $category_name;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-2">

<?php
    if(!empty($user_first_name) && !empty($user_last_name)){
?>

<?php
    $sql = "SELECT * FROM `product`";
    $query = mysqli_query($conn, $sql);

    echo "<table class='table'><tr><th>Product Id</th><th>Product Name</th>
                    <th>Product category</th><th>Product code</th><th>Action</th></tr>";
    while($data = mysqli_fetch_assoc($query)){
        $product_id = $data['product_id'];
        $product_name = $data['product_name'];
        $product_category = $data['product_category'];
        $product_code = $data['product_code'];

        echo "<tr><td>$product_id</td>
        <td>$product_name</td>
        <td>$category_list[$product_category]</td>
        <td>$product_code</td>
        <td><a href='edit_product.php?id=$product_id' class='btn btn-primary'> Edit </a></td>
        <td><a href='#' class='btn btn-danger'>Delete</a></td></tr>";
    }
    echo "</table>";

   

}else{
    header('location:login.php');
}

?>


    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>