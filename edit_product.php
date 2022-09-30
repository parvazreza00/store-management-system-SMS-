<?php
include('database.php');

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
if(isset($_GET['id'])){

    $getid =$_GET['id'];
    $sql1 = "SELECT * FROM product WHERE product_id='$getid'";
    $query1 = mysqli_query($conn, $sql1);
    $data = mysqli_fetch_assoc($query1);
    
    $product_name          = $data['product_name'];
    $product_category      = $data['product_category'];
    $product_code          = $data['product_code'];
    $product_entrydate     = $data['product_entrydate'];
}

if(isset($_GET['product_name'])){
    $edit_product_name          = $_GET['product_name'];
    $edit_product_category      = $_GET['product_category'];
    $edit_product_code          = $_GET['product_code'];
    $edit_product_entrydate     = $_GET['product_entrydate'];
    $edit_product_id            = $_GET['product_id'];

    $sql2 = "UPDATE `product` SET `product_name`='$edit_product_name',`product_category`='$edit_product_category',`product_code`='$edit_product_code',`product_entrydate`='$edit_product_entrydate' WHERE `product_id`= '$edit_product_id'";

    if($query2 = mysqli_query($conn, $sql2)){
        echo "Product updated";
    }else{
        echo "prodcut not updated";
    }
    
}

?>

<?php

    $sql = "SELECT * FROM category";
    $query = mysqli_query($conn, $sql);

?>




    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    Product : <br>
    <input type="text" name="product_name" value="<?php echo $product_name ?> "><br><br>
    Product Category: <br>
    <select name="product_category" id="">
        <?php
            while($data = mysqli_fetch_assoc($query)){
            $category_id = $data['category_id'];
            $category_name = $data['category_name'];
            ?>

            <option value='<?php echo $category_id; ?>' 
                <?php if($category_id == $product_category) echo 'selected'; ?> >
                <?php echo $category_name; ?>
            </option>;

        <?php
            }
        ?>
    </select><br><br>  
    Product Code: <br>
    <input type="text" name="product_code" value="<?php echo $product_code ?> "><br><br>
    Product Entry Date : <br>
    <input type="date" name="product_entrydate" value="<?php echo $product_entrydate ?>"><br><br>
    <input type="text" name="product_id" id="" value="<?php echo $getid; ?>" hidden>
    <input type="submit" name="" id="" value="Submit">

</form>



    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>