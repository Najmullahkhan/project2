
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
$connection = mysqli_connect("localhost","root","","gender1");
$select = "SELECT * FROM `gender` Where id = 4";
$data = mysqli_query($connection,$select);
if(mysqli_num_rows($data)> 0){
    $row = mysqli_fetch_assoc($data);


?>


   <form action="gender.php" method="post">
        <input type="radio" name="gender" value="Female" <?php if($row["Gender"] == "Female") echo "checked"; ?>>Female
        <input type="radio" name="gender" value="Male" <?php if($row["Gender"] == "Male") echo "checked"; ?>>Male
    </form>


<?php }else{ echo "record not found";} ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>