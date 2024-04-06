<html>
<head>
<title>User Login</title>
</head>
<body>
  <h2>User Login </h2>
  <form name="login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   Username: <input type="text" name="name"><br>
   Password: <input type="password" name="password"><br>
   <br>
   <input type="submit" name="submit" value="Login!">
  </form>
</body>
</html>
<?php
if(isset($_POST["name"], $_POST["password"])) 
        {     

            $name = $_POST["name"]; 
            $password = $_POST["password"]; 
$conn = mysqli_connect("localhost","root","","gargi");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
            $result = mysqli_query($conn,"SELECT * FROM users WHERE name='" . $_POST["name"] . "' and password = '". $_POST["password"]."'");
            
            $count = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid Username or Password!";
	} else {
		$message = "You are successfully authenticated!";
	} echo $message;
}
     ?>

