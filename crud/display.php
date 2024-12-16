
<?php
require("connection.php");
$select = "SELECT * FROM `student`";
$data = mysqli_query($con,$select);
if(mysqli_num_rows($data)> 0){
  
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

    <table class="table table-dark">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
      </tr>
</thead>
      <tbody>
      <?php while ($row = mysqli_fetch_assoc($data)){ ?>
      <tr>
      <td><?php echo  $row['ID'] ?></td>
      <td><?php echo  $row['NAME'] ?></td>
      <td><?php echo  $row['EMAIL'] ?></td>

    </tr>
    <?php } ?>
    </tbody>


    </table>
    <?php } ?>

    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>

