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