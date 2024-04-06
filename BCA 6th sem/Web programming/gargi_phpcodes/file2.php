<?php
$file = fopen("emp.txt","r");
$text=fread($file,30);
fclose($file);
echo $text;
?> 
