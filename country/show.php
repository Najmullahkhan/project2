
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
$connection = mysqli_connect("localhost","root","","country");
$select = "SELECT * FROM `list` where Id = 2";
$data =  mysqli_query($connection,$select);
if(mysqli_num_rows($data)> 0){
 $row = mysqli_fetch_assoc($data);    

?>

   <form action="dropdown.php" method="post">
        <select name="dropdown">
         <?php if($row["Countries"] == "Pakistan"){ echo "Pakistan"; ?>
            <option value="Pakistan" selected>Pakistan</option>
            <option value="India">India</option>
            <option value="Iran">Iran</option>
            <option value="USA">USA</option>
        <?php }else if($row["Countries"] == "India"){ echo "India"; ?>
            <option value="Pakistan">Pakistan</option>
            <option value="India" selected>India</option>
            <option value="Iran">Iran</option>
            <option value="USA">USA</option>
      <?php } else if($row["Countries"] == "Iran"){ echo "Iran";?>
           <option value="Pakistan">Pakistan</option>
            <option value="India">India</option>
            <option value="Iran" selected>Iran</option>
            <option value="USA">USA</option>

       <?php } else if($row["Countries"] == "USA"){echo "USA"; ?> 
        <option value="Pakistan">Pakistan</option>
            <option value="India">India</option>
            <option value="Iran">Iran</option>
            <option value="USA" selected>USA</option>
        <?php } ?>
    </select>
    </form>

<?php } ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>