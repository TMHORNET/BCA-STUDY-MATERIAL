<?php
$servername = "localhost";
$username = "root";
$password = "";

// 1. Create connection in the object oriented methodology
$conn = new mysqli($servername, $username, $password);
// Check connection,for the occurrence of error in the connection made
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE employee";
$res=$conn->query($sql);//it returns 1(true),for exectuion.$res have value 1
echo "the check".$res; echo "<br>";
if ($res ==1) {
  echo "Database created successfully";
} else {
  echo "Error creating database:" .$conn->error;
}

//$conn->close();

$dbname="employee";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql1="CREATE table employee(
emp_id int(10) primary key,emp_name varchar(20) not null,emp_salary int(20) not null,emp_designation varchar(20))";

if ($conn->query($sql1) === TRUE) { echo "<br>";
    echo "the table employee is created";
}
 else {
    echo "Error creating table: " . $conn->error;
}
//$conn->close();

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn1->connect_error);
}

$sql2="insert into employee values(121,'nakul',50000,'manager')";
if ($conn->query($sql2) === TRUE) { echo "<br>";
    echo "the record is inserted in table enmployee"; echo"<br>";
}
 else {
    echo "Error in insertion: " . $conn->error;
}

$sql3 = "SELECT * FROM employee";
$result = $conn->query($sql3);

if ($result->num_rows > 0) {//table structure
	echo "<table border='1'><tr><th>employeeID</th><th>employeeName</th><th> employee_sal</th><th>employee_des</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc())
	  {  
    echo "<tr><td>".$row["emp_id"]."</td><td>". $row["emp_name"]. "</td><td>". $row["emp_salary"]. "</td><td>" . $row["emp_designation"]. "</td></tr>". "<br>";
  }echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>