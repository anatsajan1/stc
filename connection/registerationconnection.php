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
	
   $sql = "Select * from reg where email= '$email'";
   
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
			$sql2="INSERT INTO login(email,pwd,type) VALUES ('$email','$pwd','student')";
	
			$result = mysqli_query($conn, $sql);
			$result2 = mysqli_query($conn, $sql2);



	
			 if ($result){
				 if ($result2){
					$showAlert = true;
					echo "<script> alert('Registeration is Successfull...!');
					window.location='../userlogin.html'</script>"; 
					
			     }
			}
		}
		else {
			$showError = "Passwords do not match";
			echo "<script> alert('Conform Passwords do not match');
			window.location='../reg.html'</script>";
			
		}	
	}// end if
	

	
}//end if
	
?>