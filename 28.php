<?php

// Connect to MySQL

$conn = new mysqli("localhost", "root", "", "test_db");

// Insert data

$conn->query("INSERT INTO users (name, email) VALUES ('Alice', 

'alice@example.com')");

// Retrieve and display data

$result = $conn->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {

 echo "Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";

}

?>
