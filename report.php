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
    <title>Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-2">
<?php
    if(!empty($user_first_name) && !empty($user_last_name)){

        $sql1 ="SELECT * FROM product";
        $query1 = mysqli_query($conn, $sql1);

        $product_list = array();

        while($data = mysqli_fetch_assoc($query1)){
            $product_id  = $data['product_id'];
            $product_name = $data['product_name'];
        
            $product_list[$product_id] = $product_name;
}
?>


   

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    Select Product Name:
    <select name="product_name" id="">       
        <?php
        $sql = "SELECT * FROM `product`";
        $query = mysqli_query($conn, $sql);

        while($data = mysqli_fetch_assoc($query)){
            $product_id = $data['product_id'];
            $product_name = $data['product_name'];        

        ?>
     <option value="<?php echo $product_id; ?>"><?php echo $product_name; ?></option>
     <?php } ?>
    </select>      
        <input type="submit" name="" id="" class="btn btn-secondary" value="Generate Report">
    </form>
            <h3>Store Product</h3>

    <!-- PRoduct report generate -->
    <?php 
    if(isset($_GET['product_name'])){
         $product_name = $_GET['product_name'];
         $sql = "SELECT * FROM store_product WHERE store_product_name='$product_name'";

         $query =mysqli_query($conn, $sql);

         while($data = mysqli_fetch_assoc($query)){

         $store_product_name = $data['store_product_name'];
         $store_product_quantity = $data['store_product_quantity'];
         $store_product_entrydate = $data['store_product_entrydate'];

         echo "<h4>$product_list[$store_product_name]</h4>";
         echo "<table class='table'><tr><th>Strore Date</th><th>Amount</th></tr>";
         echo "<tr><td>$store_product_entrydate</td><td>$store_product_quantity</td></tr>";
         echo "</table>";
         }

    }
    ?>
    <hr class="text-primary">
    <h3>Spend Product</h3>
    <?php 
    if(isset($_GET['product_name'])){
         $product_name = $_GET['product_name'];
         $sql = "SELECT * FROM spend_product WHERE spend_product_name='$product_name'";

         $query =mysqli_query($conn, $sql);

         while($data = mysqli_fetch_assoc($query)){

         $spend_product_name = $data['spend_product_name'];
         $spend_product_quantity = $data['spend_product_quantity'];
         $spend_product_entrydate = $data['spend_product_entrydate'];

         echo "<h4>$product_list[$spend_product_name]</h4>";
         echo "<table class='table'><tr><th>Spend Date</th><th>Amount</th></tr>";
         echo "<tr><td>$spend_product_entrydate</td><td>$spend_product_quantity</td></tr>";
         echo "</table>";
         }

    }
    ?>



<?php
}else{
    header('location:login.php');
}
?>
    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>