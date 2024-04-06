<?php
$makefunction = true;
bar();
fun();
if ($makefunction) {
 function fun()
 {
 echo "I don't exist until program execution reaches me <br>";
 }
} 
 if ($makefunction)
fun();
function bar()
{
 echo "I exist immediately upon program start.<br>";
}
?>