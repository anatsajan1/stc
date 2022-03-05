<?php
include("connection.php");

$email=$_GET['email'];
$sql=mysqli_query($conn,"UPDATE  requestform SET status='Declined'WHERE email='$email'");
header('Location: applicationview.php');	
?>