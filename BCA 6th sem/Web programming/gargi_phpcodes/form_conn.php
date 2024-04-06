<?php   //connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gargi";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<body>
<h1>Login Form</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
<b>Enter Username</b><br>
<input type="text" name="uname" required><br>
<b>Enter Email</b><br>
<input type="text" name="email" required><br>
<b>Enter Password</b><br>
<input type="password" name="pass" required><br><br> 
<input type="submit" value="Login"><br>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$sql1="create table login(username varchar(10) primary key,email varchar(10) unique,password varchar(20) not null)";
if ($conn->query($sql1) === TRUE) {
  echo "Table login created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql="Insert into login(username,email,password)
values('".$_POST['uname']."','".$_POST['email']."','".$_POST['pass']."')";
if($conn->query($sql) === TRUE){
$result="<b><br>Welcome ".$_POST['uname']."</b><br>Result are saved in the database.";
} else{
$result="Error occured in running the query";
}
?>
<?php
if(isset($result)){
echo $result;
}
}
$conn->close();
?>
</form>
</body>
</html>