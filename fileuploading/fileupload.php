<?php
include('../database.php');

if(isset($_POST['submit'])){
    $fileName = $_FILES['upfile']['name'];
    $tempLocation = $_FILES['upfile']['tmp_name'];
    $fileType = $_FILES['upfile']['type'];
    $fileSize = $_FILES['upfile']['size'];
    $upLocation = "images/".$fileName;

    if($fileSize < 100000){
        if($fileType=='images/jpg' || 'images/png' || 'images/jpeg'){
            if(file_exists($upLocation)){
                echo "File Already Exists";
            }else{
                if(move_uploaded_file($tempLocation, $upLocation)){
                    $sql = "INSERT INTO `imageupload`(`imagename`) VALUES ('$fileName')";
                    if(mysqli_query($conn, $sql)){
                        echo "Image Inserted";
                    }else{
                        echo "Image not inserted";
                    }
                    echo "FIle is uploaded";
                }else{
                    echo "File is not uploaded";
                }
            }
            
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
    <title>File Uploading </title></title>
</head>
<body>
    <div class="conatiner">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="upfile"><br><br>
            <input type="submit" name="submit" value="Upload file">
        </form>

        <?php
            $sqlimage = "SELECT * FROM imageupload";
            $queryimage = mysqli_query($conn, $sqlimage);

            while($dataimage = mysqli_fetch_assoc($queryimage)){
            $imagename = $dataimage['imagename'];
            
            echo "<img src='images/$imagename' alt='' style='width:100px;height:100px'>";
            }
       ?>
    </div>
</body>
</html>