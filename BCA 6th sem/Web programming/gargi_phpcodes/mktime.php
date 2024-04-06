<?php
$yester =
mktime(0,0,0,date("m"),date("d"),date("Y")+1);
echo "yester is ".date("y/m/d", $yester);
?> 