<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css" />

    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>

    <!-- navigation-bar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a href="#" class="navbar-brand ms-1">
          <i class="fa-solid fa-book-open-reader me-3" loading="lazy"></i>
          STUDENT DETAILS
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#myNavBar"
          aria-controls="myNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNavBar">
          <ul class="navbar-nav ms-auto my-1">
            <li class="nav-item me-4">
              <a href="" class="nav-link active">Home</a>
            </li>
            <li class="nav-item">
              <button
                type="button"
                class="btn my-1 btn-sm btn-outline-warning"
                data-bs-toggle="modal"
                data-bs-target="#login-modal"
                >
                Login
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- navigation-bar-end -->
<!-- display-image -->

    <img class="img" style=" height: 90vh; overflow: hidden;
    width: 100%;" src="./img/img-1.jpg" alt="" />

<!-- login-modal-start -->

   <div class="modal fade" tabindex="-1" id="login-modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-light">

      <div class="modal-header d-flex justify-content-center">
        <h5 class="modal-title">LOGIN</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
     <div class="container">
      <div class="row flex-row">
        <div class="col-6">
          <form action="" method="post">
          <button type="button" class="btn fw-bold text-success" data-bs-target="#admin-modal" data-bs-toggle="modal" data-bs-head="Admin" name="btn-admin">
            <img class="w-50" src="https://sunedge.co.in/assets/uploads/profile_pics/admin.png" alt="" />
            Admin
          </button>
        </div>

        <div class="col-6">
          <button type="button" class="btn fw-bold text-primary" data-bs-toggle="modal" data-bs-target="#student-modal" data-bs-head="Student" name="btn-student">
            <img class="w-50" src="https://www.pngmart.com/files/21/Admin-Profile-PNG-Clipart.png" alt="">
            Student
          </button>
          </form>
        </div>
      </div>
     </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- login-modal-end -->

   <div class="modal fade modal-sm" id="admin-modal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold text-success">ADMIN</h5>
          <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="admin.php" method="post"  class="form d-flex flex-column align-item-center">
            <label for="" class="fst-italic">Username :  </label>
             <input type="text" class="form-control border-primary m-3 w-75" name="username"><br>
          
            <label for="" class="fst-italic">Password :</label>
             <input type="password" class="form-control border-primary m-3 w-75" name="password"><br>

             <p id="invalid"></p>
        </div>
        <div class="modal-footer d-flex">
        <button type="submit" class="btn btn-outline-primary fw-bold" name="admin-login">Login</button>
        </form>
       </div> 
      </div>
    </div>
   </div>

<!-- student-modal -->
   <div class="modal fade modal-sm" id="student-modal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold text-success">STUDENT</h5>
          <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="request" class="form d-flex flex-column align-item-center">
            <label for="" class="fst-italic">ID:  </label>
             <input type="text" class="form-control border-primary m-3 w-75" name="userid"><br>
          
            <label for="" class="fst-italic">DOB:</label>
             <input type="date" class="form-control border-primary m-3 w-75" name="dob"><br>
        </div>
        <div class="modal-footer d-flex">
        <button type="submit" class="btn btn-outline-primary fw-bold" name="student-login">Login</button>
        </form>
       </div> 
      </div>
    </div>
   </div>

  </body>
  <script src="./Bootstrap/js/bootstrap.min.js"></script>
  <script src="./Bootstrap/js/jquery.min.js"></script>
</html>

<?php
if(isset($_POST['admin-login'])){
  // $_SESSION['name']=$_POST['username'];
  // $_SESSION['pswd']=$_POST['password'];

  if($_POST['username']=="gugan" && $_POST['password']=="1234"){
  echo "<meta http-equiv='refresh'content='1;URL=admin.php'>";

  }
  else{
     echo "<script>alert('invalid username and password')</script>";
  }
}
?><?php
if(isset($_REQUEST['student-login'])){
include "./database.php";

$ID=$_REQUEST['userid'];
$PASS=$_REQUEST['dob'];

echo "<script>console.log('$PASS')</script>";

$sql="SELECT * FROM `student` WHERE `ID`=$ID AND `DOB`=DATE('$PASS')";  
$result = mysqli_query($connect, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
if($count == 1){ 
   $_SESSION['ID']=$row['ID'];
echo "<script>console.log('$_SESSION[ID]')</script>";
  echo "<meta http-equiv='refresh'content='1;URL=student.php'>";
}else{
  echo "<script>alert('invalid id and dob')</script>";
}
}
?>