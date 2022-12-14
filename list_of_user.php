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
    <title>User List</title>
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
   $sql = "SELECT * FROM user";
   $query = mysqli_query($conn, $sql);
   
   echo "<table class='table'><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Action</th></tr>";

   while($data = mysqli_fetch_assoc($query)){
    $user_id            = $data['user_id'];
    $user_first_name    = $data['user_first_name'];
    $user_last_name     = $data['user_last_name'];
    $user_email         = $data['user_email'];

    echo "<tr><td>$user_id</td><td>$user_first_name</td><td>$user_last_name</td><td>$user_email</td><td><a href='edit_user.php?id=$user_id' class='btn btn-primary'>Edit</a></td><td><a href='#' class='btn btn-danger'>Delete</a></td></tr>";
   } 
   echo "</table>";


   


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