<?php
include('database.php');

require('myfunction.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spend Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">


    <?php
if(isset($_GET['spend_product_name'])){

    $spend_product_name          = $_GET['spend_product_name'];
    $spend_product_quantity      = $_GET['spend_product_quantity'];
    $spend_product_entrydate     = $_GET['spend_product_entrydate'];
    

    $query = "INSERT INTO `spend_product`(`spend_product_name`, `spend_product_quantity`, `spend_product_entrydate` ) 
    VALUES ('$spend_product_name','$spend_product_quantity', '$spend_product_entrydate')";

    if(mysqli_query($conn, $query)){
        echo "insert successfully";
    }else{
        echo " Not insert store";
    }
}

?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    
    Product: <br>
    <select name="spend_product_name" id="">
        <?php

            data_list('product', 'product_id','product_name');
        
        ?>
    </select><br><br>  
    Product quantity: <br>
    <input type="text" name="spend_product_quantity"><br><br>
    Spend Product Entry Date : <br>
    <input type="date" name="spend_product_entrydate"><br><br>
    <input type="submit" name="" id="" value="Submit">

</form>



    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>