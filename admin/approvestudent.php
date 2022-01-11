<?php
include('connection.php');
$did=$_GET['userid'];
qry="UPDATE tbllogin SET `status`='1' WHERE `uid`="+id;
header('location:view.php');

?>