<?php session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['roll'] = $_POST['roll'];   
    $_SESSION['m1'] = $_POST['m1'];
	$_SESSION['m2'] = $_POST['m2'];
	$tot=$_SESSION['m1']+$_SESSION['m2'];
	$per=round($tot/2);
      ?>

<!DOCTYPE html>
<html>
<head>
    <title>Print Name</title>
</head>
<body>
<p>Your Name is: <?php echo $_SESSION['name']; ?></p>   
<p>Your roll is: <?php echo $_SESSION['roll']; ?></p>  
<p>Your marks1 is: <?php echo $_SESSION['m1']; ?></p>  
<p>Your marks2 is: <?php echo $_SESSION['m2']; ?></p>
<?php echo "The total is :" . $tot;?> <br>
<?php echo "The per is :" . $per;?>


</body>
</html>

