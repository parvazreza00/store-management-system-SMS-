<?php
include('database.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">

    <?php
    if(isset($_POST['user_email'])){
        $user_email    = $_POST['user_email'];
        $user_password = $_POST['user_password'];

        $sql = "SELECT * FROM user WHERE user_email='$user_email' AND user_password='$user_password'";
        $query=mysqli_query($conn, $sql);

        if(mysqli_num_rows($query)>0){

            $data = mysqli_fetch_assoc($query);
            $user_first_name = $data['user_first_name'];
            $user_last_name  = $data['user_last_name'];

            $_SESSION['user_first_name'] = $user_first_name;
            $_SESSION['user_last_name'] = $user_last_name;

            header('location:index.php');
        }else{
            echo "Missmatched";
        }
    }

?>


    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">    
    Use's Email : <br>
    <input type="text" name="user_email"><br><br>
    User's Password : <br>
    <input type="password" name="user_password"><br><br>
    <input type="submit" name="logint" id="" value="Login">

</form>



    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>