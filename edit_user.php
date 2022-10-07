<?php
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">


    <?php
    if(isset($_GET['id'])){
        $getid = $_GET['id'];
        $sql = "SELECT * FROM user WHERE user_id='$getid'";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($query);

        $user_id = $data['user_id'];
        $user_first_name = $data['user_first_name'];
        $user_last_name = $data['user_last_name'];
        $user_email = $data['user_email'];
        $user_password = $data['user_password'];
        
        
    }
    if(isset($_GET['user_first_name'])){
        $user_first_name = $_GET['user_first_name'];
        $user_last_name = $_GET['user_last_name'];
        $user_email = $_GET['user_email'];        
        $user_password = $_GET['user_password'];
        $user_id = $_GET['user_id'];

        $sql = "UPDATE `user` SET `user_first_name`='$user_first_name',`user_last_name`='$user_last_name',`user_email`='$user_email',`user_password`='$user_password' WHERE user_id='$user_id'";

        if(mysqli_query($conn, $sql)){
            echo "User's data updated";
        }else{
            echo "User's data not updated";
        }
    }



    


?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    User's First Name : <br>
    <input type="text" name="user_first_name" value="<?php echo $user_first_name; ?>"><br><br>
    User's Last Name : <br>
    <input type="text" name="user_last_name" value="<?php echo $user_last_name; ?>"><br><br>
    Use's Email : <br>
    <input type="text" name="user_email" value="<?php echo $user_email; ?>"><br><br>
    User's Password : <br>
    <input type="password" name="user_password" value="<?php echo $user_password; ?>"><br><br>
    <input type="text" name="user_id" id="" value="<?php echo $user_id; ?>" hidden>
    <input type="submit" name="" id="" value="Submit">

</form>



    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>