<?php
	
$showAlert = false;
$showError = false;
$exists=false;
	
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Include file which makes the
	// Database Connection.
	include 'connection.php';
	
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];
    $cpwd=$_POST['cpwd'];
	
   $sql = "Select * from register where email= '$email'";
   
   $result = mysqli_query($conn, $sql);
	
   $num = mysqli_num_rows($result);
	
	// This sql query is use to check if
	// the username is already present
	// or not in our Database
	if($num == 0) {
		if(($pwd == $cpwd) && $exists==false) {
	
			$hash = password_hash($pwd,
								PASSWORD_DEFAULT);
				
			// Password Hashing is used here.
            $sql ="INSERT INTO reg (name,address,email,number,uname,pwd,cpwd) 
            VALUES ('$name','$address','$email','$number','$uname','$pwd','$cpwd')";
			$sql="INSERT INTO login(email,pwd,type) VALUES ('$email','$pwd','student')";
	
			$result = mysqli_query($conn, $sql);
	
			if ($result) {
				$showAlert = true;
				
				echo "Entery Successfully";
			
			}
		}
		else {
			$showError = "Passwords do not match";
			echo "Passwords do not match";
		}	
	}// end if
	

	
}//end if
	
?>