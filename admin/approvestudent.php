<?php
include('connection.php');
//$status=$_GET['status']
$get_email=$_GET['email'];
mysql_query($conn,"update `requestform` SET `status`='1' where `email`='$get_email'")or die(mysql_error());
header('location:adminhome.html');
?>












