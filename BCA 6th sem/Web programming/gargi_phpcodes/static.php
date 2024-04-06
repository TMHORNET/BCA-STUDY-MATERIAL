<?php
function myTest() {
  static $x = 1;
$y=1;

$x++;
$y++;
echo "x value".$x;  echo"<br>";
echo "y value".$y;
 }

echo myTest();
echo "<br>";
echo myTest();
echo "<br>";
echo myTest();
?>