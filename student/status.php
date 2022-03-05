<?php
include("../connection/connection.php");
session_start();
if(!isset($_SESSION["admin"]))
{
?>

<?php
}
?>
 


<html>
  <head>
		<title>home page</title>
		<link rel="stylesheet" type="text/css" href="admin.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,200&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,200&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="main">
				
				<ul>
					
					 <li class="active"><a href="adminhome.html">Home</a></li>
					 <li><a href="viewstudent.php">Registration View</a></li>
					<li><a href="applicationview.php">Application View</a></li>
					<li><a href="feedbackview.php">Feedback View</a></li>
					<li><a herf="#">Contat us </a></li>
					<li><a href="../index.html">Logout </a></li>	
	
				</ul>
			</div>
  <link rel="stylesheet" type="text/css" href="../admin/admin.css">
  </head>
<body  class="s">
<nav class="navbar">
<h1>Applications</h1>

                  <table border=3>
                    <thead>
                      <tr>
                      
                      <th>SI NUMBER</th>
                        <th>NAME</th>
                        <th>IMAGE</th>
                        <th>ADDRESS</th> 
                        <th>GENDER</th> 
                        <th>DATE OF BIRTH</th>                   
                        <th>EMAIL</th>
                        <th>NUMBER</th>
                        <th>PLACE</th>
                        <th>INSTITUTE NAME</th>
                        <th>WHERE TO WHERE</th>
                        <th>YOUR APPLICATION STATUS</th>
            
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                    $email=$_POST['email'];

    $res=mysqli_query($conn,"select * from requestform where email='$email'");
	
    $i=1;
    while($rs=mysqli_fetch_array($res))
    {
	
        ?>
         <tr>
		 <td><?php echo $i++;?></td>
             <td><?php echo $rs["name"]; ?></td>
             <td><?php  $pathx="../image/"; 
             echo $file=$rs["image"];
             echo '<img src="'.$pathx.$file.'"height=100 width=100>';?></td>
             <td><?php echo $rs["address"]; ?></td>
             <td><?php echo $rs["gender"]; ?></td>
             <td><?php echo $rs["dob"]; ?></td>
             <td><?php echo $rs["email"]; $email=$rs["email"]; ?></td>
             <td><?php echo $rs["number"]; ?></td>
             <td><?php echo $rs["place"]; ?></td> 
             <td><?php echo $rs["institutename"]; ?></td> 
             <td><?php echo $rs["wheretowhere"]; ?></td>  
             <td><?php echo $rs["status"]; ?></td>
            
          </tr>
        <?php
    }
?>   
                        
                     
                     
                    </tbody>
                   
  </body>
</html>