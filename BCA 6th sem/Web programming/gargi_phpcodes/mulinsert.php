<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";*/

// Create connection
$conn = mysqli_connect("localhost","root","", "library");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO myGuests (firstname, lastname, email)
VALUES ('John1', 'Doe1', 'john1@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary1', 'Moe1', 'mary1@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie1', 'Dooley1', 'julie1@example.com')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>