<!-- save as data_validation.php -->

<form method="post">

 Email: <input type="text" name="email"><br>

 Age: <input type="text" name="age"><br>

 <input type="submit" name="submit" value="Validate">

</form>

<?php

if (isset($_POST['submit'])) {

 $email = $_POST['email'];

 $age = $_POST['age'];

 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

 echo "Invalid email format<br>";

 } elseif (!is_numeric($age) || $age <= 0) {

 echo "Invalid age<br>";

 } else {

 echo "Valid input!<br>";

 echo "Email: $email<br>";

 echo "Age: $age";

 }

}

?>
