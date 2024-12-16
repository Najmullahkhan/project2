<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>

<div class="container-fluid mt-5">
    <form action="img.php" method="post" enctype="multipart/form-data">
      <input type="file" class="form-control mb-3" name="image">
      <input type="submit" name="btn" class="btn btn-lg btn-primary">
    </form>


  </div>
  <?php
     $connection= mysqli_connect("localhost","root","","image2");

     if(isset($_POST["btn"])){
      $name= $_FILES["image"]["name"];
      $path=$_FILES["image"]["tmp_name"];
      move_uploaded_file($path,"upload/".$name);
      $database="upload/".$name;
      $insert="INSERT INTO `img`(`image`) VALUES ('$database')";
      mysqli_query($connection,$insert);
     }
  ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>