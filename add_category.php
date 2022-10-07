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
    <title>StoreMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<?php
    if(!empty($user_first_name) && !empty($user_last_name)){
?>

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
    <input type="text" name="category_name"><br><br>
    Category Entry Date : <br><br>
    <input type="date" name="category_entrydate"><br><br>
    <input type="submit" name="" id="" value="Submit">

</form>



<?php
}else{
    header('location:login.php');
}
?>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>