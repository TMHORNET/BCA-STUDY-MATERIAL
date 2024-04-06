<?php 
$name1="emp1.txt"; 
$name2="emp2.txt"; 
if(file_exists($name1)) 
{ 
$success=rename($name1,$name2); 
if($success) 
{ 
echo"<div> file was renamed.</div>"; 
} 
} 
?>