
<?php 
 
 echo"Demostrate My SQL database Operations " ; 

  $conn = new mysqli("localhost","root","","mydatabase");

  if($conn->connect_error){
        die("Connection is Failded nigga".$conn->connect_error);
  }
  else{
   echo"Connection is Successfull";
  }
?>