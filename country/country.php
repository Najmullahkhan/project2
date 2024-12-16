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


    <form action="country.php" method="post">
        <select name="dropdown">
            <option selected disabled>Select Your Country</option>
            <option value="Pakistan">Pakistan</option>
            <option value="India">India</option>
            <option value="Iran">Iran</option>
            <option value="USA">USA</option>
        </select>
        <input type="submit" name="btn" class="btn btn-lg btn-primary">
    </form>
<?php 
$connection = mysqli_connect("localhost","root","","country");
if(isset($_POST["btn"]))
{
    $country = $_POST["dropdown"];
    $insert = "INSERT INTO `list`(`Countries`) VALUES ('$country')";
    mysqli_query($connection,$insert);
}

?>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
