<?php
include('database.php');

require('myfunction.php');

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
    <title>Store product</title>
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
    $getid = $_GET['id'];

    $sql = "SELECT * FROM store_product WHERE store_product_id='$getid'";

    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);

    $store_product_id = $data['store_product_id'];
    $store_product_name = $data['store_product_name'];
    $store_product_quantity = $data['store_product_quantity'];
    $store_product_entrydate = $data['store_product_entrydate'];

}

if(isset($_GET['store_product_name'])){
    $edit_store_product_name     = $_GET['store_product_name'];
    $edit_store_product_quantity = $_GET['store_product_quantity'];
    $edit_store_product_entrydate= $_GET['store_product_entrydate'];
    $edit_store_product_id       = $_GET['store_product_id'];
    
    $sql2 = "UPDATE `store_product` SET `store_product_name`='$edit_store_product_name',`store_product_quantity`='$edit_store_product_quantity',`store_product_entrydate`='$edit_store_product_entrydate' WHERE `store_product_id`= '$edit_store_product_id'";

    if($query2 = mysqli_query($conn, $sql2)){
        echo "Product store updated";
    }else{
        echo "prodcut store not updated";
    }
    
}

?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    
    Product: <br>
    <select name="store_product_name" id="" class="form-control">
        <?php

            $sql = "SELECT * FROM product";
            $query = mysqli_query($conn, $sql);

            while($data = mysqli_fetch_assoc($query)){
                $data_id = $data['product_id'];
                $data_name = $data['product_name'];

                ?>

            <option value='<?php echo $data_id?>' <?php 
                if($store_product_name==$data_id) echo 'selected'; ?>>
                    <?php echo $data_name; ?>
            </option>;
                
                <?php
            }
        
        ?>
    </select><br> 
    Product store quantity: <br>
    <input type="number" class="form-control" name="store_product_quantity" value="<?php echo $store_product_quantity; ?>"><br>
    Product Store Entry Date : <br>
    <input type="date" class="form-control" name="store_product_entrydate" value="<?php echo $store_product_entrydate; ?>"><br>
    <input type="text"  class="form-control" name="store_product_id" id="" value="<?php echo $store_product_id; ?>" hidden>
    <input type="submit" name="" id="" value="Submit" class="btn btn-success">

</form>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                

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