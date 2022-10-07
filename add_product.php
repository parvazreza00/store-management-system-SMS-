<?php
include('database.php');

session_start();
$user_first_name = $_SESSION['user_first_name'] ;
$user_last_name = $_SESSION['user_last_name'] ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoreMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">

<?php
    if(!empty($user_first_name) && !empty($user_last_name)){
?>


    <?php
if(isset($_GET['product_name'])){
    $product_name          = $_GET['product_name'];
    $product_category      = $_GET['product_category'];
    $product_code          = $_GET['product_code'];
    $product_entrydate     = $_GET['product_entrydate'];

    $query = "INSERT INTO `product`(`product_name`, `product_category`,`product_code`, `product_entrydate` ) 
    VALUES ('$product_name','$product_category', '$product_code', '$product_entrydate')";

    if(mysqli_query($conn, $query)){
        echo "Product Data inserted";
    }else{
        echo "Product Not inserted";
    }
}

?>

<?php

    $sql = "SELECT * FROM category";
    $query = mysqli_query($conn, $sql);

?>



    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    Product : <br>
    <input type="text" name="product_name"><br><br>
    Product Category: <br>
    <select name="product_category" id="">
        <?php
            while($data = mysqli_fetch_assoc($query)){
            $category_id = $data['category_id'];
            $category_name = $data['category_name'];

            echo "<option value='$category_id'>$category_name</option>";
        }
        ?>
    </select><br><br>  
    Product Code: <br>
    <input type="text" name="product_code"><br><br>
    Product Entry Date : <br>
    <input type="date" name="product_entrydate"><br><br>
    <input type="submit" name="" id="" value="Submit">

</form>


<?php
}else{
    header('location:login.php');
}
?>
    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>