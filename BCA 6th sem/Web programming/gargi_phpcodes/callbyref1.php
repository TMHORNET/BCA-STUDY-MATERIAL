<?php
$a1="William";
$a2="henry";
$a3="gates";
echo $a1." ".$a2." ".$a3 ."<br/>" ;
fix_name($a1,$a2,$a3);
echo $a1." ".$a2." ".$a3."<br>";
function fix_name(&$n1,&$n2,&$n3)
{
$n1=strtoupper($n1);
$n2=strtoupper($n2);
$n3=strtoupper($n3);
}
?>