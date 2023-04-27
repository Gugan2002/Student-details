<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css"/>
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
    url('./img/adminbg.png');
        background-size: cover;
        background-position:center;
        height:130vh;
        background-repeat: no-repeat;
    }
</style>
</head>

<!-- Database connection -->
<?php
include("./database.php"); 
session_start();
?>

<body>
    <!-- navbar-start -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a href="#" class="navbar-brand ms-1">
        <i class="fa-solid fa-user p-2"></i>
          ADMIN
        </a>
      </div>
    </nav>    

<!-- navbar-end -->

<!-- Tools section start -->
<section class="tools">
    <form action="" method="post">
<div class="container my-3">
    <div class="row ms-2">
        <div class="col-3 d-flex">
            <button class="btn btn-outline-dark" name="add">
            <img class="tools_img w-75" src="./img/insert.png" alt="">
            <h4>Add</h4>
            </button>
        </div>
        <div class="col-3">
            <button class="btn btn-outline-dark" name="view">
            <img class="tools_img w-75" src="./img/view.png" alt="">
            <h4>View</h4>
            </button>
        </div>
        <div class="col-3">
            <button class="btn btn-outline-dark" name="edit">
            <img class="tools_img w-75" src="./img/edit.png" alt="">
            <h4>Edit</h4>
            </button>
        </div>
        <div class="col-3">
            <button class="btn btn-outline-dark" name="delete">
            <img class="tools_img w-75" src="./img/delete.png" alt="">
            <h4>Delete</h4>
            </button>
        </div>
    </div>
</div>
</form>

<!-- Tools section End -->

<!-- Action for adding tool -->
<?php
if(isset($_POST['add']))
{
   ?>
<div class="container text-light w-75 bg-dark my-5">
<form class="row g-3" method="post" action="admin.php" enctype="multipart/form-data">
  <div class="col-md-2">
    <label class="form-label">ID:</label>
    <input type="text" class="form-control" name="inputID" disabled>
  </div>
  <div class="col-md-5">
    <label for="inputName" class="form-label">Full Name:</label>
    <input type="text" class="form-control" name="inputName" required>
  </div>
  <div class="col-md-5">
    <label for="inputDob" class="form-label">Date of birth:</label>
    <input type="date" class="form-control" name="inputDob" required>
  </div>
  <div class="col-md-6">
    <label for="inputMobile" class="form-label">Mobile:</label>
    <input type="text" class="form-control" name="inputMobile" required>
  </div>
  <div class="col-md-6">
    <label for="inputDept" class="form-label">Department:</label>
    <input type="text" class="form-control" name="inputDept" required>
  </div>
  <div class="col-md-6">
    <label for="inputBatch" class="form-label">Batch:</label>
    <input type="text" class="form-control" name="inputBatch" required>
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Address:</label>
    <input type="text"  class="form-control" name="inputAddress" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">E-Mail:</label>
    <input type="email"  class="form-control" name="inputEmail" required>
  </div>
  <div class="col-12 my-3">
    <button type="submit" class="btn btn-primary" name="getvalue">ADD</button>
  </div>
</form>
    </div>
   <?php
}
//Get value from input and add to database

if (isset(($_POST['getvalue']))) {
  // collect value of input field
  $userName = $_POST['inputName'];
  $Dob = $_POST['inputDob'];
  $Mobile=$_POST['inputMobile'];
  $Dept = $_POST['inputDept'];
  $Batch = $_POST['inputBatch'];
  $Address = $_POST['inputAddress'];
  $Email = $_POST['inputEmail'];
  


  $sql = "INSERT INTO  `student`(`ID`, `Name`, `DOB`, `Mobile`, `Dept`, `Batch`, `Address`, `Email`) VALUES ('', '$userName', '$Dob', '$Mobile', '$Dept', '$Batch', '$Address', '$Email');";
  mysqli_query($connect,$sql);
}
?>

<!-- Action for view tool -->
<?php
if(isset($_POST['view']))
{
  $sql="SELECT `ID`, `Name`, `DOB`, `Mobile`, `Dept`, `Batch`, `Address`, `Email` FROM `student`;";
  $result=mysqli_query($connect,$sql);
    ?>
    <div class="container bg-dark p-2">
  <table class="table table-info">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Date of birth</th>
      <th>Mobile</th>
      <th>Dept</th>
      <th>Batch</th>
      <th>Address</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($rows=$result->fetch_assoc())
    {
    ?>
    <tr>
    <td><?php echo $rows['ID'];?></td>
    <td><?php echo $rows['Name'];?></td>
    <td><?php echo $rows['DOB'];?></td>
    <td><?php echo $rows['Mobile'];?></td>
    <td><?php echo $rows['Dept'];?></td>
    <td><?php echo $rows['Batch'];?></td>
    <td><?php echo $rows['Address'];?></td>
    <td><?php echo $rows['Email'];?></td>
    </tr>
  </tbody>
  <?php
    }
  ?>
</table>
    </div>
    <?php
}
?>

<!-- Action for edit tool -->
<?php
if(isset($_POST['edit']))
{
    ?>
     <div class="container bg-dark w-25 my-5 p-2">
        <div class="row">
            <div class="">
            <form action="" method="post" class="form ">
            <label for="" class="fst-italic text-primary fs-5">ID:  </label>
             <input type="text" class="form-control border-primary" name="editId"><h3>

             <button type="submit" class="btn btn-outline-primary float-end fw-bold" name="user-edit">Submit</button>
              </div>
            </form>
            </div>
        </div>
    </div>
    <?php
}

