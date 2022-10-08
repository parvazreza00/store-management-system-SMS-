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
        <div class="container-fluid border-bottom border-success mb-0"><!--start top bar -->
                    <?php include('topbar.php'); ?>
        </div><!--end top bar -->

        <div class="container-fluid mt-1"><!--body -->
            <div class="row"><!--start body row -->
                <div class="col-md-3 p-0 m-0 border-end-0"><!--start left body part -->
                    <?php include('leftbar.php'); ?>
                </div><!--end left body part -->                
                <div class="col-md-9 border-start-0"><!--start right body part -->
                    <div class="row ms-4">
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
                    <div class="row ms-4">
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
                    <hr>
                    <div class="row ms-4">
                        <div class="col-md-3">
                            <a href="report.php" class="text-success" style="font-size:50px;"><i class="fa-solid fa-chart-column"></i></a>
                            <p>Report</p>
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                    </div>
                    <hr>
                    <div class="row ms-4">
                        <div class="col-md-3">
                            <a href="add_user.php" class="text-success" style="font-size:50px;"><i class="fa-solid fa-user-plus"></i></a>
                            <p>Add User</p>
                        </div>
                        <div class="col-md-3">
                            <a href="list_of_user.php" class="text-success" style="font-size:50px;"><i class="fa-sharp fa-solid fa-users"></i></a>
                            <p>User List</p>
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                    </div>
                </div><!--end right body part -->
            </div><!--end body row -->
        </div>

        <div class="container-fluid border-top border-success"><!--bottom bar -->
          <?php include('bottombar.php'); ?>
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