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
    <title>User</title>
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
    if(isset($_GET['user_first_name'])){
        $user_first_name = $_GET['user_first_name'];
        $user_last_name = $_GET['user_last_name'];
        $user_email = $_GET['user_email'];
        $user_password = $_GET['user_password'];

        $sql = "INSERT INTO `user`(`user_first_name`, `user_last_name`, `user_email`, `user_password`) VALUES ('$user_first_name','$user_last_name','$user_email','$user_password')";
        if(mysqli_query($conn, $sql)){
            echo "User's data inserted.";
        }else{
            echo "User's data not inserted.";
        }

    }


?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    User's First Name : <br>
    <input type="text" name="user_first_name" class="form-control"><br>
    User's Last Name : <br>
    <input type="text" name="user_last_name" class="form-control"><br>
    Use's Email : <br>
    <input type="text" name="user_email" class="form-control"><br>
    User's Password : <br>
    <input type="password" name="user_password" class="form-control"><br><br>
    <input type="submit" name="" id="" value="Submit" class="btn btn-success">

</form>



<?php
}else{
    header('location:login.php');
}
?>
                  
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>