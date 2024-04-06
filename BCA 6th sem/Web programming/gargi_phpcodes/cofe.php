<?php
function makecoffee($types = array("cappuccino"), $coffeeMaker =
NULL)
{
 $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
echo"<br>";
 return "Making a cup of ".join("+ ", $types)." with $device.<br>";
}
echo makecoffee(array("latte"));
echo makecoffee(array("latte",lavazza"), "teapot");
?>