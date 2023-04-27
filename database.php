<?php
$server="localhost";
$username="root";
$password="";
$database="student_details";
$connect=mysqli_connect($server,$username,$password,$database);
if($connect){
  echo "<script>console.log('connected')</script>";
}
else{
  echo "<script>console.log('not connected')</script>";
}
?>