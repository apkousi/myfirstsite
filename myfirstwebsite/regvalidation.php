<?php
session_start();
$con=mysqli_connect('localhost','root','','students_guide');

$name= $_POST['username'];
$email=$_POST['email'];
$pass= $_POST['password'];
$cpassword = $_POST['confirmpassword'];

$s="select * from register where username='$name'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

    if($num == 1)
    {
         echo "<script>alert('UserName already exists. Please login')</script>";
    }else{
  $reg= "insert into register(username,email,password,confirmpassword) values ('$name','$email','$pass','$cpassword')";
  mysqli_query($con, $reg);
          echo "<script>alert('Thank you for being connected with our website. Please login to start a tour')</script>";
         }
?>
