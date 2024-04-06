<?php
$a=10;
$b=20;
echo "before swaping value is : $a $b <br>";
function swap(&$i,&$j)
{ global $a,$b;
$t=$i;
$i=$j;
$j=$t;
echo "<br>";
echo "after swaping $i $j";
//echo "<br";
echo "after swaping using a and b $a $b";
}
swap($a,$b);
?> 