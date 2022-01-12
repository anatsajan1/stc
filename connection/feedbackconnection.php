<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "stc";

$conn = mysqli_connect($servername, $username, $password, $dbname);

  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO feedback (`name`, `address`, `email`, `message`)
VALUES ('$name', '$email', '$address', '$message')";
if ($conn->query($sql) === TRUE) {
  header('location:../student/home.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>