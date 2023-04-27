<?php
session_start();
include './database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css link -->
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

<style>
       body{
         background-image:
    linear-gradient(to right, rgba(33, 147, 176,0.6), rgba(109, 213, 237,0.5)),
    url('./img/studentbg.jpg');
        background-size: cover;
        background-position:center;
        height:100vh;
        background-repeat: no-repeat;
    }
</style>

</head>
<body>
<!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a href="#" class="navbar-brand ms-1">
        <i class="fa-solid fa-graduation-cap"></i>
          STUDENT
        </a>
      </div>
    </nav>   

    <?php  
$ID=$_SESSION['ID'];
$sql="SELECT `ID`,`Name`,`DOB`,`Mobile`, `Dept`, `Batch`, `Address`, `Email` FROM `student` WHERE `ID`=$ID";
$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result)){
?>
<div class="container w-75 bg-primary text-light my-4 p-3">
  <div class="row">
<div class="col-5  bg-dark">
  
  <h5>ID:    </h5>
  <h5>Name:  </h5> 
  <h5>DOB:   </h5>
  <h5>Mobile:</h5 >
  <h5>Email:</h5>
  <h5>Dept: </h5>
  <h5>Batch:</h5>
  <h5>Address: </h5>
</div>
<div class="col-7 bg-dark text-wrap">
  <h5><?php echo $row['ID'] ;?></h5>
  <h5><?php echo $row['Name'] ;?></h5>
  <h5><?php echo $row['DOB'] ;?></h5>
  <h5><?php echo $row['Mobile'] ;?><h5>
  <h5><?php echo $row['Email'] ;?><h5>
  <h5><?php echo $row['Dept'] ;?><h5>
  <h5><?php echo $row['Batch'] ;?><h5>
  <h5><?php echo $row['Address'] ;?><h5>
</div>
  </div>
</div>
<?php
}
?>
</body>
</html>