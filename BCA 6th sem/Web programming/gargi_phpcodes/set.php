<?php
$a = "5bar"; // string
$b = true; // Boolean
settype($a, "integer"); // $a is now 5 (integer)
echo "$a";
$a=(int)$a;
echo $a;
settype($b, "integer"); // $b is now "1" (string)
echo "<br>$b";
?>