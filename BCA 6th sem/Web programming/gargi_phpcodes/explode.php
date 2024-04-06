<?php
$str = 'one.two.threefour';
// zero limit
print_r(explode('.',$str,0));
print "<br>";
print_r(explode('.',$str));
print "<br>";
// positive limit
print_r(explode('.',$str,2));
print "<br>";
// negative limit 
print_r(explode('.',$str,-2));
?>  