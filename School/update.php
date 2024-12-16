<?php require("connection.php");
if(isset($_GET['ID']))
{
  $id = $_GET["ID"];
  $select = "SELECT * FROM `school` WHERE ID = $id";
  $result = mysqli_query($con,$select);
  $row = mysqli_fetch_assoc($result);
}
?>
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
    <div class="row">
      <div class="col">
      <form action="" method="post">

<input type="text" class = "form-control my-2" name = "name" placeholder = "EnterName"
value = "<?php echo $row['Name'];?>">
<input type="hidden" class = "form-control my-2" name = "ID"placeholder = "Enter Name" 
value = "<?php echo $row['ID'];?>">
<input type="email" class = "form-control my-2" name = "email" placeholder = "Enter Email"
value = "<?php echo $row['Email'];?>">
<input type="password" class = "form-control my-2" name = "password" placeholder = "Enter password" value= "<?php echo $row['Password'];?>">
<input type="text" class = "form-control my-2" name = "phone" placeholder = "Enter Phone"
value = "<?php echo $row['Phone'];?>">

<label for="gender">Gender</label><br>
<input type="radio" name="gender" value="Female" <?php if ($row['Gender'] == 'Female') echo 'checked'; ?>> Female
<input type="radio" name="gender" value="Male" <?php if ($row['Gender'] == 'Male') echo 'checked'; ?>> Male

  <textarea name="address" class = "form-control my-2"> 
  <?php echo $row['Address'];?></textarea>
  <input type="submit" class = "btn btn-primary m-3" value = "update" name = "update">
</form>
      </div>
    </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['update']))
{

  $name = $_POST["name"];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $query = "UPDATE `school` SET `Name`='$name',`Email`='$email',`Password`='$password',`Phone`='$phone',`Gender`='$gender',`Address`='$address' WHERE ID = '$id'";
  mysqli_query($con, $query);
  header("location:display.php");
}
?>