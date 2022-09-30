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
    <title>Edit Spend product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">


    <?php
if(isset($_GET['id'])){
    $getid = $_GET['id'];

    $sql = "SELECT * FROM spend_product WHERE spend_product_id ='$getid'";

    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);

    $spend_product_id  = $data['spend_product_id'];
    $spend_product_name = $data['spend_product_name'];
    $spend_product_quantity = $data['spend_product_quantity'];
    $spend_product_entrydate = $data['spend_product_entrydate'];

}

if(isset($_GET['spend_product_name'])){
    $edit_spend_product_name     = $_GET['spend_product_name'];
    $edit_spend_product_quantity = $_GET['spend_product_quantity'];
    $edit_spend_product_entrydate= $_GET['spend_product_entrydate'];
    $edit_spend_product_id       = $_GET['spend_product_id'];
    
    $sql2 = "UPDATE `spend_product` SET `spend_product_name`='$edit_spend_product_name',`spend_product_quantity`='$edit_spend_product_quantity',`spend_product_entrydate`='$edit_spend_product_entrydate' WHERE `spend_product_id`= '$edit_spend_product_id'";

    if($query2 = mysqli_query($conn, $sql2)){
        echo "Product store updated";
    }else{
        echo "prodcut store not updated";
    }
    
}

?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    
    Product: <br>
    <select name="spend_product_name" id="">
        <?php

            $sql = "SELECT * FROM product";
            $query = mysqli_query($conn, $sql);

            while($data = mysqli_fetch_assoc($query)){
                $data_id = $data['product_id'];
                $data_name = $data['product_name'];

                ?>

            <option value='<?php echo $data_id?>' <?php 
                if($spend_product_name==$data_id) echo 'selected'; ?>>
                    <?php echo $data_name; ?>
            </option>;
                
                <?php
            }
        
        ?>
    </select><br><br>  
    Product store quantity: <br>
    <input type="number" name="spend_product_quantity" value="<?php echo $spend_product_quantity; ?>"><br><br>
    Product Store Entry Date : <br>
    <input type="date" name="spend_product_entrydate" value="<?php echo $spend_product_entrydate; ?>"><br><br>
    <input type="text" name="spend_product_id" id="" value="<?php echo $spend_product_id; ?>" hidden>
    <input type="submit" name="" id="" value="Submit">

</form>



    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>