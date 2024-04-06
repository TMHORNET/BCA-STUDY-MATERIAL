<?php
class base
{
function add($a,$b)
{
$res=$a*$b;
echo "Multiplication = ".$res;
}
}
class child extends base
{
function add($a,$b)
{
$res=$a+$b;
echo "Sum  = ".$res;
}
}
 $obj= new child();
$par=new base();
$par->add(20,40);
 $obj->add(1000,500);
 
?>