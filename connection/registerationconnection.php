<?php
   if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
      $conn=mysqli_connect('localhost','root','','stc') or die("connection.failed:" .mysqli_connect_error());
      if (isset($_POST['name']) && isset($_POST['address'])&& isset($_POST['email']) && isset ($_POST['number']) && isset($_POST['uname'])&& isset($_POST['pwd'])&& isset($_POST['cpwd'])){
         $name=$_POST['name'];
         $address=$_POST['address'];
         $email=$_POST['email'];
         $number=$_POST['number'];
         $uname=$_POST['uname'];
         $pwd=$_POST['pwd'];
         $cpwd=$_POST['cpwd'];
         
         $sql ="INSERT INTO `reg` (`name`,`address`,`email`,`number`,`uname`,`pwd`,`cpwd`) 
         VALUES ('$name','$address','$email','$number','$uname','$pwd','$cpwd')";
         $query = mysqli_query($conn,$sql);
         if($query){
             echo 'entry successfull';
         }
         else{
             echo 'error occurred';
         }
    }

}
?>