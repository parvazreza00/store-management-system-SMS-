<?php
include('database.php');

session_start();
$user_first_name = $_SESSION['user_first_name'] ;
$user_last_name = $_SESSION['user_last_name'] ;

?>
<?php
if(isset($_GET['id'])){
    $deleteCategory = $_GET['id'];
    $sql = "DELETE FROM `category` WHERE category_id='$deleteCategory'";
    mysqli_query($conn, $sql);

    header('location:list_of_category.php?m=??');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <!-- sweet alert cdn -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- jquery cdn -->
    <script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>
    <!-- fontawesome -->
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
                $sql1 = "SELECT * FROM category";
                $query1 = mysqli_query($conn, $sql1);
                $num_rows = mysqli_num_rows($query1);
                $divide_num_rows = ($num_rows/5) + 1;

        if(isset($_GET['pageno'])){
             $getpageno = $_GET['pageno'];
             $offset  = ($getpageno - 1)* 5;
             $getpageno_increment = $getpageno + 1;
             $getpageno_decrement = $getpageno - 1;
            
        }else{
            $offset = 0;
            $getpageno_increment = 2;
            $getpageno_decrement = 0;
        }
                
    $sql = "SELECT * FROM `category` LIMIT 5 OFFSET $offset";
    $query = mysqli_query($conn, $sql);

    echo "<table class='table'><tr><th>Category Id</th><th>Category Name</th>
                    <th>Category Entrydate</th><th>Action</th></tr>";
    while($data = mysqli_fetch_assoc($query)){
        $category_id = $data['category_id'];
        $category_name = $data['category_name'];
        $category_entrydate = $data['category_entrydate'];

        echo "<tr><td>$category_id</td>
        <td>$category_name</td>
        <td>$category_entrydate</td>
        <td><a href='edit_category.php?id=$category_id' class='btn btn-primary'> Edit </a></td>
        <td><a href='list_of_category.php?id=$category_id' class='btn btn-danger btn-del' >Delete</a></td></tr>";
       
    }
    echo "</table>";

}else{
    header('location:login.php');
}
?>

<?php 
if($getpageno_decrement == 0){
    echo "<span class='bg-success border round p-3 mt-1'> < </span>";
}else{

    echo " <span class='bg-success border round p-3 mt-1'>
    <a href='list_of_category.php?pageno= $getpageno_decrement' class='text-white'> < </a>
    </span>";
}
?>

<?php 
if($getpageno_increment> $divide_num_rows){
    echo "<span class='bg-success border round p-3 mt-1'> > </span>";
}else{
    echo "<span class='bg-success border round p-3 mt-1'>
    <a href='list_of_category.php?pageno= $getpageno_increment' class='text-white'> > </a>
    </span>";
}
?>

   
    


<?php if(isset($_GET['m'])): ?>
    <div class="flash-data" data-flashdata = "<?php echo $_GET['m']; ?>"></div>
<?php endif; ?>    
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
<script type="text/javascript">
    $('.btn-del').on('click', function(e){
        e.preventDefault();
        const href=$(this).attr('href')
        Swal.fire({
            title: 'Are You Sure?',
            text: "Record will be deleted?",
            type: 'warning',
            showCancelButton: true,
            confirmButton: '#3085d6',
            concelButtonColor:'#d33',
            confirmButtonText: 'Delete Record?',
        }).then((result) => {
            if(result.value){
                document.location.href = href;
            }
        })
    });
    
    const flashdata = $('.flash-data').data('flashdata')
    if(flashdata){
        swal.fire({
            type: 'success',
            title: 'Success',
            text: 'Record has been deleted',
        })
    }

</script>