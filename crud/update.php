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

<?php
require("connection.php");
if(isset($_GET["ID"])){
  $id = $_GET["ID"];
  $select = "SELECT `ID`, `NAME`, `EMAIL` FROM `student` WHERE ID = $id";
  $result = mysqli_query($con,$select);
  $row = mysqli_fetch_assoc($result);
}
?>
<div class="container">
  <div class="row">
    <div class="col">
      <div class = "p-3 mb-2 bg-warning text-white text-center rounded"><h2>UPDATE</h2></div>
      <form action="update.php" method = "post">
     <input type="hidden" class = "form-control" name = "id" value = "<?php echo $row["ID"];?>">
     <label for="">Name</label>
     <input type="text" class = "form-control" name = "name" value = " <?php echo $row["NAME"];?>">
     <label for="">Email</label>
     <input type="text" class = "form-control" name = "email" value = " <?php echo $row["EMAIL"];?>">
     <input type="submit" name = "btn" class = "btn btn-pramary">
  
      </form>

    </div>
  </div>
</div>

<?php

if(isset)($_POST["btn"]){
  $id = $_POST["ID"];
  $name = $_POST["NAME"];
  $email = $_POST["EMAIL"];
  $query = "UPDATE `student` SET `NAME`='$name',`EMAIL`='$email' WHERE ID = $id";
  mysqli_query($con,$query);
  header("location:display.php")
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>