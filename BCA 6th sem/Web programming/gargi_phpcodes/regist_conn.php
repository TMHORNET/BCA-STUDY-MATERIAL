<?php
$servername = "localhost";
$username = "root"; $password = "";
$database = "gargi";
// Create connection
$link = mysqli_connect($servername, $username, $password,$database);
// Check connection
if (!$link) {
 die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully "."<br>";
$name = $email = $age = $password = "";
$name_err = $email_err = $age_err = $password_err = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 if(empty($_POST["name"]))
 {
 $name_err="Name is Required";
 } else {
 $name = trim($_POST["name"]);
 if (!preg_match("/^[a-zA-Z ]*$/",$name))
 {
 $name_err = "Only letters and white space allowed";
 }
 }
 if(empty($_POST["email"]))
 {
 $email_err="Email is Required";
 } else {
 $email=trim($_POST["email"]);
 if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
 {
 $email_err = "Invalid email format";
 }
 }
 if(empty($_POST["age"]))
 {
 $age_err="Age is Required";
 } else {
 $age = trim($_POST["age"]);
 }
 if(empty($_POST["password"]))
 {
 $password_err="Password is Required";
 } else {
 $password = trim($_POST["password"]);
 }
$sql1="create table login12(username varchar(10) primary key,email varchar(20) unique,age int(10),password varchar(20) not null)";
 if(mysqli_query($link, $sql1)) {
  echo "Table login created successfully";
} else {
  echo "Error creating table: ";
}
 $sql="Insert into login12(username,email,age,password)
values('".$_POST['name']."','".$_POST['email']."','".$_POST['age']."','".$_POST['password']."')";
 if(mysqli_query($link,$sql)){
 echo "<br>"."Profile Edited"."<br>";
 } else {
 echo "Something Wrong"."<br>";
 }
}
?>
<!doctype html>
<body>
<h1>REGISTRATION FORM</h1>
<br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<input type="text" name="name" placeholder="Name"><br>
<p><?php echo $name_err;?><br><br>
<input type="text" name="email" placeholder="Email"><br>
<p><?php echo $email_err;?><br><br>
<input type="text" name="age" placeholder="Age"><br>
<p><?php echo $age_err;?><br><br>
<input type="password" name="password" placeholder="Password">
<p><?php echo $password_err;?><br><br>
<input type="submit" value="submit" name="submit">
</form>
</body>
</html>