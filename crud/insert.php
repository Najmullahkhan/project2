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
<div class="container">

<div class="row bg-dark text-white">
  <div class="col-6">

  <form action="insert.php" method="post">
    <input type="text"  class="form-control my-2"  name="name" placeholder="Enter Name">
    <input type="email" class="form-control my-2"  name="email" placeholder="Enter Email">
    <input type="submit" class="btn btn-primary m-3" value="Submit" name="btn">
   
  </form>
  </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php
require("connection.php");
if(isset($_POST['btn'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  
  $insert="INSERT INTO `student`(`NAME`, `EMAIL`) VALUES ('$name','$email')";
  mysqli_query($con,$insert);
}

?>