
<?php
include("connection.php");
session_start();
if(!isset($_SESSION["admin"]))
{
?>
<script type="text/javascript">
  window.location="applicationview.php";
</script>
<?php
}
?>
 


<html>
  <head>
  <link rel="stylesheet" href="#">
  </head>
<body  class="s">
<nav class="navbar">
<h1>Application Lists</h1>

    
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
                        <th>STATUS</th>
                        
                        <th>Approve</th>
                        <th>decline</th>
                      



            
                      </tr>
                    </thead>
                    <tbody>
                    <?php

    $res=mysqli_query($conn,"select * from requestform where status='0'");
	
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
             <td><?php echo $rs["email"]; ?></td>
             <td><?php echo $rs["number"]; ?></td>
             <td><?php echo $rs["place"]; ?></td> 
             <td><?php echo $rs["institutename"]; ?></td> 
             <td><?php echo $rs["wheretowhere"]; ?></td>  
             <td><?php echo $rs["status"] ;?></td>
             
      	
            <!-- <td><a href="delete-process.php?userid=<?php echo $row["userid"]; ?>">Delete</a></td>-->
        <td><a href="approvestudent.php?email=<?php echo $rs["email"]; ?>"><title="Approve">Approve</a></td>
        <td><a href="declinerequest.php?email =<?php echo $rs["email"]; ?>"><title="Approve">Decline</a></td>
      
      			 
          

			 
          
            
          </tr>
        <?php
    }
?>   
                        
                     
                     
                    </tbody>
                   
  </body>
</html>