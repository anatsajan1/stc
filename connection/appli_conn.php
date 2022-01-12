<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stc";
$conn = new mysqli($servername, $username, $password,$dbname);
          if($conn === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
            }
// Check connection
if (mysqli_connect_errno())
 {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  
      
  $name=$_POST['name'];
//  $file=$_POST['file'];
  $address=$_POST['address'];
  $gender=$_POST['rbgender'];
  $dob=$_POST['dob'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $place=$_POST['place'];
  $institute=$_POST['institutename'];
  $wtw=$_POST['wheretowhere'];


  $sql ="INSERT INTO requestform (`name`,`address`,`dob`,`email`,`number`,`place`,`institutename`,`wheretowhere`,`status`) 
  VALUES ('$name','$address','$dob','$email','$number','$place','$institute','$wtw','0')";
      if (mysqli_query($conn, $sql))
      {
          header("location:../student/feedback .html");
      }
      else
      {
          echo "Error: " . $sql."<br>" . mysqli_error($conn);
         
      }
      mysqli_close($conn);
  ?>