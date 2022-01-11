<?php
include('connection.php');
$did=$_GET['email'];
$delete=mysqli_query($con,"delete FROM `requestform` where email='$did'");
header('location:../applicationview.php');

?>