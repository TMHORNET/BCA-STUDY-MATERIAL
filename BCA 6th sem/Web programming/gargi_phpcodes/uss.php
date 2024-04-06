<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gargi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql1="create table users(name varchar(10) ,password varchar(20))";
if ($conn->query($sql1) === TRUE) {
  echo "table created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO users (name, password)
VALUES ('gar', 'ch')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>