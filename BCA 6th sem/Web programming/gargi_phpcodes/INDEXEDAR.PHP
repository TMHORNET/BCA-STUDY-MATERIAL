<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
ECHO "$arrlength";
echo "<br>";
for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>