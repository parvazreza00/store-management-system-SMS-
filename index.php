<?php
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
    <title>SMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <?php
    if(!empty($user_first_name) && !empty($user_last_name)){
    ?>

    <div class="container">
    <h2 class="text-center text-success">Store Management System | SMS</h2>
    <h1><a href="logout.php">Logout</a></h1>
    </div>

    <?php
        }else{
            header('location:login.php');
        }
    ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>