<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBobj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE if not exist MyGuests21121(
id INT(6)  AUTO_INCREMENT primary key,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) unique)";
if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} echo "<br>";
if(!$conn->query($sql)){
    echo "Table creation failed: (" . $conn->errno . ") " . $conn->error;}



/*else {
  echo "Error creating table: " . $conn->error;
}*/

$conn->close();
?>