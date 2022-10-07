<?php
include('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">


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
    <input type="text" name="user_first_name"><br><br>
    User's Last Name : <br>
    <input type="text" name="user_last_name"><br><br>
    Use's Email : <br>
    <input type="text" name="user_email"><br><br>
    User's Password : <br>
    <input type="password" name="user_password"><br><br>
    <input type="submit" name="" id="" value="Submit">

</form>



    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>