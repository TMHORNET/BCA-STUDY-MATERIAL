<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "g12:13 05-05-2021i";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);//binding parameters

// set parameters and execute
$firstname = "Jolly";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mona";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Jolie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>