if(isset($_POST['user-edit'])){
  $Name = $_POST['editName'];
  $Id = $_POST['editId'];

  $sql="SELECT `ID`,`Name`,`DOB`,`Mobile`, `Dept`, `Batch`, `Address`, `Email` FROM `student` WHERE `ID`=$Id";

  $result=mysqli_query($connect,$sql);

  while($row=mysqli_fetch_array($result)){
    ?>
    <div class="container text-light w-75 bg-dark my-5">
<form class="row g-3" method="post" action="admin.php" enctype="multipart/form-data">
  <div class="col-md-2">
    <label class="form-label">ID:</label>
    <input type="text" class="form-control" name="editID" value="<?php echo $row['ID'] ?>">
  </div>
  <div class="col-md-5">
    <label for="inputName" class="form-label">Full Name:</label>
    <input type="text" class="form-control" name="editName" value="<?php echo $row['Name'] ?>">
  </div>
  <div class="col-md-5">
    <label for="inputDob" class="form-label">Date of birth:</label>
    <input type="date" class="form-control" name="editDob" value="<?php echo $row['DOB']?>">
  </div>
  <div class="col-md-6">
    <label for="inputMobile" class="form-label">Mobile:</label>
    <input type="text" class="form-control" name="editMobile" value="<?php echo $row['Mobile']?>">
  </div>
  <div class="col-md-6">
    <label for="inputDept" class="form-label">Department:</label>
    <input type="text" class="form-control" name="editDept" value="<?php echo $row['Dept']?>">
  </div>
  <div class="col-md-6">
    <label for="inputBatch" class="form-label">Batch:</label>
    <input type="text" class="form-control" name="editBatch" value=" <?php echo $row['Batch'] ?>">
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Address:</label>
    <input type="text"  class="form-control" name="editAddress" value="<?php echo $row['Address'] ?>">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">E-Mail:</label>
    <input type="email"  class="form-control" name="editEmail" value="<?php echo $row['Email'] ?>">
  </div>
  <div class="col-12 my-3">
    <button type="submit" class="btn btn-primary" name="edit_value">Save</button>
  </div>
</form>
    </div>
    <?php
  }
}
if(isset($_POST['edit_value'])){
  // collect value of input field
$ID=$_POST['editID'];
$Name = $_POST['editName'];
$Dob = $_POST['editDob'];
$Mobile=$_POST['editMobile'];
$Dept = $_POST['editDept'];
$Batch = $_POST['editBatch'];
$Address = $_POST['editAddress'];
$Email = $_POST['editEmail'];

// echo $ID;

$sql="UPDATE `student` SET `ID`='$ID',`Name`='$Name',`DOB`='$Dob',`Mobile`='$Mobile',`Dept`='$Dept',`Batch`='$Batch',`Address`='$Address',`Email`='$Email' WHERE `ID`='$ID'";
$result=mysqli_query($connect,$sql);
}
?>

<!-- Action for delete tool -->
<?php
if(isset($_POST['delete']))
{
    ?>
    <div class="container bg-dark w-25 my-5 p-2">
        <div class="row">
            <div class="">
            <form action="" method="post" class="form" id="del_form">
            <label for="" class="fst-italic text-primary fs-5">ID:  </label>
             <input type="text" class="form-control border-primary" name="dltId"><h3>

             <button type="submit" class="btn btn-outline-primary float-end fw-bold" name="user-dlt">Submit</button>
              </div>
            </form>
            </div>
        </div>
    </div>
    <?php
}
?>
<?php
if(isset($_POST['user-dlt'])){
$ID=$_POST['dltId'];
$_SESSION['id']=$_POST['dltId'];
$sql="SELECT `ID`,`Name`,`DOB`,`Mobile`, `Dept`, `Batch`, `Address`, `Email` FROM `student` WHERE `ID`=$ID";
$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result)){
?>
<div class="container w-75 bg-dark text-light my-4 p-3">
  <div class="row">
<div class="col-5  bg-primary">
  
  <h5>ID:    </h5>
  <h5>Name:  </h5> 
  <h5>DOB:   </h5>
  <h5>Mobile:</h5 >
  <h5>Email:</h5>
  <h5>Dept: </h5>
  <h5>Batch:</h5>
  <h5>Address: </h5>
</div>
<div class="col-7 bg-primary text-wrap">
  <h5><?php echo $row['ID'] ;?></h5>
  <h5><?php echo $row['Name'] ;?></h5>
  <h5><?php echo $row['DOB'] ;?></h5>
  <h5><?php echo $row['Mobile'] ;?><h5>
  <h5><?php echo $row['Email'] ;?><h5>
  <h5><?php echo $row['Dept'] ;?><h5>
  <h5><?php echo $row['Batch'] ;?><h5>
  <h5><?php echo $row['Address'] ;?><h5>
</div>
  <form method="post">
  <button type="submit" name="del_user" class="btn btn-danger my-2 fw-bold float-end">DELETE</button>
  </form>
</div>
</div>

<?php
}
}
if(isset($_POST['del_user'])){
  $ID=$_SESSION['id'];
  echo "<script>confirm('Do you really want to delete')</script>";
  $sql="DELETE FROM `student` WHERE ID=$ID;";
  $result=mysqli_query($connect,$sql);
  }
?>
</section>
<script src="./Bootstrap/js/bootstrap.min.js"></script>
<script src="./Bootstrap/js/jquery.min.js"></script>
</body>
</html>