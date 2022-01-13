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



<?php
$path = $_SERVER['DOCUMENT_ROOT']:
$path .="connection.php";

require_once($path, 'connection.php');

$sid = $_GET['email'];
$Delsql = "DELETE FROM `requestform` WHERE email=$sid";
$res = mysqli_query($db, $Delsql);
if($res){
    header('location: applicationview.php');

}else{
    echo"Failed to delete";
}
?>
