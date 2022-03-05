<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {


include('connection.php');

$password=$_POST['password'];
$username=$_POST['username'];


$sql = "Select * from `login` where `email`= '$username' and `pwd`='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count>=1)
{
    echo "<script> alert('Login Successfully..!');
			window.location='../student/home.html'</script>";
}



else{
    $showError = "Password or Username do not match";
			
			
}

}

?>
<!--echo "<script> alert('Sumit Successfully!!'); 
        //window.location='../student/feedback.html';</script>