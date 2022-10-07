<?php
    session_start();
    $user_first_name = $_SESSION['user_first_name'] ;
    $user_last_name = $_SESSION['user_last_name'] ;
   
    if(!empty($user_first_name) && !empty($user_last_name)){
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="container-fluid border-bottom border-success"><!--start top bar -->
            <div class="row p-3 ">
                <div class="col-md-9">
                    <h3><a href="index.php" class="text-success text-decoration-none">Store Management System | SMS</a></h3>
                </div>
                <div class="col-md-3">
                    <p class="pt-2"><?php echo $user_first_name.' '.$user_last_name;  ?>
                        <a href="logout.php" class="tex-white text-decoration-none btn btn-success py-1 m-0 ms-2">
                            Logout
                        </a>
                    </p>
                </div>
            </div>           
        </div><!--end top bar -->

        <div class="container-fluid"><!--body -->
            <div class="row"><!--start body row -->
                <div class="col-md-3 p-0 m-0 "><!--start left body part -->
                    <h5 class="bg-success text-white px-2 py-1">Category</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="add_category.php" class="text-dark text-decoration-none">Add category</a></li>
                        <li class="list-group-item"><a href="list_of_category.php" class="text-dark text-decoration-none">Category List</a></li>
                    </ul>
                    <h5 class="bg-success text-white px-2 py-1">Product</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="add_product.php" class="text-dark text-decoration-none">Add Product</a></li>
                        <li class="list-group-item"><a href="list_of_product.php" class="text-dark text-decoration-none">Product List</a></li>
                    </ul>
                    <h5 class="bg-success text-white px-2 py-1">Store Prodcut</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="add_store_product.php" class="text-dark text-decoration-none">Add store product</a></li>
                        <li class="list-group-item"><a href="list_of_entry_product.php" class="text-dark text-decoration-none">Store product List</a></li>
                    </ul>
                    <h5 class="bg-success text-white px-2 py-1">Spent Product</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="add_spend_product.php" class="text-dark text-decoration-none">Add spent product</a></li>
                        <li class="list-group-item"><a href="list_of_spend_product.php" class="text-dark text-decoration-none">Spend product List</a></li>
                    </ul>
                </div><!--end left body part -->                
                <div class="col-md-9"><!--start right body part -->
                    <div class="row p-4">
                        <div class="col-md-3">
                            <a href="add_category.php" class="text-success" style="font-size:50px;"><i class="fa-solid fa-folder-plus"></i></a>
                            <p>Add category</p>
                        </div>
                        <div class="col-md-3">
                            <a href="list_of_category.php" class="text-success" style="font-size:50px;"><i class="fa-solid fa-folder-open "></i></a>
                            <p>Category list</p>    
                        </div>
                        <div class="col-md-3">
                            <a href="add_product.php" class="text-success" style="font-size:50px;"><i class="fa-solid fa-box-open"></i></a>
                            <p>Add Product</p> 
                        </div>
                        <div class="col-md-3">
                            <a href="list_of_product.php" class="text-success" style="font-size:50px;"><i class="fa-solid fa-bars-staggered"></i></a>
                            <p>Product list</p> 
                        </div>                        
                    </div>
                    <hr>
                    <div class="row p-4">
                        <div class="col-md-3">
                            <a href="add_store_product.php" class="text-success" style="font-size:50px;"><i class="fa-solid fa-boxes-packing"></i></a>
                            <p>Store Product</p>
                        </div>
                        <div class="col-md-3">
                            <a href="list_of_entry_product.php" class="text-success" style="font-size:50px;"><i class="fa-solid fa-box"></i></a>
                            <p>Store Product list</p>    
                        </div>
                        <div class="col-md-3">
                            <a href="add_spend_product.php" class="text-success" style="font-size:50px;"><i class="fa-solid fa-calendar-minus"></i></i></a>
                            <p>Spend Product</p> 
                        </div>
                        <div class="col-md-3">
                            <a href="list_of_spend_product.php" class="text-success" style="font-size:50px;"><i class="fa-solid fa-window-restore"></i></a>
                            <p>Spend Product list</p> 
                        </div>                        
                    </div>
                </div><!--end right body part -->
            </div><!--end body row -->
        </div>

        <div class="container-fluid border-top border-success"><!--bottom bar -->
           <p class="text-center p-2">Copyright &copy; 2017-<?php echo date("Y"); ?></p>
        </div>

    
    
    </div><!--end container -->

    

    <?php
        }else{
            header('location:login.php');
        }
    ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>