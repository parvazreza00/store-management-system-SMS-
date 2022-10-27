<?php
include('database.php');

if(isset($_POST['submit'])){

    $target_dir = "uploads/";
    $target_file = $target_dir. basename($_FILES['fileToUpload']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    //check if image file is a actual image or fake image    
        $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
        if($check != false){
            echo "File is an image - ". $check['mime']. ".";
            $uploadOk = 1;
        }else{
            echo"File is not an image.";
            $uploadOk = 0;
        }
    
    
    //check if file already exists
    if(file_exists($target_file)){
        echo "sorry, file already exists.";
        $uploadOk = 0;
    }
    //check file size 
    if($_FILES['fileToUpload']['size'] > 500000){
        echo "Sorry, your file is too large.";
    }
    //Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif'){
        echo "Sorry, file format is not supported.";
        $uploadOk = 0;
    }
    //check if $uploadOk is set to  by an error
    if($uploadOk == 0){
        echo "Sorry , your file was not uploaded.";
        //if everything is ok, try to upload file
    }else{
        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
            $sqlimage = "INSERT INTO `image`(`file_path`) VALUES ('$target_file')";
            if(mysqli_query($conn, $sqlimage)){
                echo "image inserted";
            }else{
                echo "Image is not inserted";
            }
        }else{
            echo "Image is not uploaded";
        }
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <div class="">
            <input type="file" name="fileToUpload" id="fileUpload">
            <input type="submit" value="Upload image" name="submit">

        </div>
        <div>
            <?php  
            $sqlfetch = "SELECT * FROM image";
            $queryimage = mysqli_query($conn, $sqlfetch);
            while($data= mysqli_fetch_array($queryimage)){
                ?>

                <img style='height:200px;weight:200px;margin-top:10px;margin-right:5px;' src='<?php echo $data['file_path']; ?>' alt=''>

            <?php }
            
            ?>
            
        </div>
    </form>
</body>
</html>