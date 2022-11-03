<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-8">


<form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
   <div class="form-group">
      <label for="name">NAME</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required />
   </div>
   <div class="form-group">
      <label for="email">EMAIL</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required />
   </div>
   <input id="uploadImage" type="file" accept="image/*" name="image" />
   <div id="preview"><img src="filed.png" /></div>
   <br>
   <input class="btn btn-success" type="submit" value="Upload">
</form>
<div id="err"></div>
<hr>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>