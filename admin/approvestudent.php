<?php
include("connection.php");

$email=$_GET['email'];
$sql=mysqli_query($conn,"UPDATE  requestform SET status='approved'WHERE email='$email'");
header('Location: applicationview.php');	
?>