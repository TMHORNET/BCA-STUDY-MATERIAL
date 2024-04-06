<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gargi";

// 1. Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// writing the query as per the requirement
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('rohit', 'paul', 'rpaul@gmail.com')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>