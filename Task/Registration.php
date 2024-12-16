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
<title>Sign Up</title>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col">
      <form action="Registration.php" method = "post">
        <input type="text" class= "form-control my-2" name = "name" placeholder = "Enter Your Name">
        <input type="email" class = "form-control my-2" name = "email" placeholder = "Enter Email Address">
        <input type="password" class = "form-control my-2" name = "password" placeholder = "Enter Password">
        <input type="submit" class = "btn btn-primary m-3" value = "Sign Up" name = "btn">
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
  $name = $_POST['name'];
  $email = $_post
}