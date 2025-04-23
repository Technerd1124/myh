<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>

    <form method="post">
        Name: <input type="text" name="name"> <br><br>
        Address: <input type="text" name="address"> <br><br>
        Mobile No: <input type="text" name="mobile_no"> <br><br>
        Date of Birth: <input type="date" name="dob"> <br><br>
        Post: <input type="text" name="post"> <br><br>
        Salary: <input type="text" name="salary"> <br><br>
        <input type="submit" name="submit" value="Submit"> <br><br>
    </form>

   

<?php 
if (isset($_POST["submit"])) { 
 echo "Name: " . $_POST["name"] . "<br>"; 
 echo "Address: " . $_POST["address"] . "<br>"; 
 echo "Mobile No: " . $_POST["mobile_no"] . "<br>"; 
  echo "Date of Birth: " . $_POST["dob"] . "<br>"; 
 echo "Post: " . $_POST["post"] . "<br>"; 
 echo "Salary: " . $_POST["salary"]; 
} 

?>
</body>

</html>