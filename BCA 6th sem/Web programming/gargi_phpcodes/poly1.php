<?php
class base
{
function add($a,$b)
{
$res=$a+$b;
echo "Sum of two number = ".$res;
}
}
class child extends base
{
function add($a,$b,$c)
{
$res=$a+$b+$c;
echo "Sum of three number = ".$res;
}
}
$obj= new child();
$obj->add(1000,500);
 ?>