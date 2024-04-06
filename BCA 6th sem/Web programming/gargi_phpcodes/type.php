<?php
$a = "0"; // $a is string (ASCII 48)
echo "$a";
$a+= 2;//$a=0+2 // $a is now an integer (2)
echo "<br>$a";
$a = $a + 1.3; // $a is now a float (3.3)
echo "<br>$a";
$a = 5 + "10"; // $a is integer (15)
echo "<br>$a";
$a = "3.5gar" + "10 Small"; // $a is integer (15)
echo "<br>$a";
echo "gar3.5" +"10";
?> 