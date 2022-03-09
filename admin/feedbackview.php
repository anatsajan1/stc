<?php
include("connection.php");
session_start();
if(!isset($_SESSION["admin"]))
{
?>
<script type="text/javascript">
  window.location="feedbackview.php";
</script>
<?php
}
?>



<html>
	<head>
		<title>home page</title>
		<link rel="stylesheet" type="text/css" href="applicationview.css">
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
    </header>	
<h1>Feedbacks..</h1>

    
                  <table border=3>
                    <thead>
                      <tr>
                      
                      <th>SI NUMBER</th>
                        <th>NAME</th>
                        <th>ADDRESS</th>                    
                        <th>EMAIL</th>
                        <th>MESSAGE</th>
                
                      </tr>
                    </thead>
                    <tbody>
                    <?php

    $res=mysqli_query($conn,"select * from feedback");
	
    $i=1;
    while($rs=mysqli_fetch_array($res))
    {
	
        ?>
         <tr>
		 <td><?php echo $i++;?></td>
             <td><?php echo $rs["name"]; ?></td>
             <td><?php echo $rs["address"]; ?></td>
             <td><?php echo $rs["email"]; ?></td>
             <td><?php echo $rs["message"]; ?></td>
                
      	
        
            
          </tr>
        <?php
    }
?>   
                        
                     
                     
                    </tbody>
                   
  </body>
</html>