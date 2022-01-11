<?php
include("connection.php");
if(isset($_POST["submit"]));
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$result=mysqli_query($conn,"Select * from admin where `email`= '$email' and `password`='$password'");
	$row=mysqli_fetch_array($result);
   if($row>0)
   	{
    header("location:../admin/adminhome.html");
    }
    else
    {
    echo "<script> alert('Invalid Username/Password!!'); 
    window.location='adminlogin.php';</script>";
    }


}