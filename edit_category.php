<?php
include('database.php');

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
if(isset($_GET['id'])){
    $getid = $_GET['id'];
    $sql = "SELECT * FROM category WHERE category_id ='$getid' ";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);

    $category_name = $data['category_name'];
    $category_entrydate = $data['category_entrydate'];
    

}

if(isset($_GET['category_name'])){
    $edit_category_name = $_GET['category_name'];
    $edit_category_entrydate = $_GET['category_entrydate'];
    $edit_category_id = $_GET['category_id'];

    $sql1 = "UPDATE category SET category_name = '$edit_category_name', category_entrydate='$edit_category_entrydate' WHERE category_id='$edit_category_id'";

    $query1 = mysqli_query($conn, $sql1);

    if($query1==true){
        echo "updated";
    }else{
        echo "Error";
    }

}

?>

    <form action="edit_category.php" method="GET">
    Category : <br>
    <input type="text" name="category_name" value="<?php echo $category_name; ?>"><br><br>
    Category Entry Date : <br>
    <input type="date" name="category_entrydate" value="<?php echo $category_entrydate; ?>"><br><br>
    <input type="text" name="category_id" value="<?php echo $category_id; ?>" hidden>
    <input type="submit" name="" id="" value="Submit">

    </form>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>