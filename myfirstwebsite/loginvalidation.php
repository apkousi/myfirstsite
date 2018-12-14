<?php
session_start();

$con=mysqli_connect('localhost','root','','students_guide');

$name= $_POST['username'];
$email=$_POST['email'];
$pass= $_POST['password'];

$s= "select * from register where username='$name' && password='$pass'";

$result=mysqli_query($con, $s);

$num=mysqli_num_rows($result);
if($num == 1){
  $_SESSION['username']=$name;
  header('location:course.php');
}else{
  echo "Please check username and password";
  header('location:login.php');
}
?>
