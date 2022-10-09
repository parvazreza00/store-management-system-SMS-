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
    <title>Edit Product</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<?php
    if(!empty($user_first_name) && !empty($user_last_name)){
?>
    

    <div class="container"><!--container start -->
        <div class="container-fluid border-bottom border-success mb-0"><!--start top bar -->
                    <?php include('topbar.php'); ?>
        </div><!--end top bar -->

        <div class="container-fluid mt-1"><!--body -->
            <div class="row"><!--start body row -->
                <div class="col-md-3 p-0 m-0 border-end-0"><!--start left body part -->
                    <?php include('leftbar.php'); ?>
                </div><!--end left body part -->  
                              
                <div class="col-md-9"><!--start right body part -->
                <div class="row p-2">
                    <div class="col-md-1"></div>
                    <div class="col-md-9">
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
    <input type="text" name="product_name" class="form-control" value="<?php echo $product_name ?> "><br>
    Product Category: <br>
    <select name="product_category" id="" class="form-control">
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
    </select><br>
    Product Code: <br>
    <input type="text" class="form-control" name="product_code" value="<?php echo $product_code ?> "><br>
    Product Entry Date : <br>
    <input type="date" class="form-control" name="product_entrydate" value="<?php echo $product_entrydate ?>"><br><br>
    <input type="text" class="form-control" name="product_id" id="" value="<?php echo $getid; ?>" hidden>
    <input type="submit" name="" id="" value="Submit" class="btn btn-success">

</form>

                </div><!--end right body part -->
            </div><!--end body row -->
        </div>

        <div class="container-fluid border-top border-success"><!--bottom bar -->
          <?php include('bottombar.php'); ?>
        </div>

<?php 
    }else{
header('location:login.php');
}
?>
    
</div><!--end container -->




    






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>