<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {


include('connection.php');

$password=$_POST['password'];
$username=$_POST['username'];


$sql = "Select * from `login` where `email`= '$username' and `pwd`='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count==1)
{
    header("Location: ../student/home.html");
}

else{
    echo "Invalid username or password";
}

}

?>