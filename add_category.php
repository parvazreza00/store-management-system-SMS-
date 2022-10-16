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
    <title>Category</title>    
    <!-- google font -->
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
                <div class="row p-3">
                    <div class="col-md-1"></div>
                    <div class="col-md-9">
                    <?php
                    if(isset($_GET['category_name'])){
                    $category_name      = $_GET['category_name'];
                    $category_entrydate = $_GET['category_entrydate'];

                    $query = "INSERT INTO `category`(`category_name`, `category_entrydate`) 
                    VALUES ('$category_name','$category_entrydate')";

                    if(mysqli_query($conn, $query)){
                        echo "Data inserted";
                    }else{
                        echo "Not inserted";
                    }
                    }

                ?>

                <form action="add_category.php" method="GET">
                    Category : <br><br>
                    <input type="text" name="category_name" class="form-control"><br><br>
                    Category Entry Date : <br><br>
                    <input type="date" name="category_entrydate" class="form-control"><br><br>
                    <input type="submit" class="btn btn-success" name="" id="" value="Submit">
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

    
    
</div><!--end container -->




<?php
}else{
    header('location:login.php');
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<script>
   
</script>