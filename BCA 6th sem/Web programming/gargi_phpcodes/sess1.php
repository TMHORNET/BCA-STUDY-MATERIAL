<?php session_start();
      
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>

<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {//store data in session variables.
        $_SESSION['name'] = $_POST['name'];
            $_SESSION['roll'] = $_POST['roll'];   
    $_SESSION['m1'] = $_POST['m1'];
	$_SESSION['m2'] = $_POST['m2'];
}
?>
<P> Input Form </p>
    <form action="session.php" method="POST">
       input your name <input type="text" name="name"> <br>
	  <p> input roll number <input type="text" name="roll"> </p> <br>
	  <p> input marks of m1 <input type="number" name="m1"> </p><br>
	  <p> input marks of m2 <input type="number" name="m2"> </p>
        <input type="submit" value="submit">  
    </form>   


</body>
</html>

