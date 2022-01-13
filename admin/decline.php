<?php
include('connection.php');
$did=$_GET['email'];
$delete=mysqli_query($con,"delete FROM `requestform` where email='$did'");
header('location:../applicationview.php');

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stc";
$conn = new mysqli($servername, $username, $password,$dbname);
          if($conn === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
            }

$medid=$_POST['medicineid'];

$s="select * from addmedicine where medicineid = '$medid'";
$result = mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num==0){
    die("Medicine Id is not valid");
}


$sql = "DELETE FROM addmedicine WHERE medicineid = '$medid'";

if ($conn->query($sql) === TRUE) 
{
  echo "Record deleted successfully";
} 

else
{
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>