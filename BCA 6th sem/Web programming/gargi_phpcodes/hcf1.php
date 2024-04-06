<html> 
<head> 
<title>hcf Program in PHP</title> 
</head> 
<body> 
<form method="post"> 
 Enter the Number1 <br> 
 <input type="number" name="number1" > <br>
Enter the Number2<br> 
 <input type="number" name="number2" > <br>
 <input type="submit" name="submit" value="Submit" /> 
</form></body> 
</html> 
<?php 
 if($_POST)
 { 
   $num1=$number1 = $_POST['number1']; 
$num2=$number2 = $_POST['number2']; 

while ($number1!= $number2) {//not equal, 12 30
  if ($number1 > $number2)
$number1 = $number1 - $number2;
  else
$number2 = $number2 - $number1;}
}
echo "HCF of $num1 and $num2 is:". $number1;
?>
