<?php 
$name="emp02.txt"; 
if(file_exists($name)) 
{ 
$success=unlink($name); 
if($success) 
{ 
echo"<div> file was deleted.</div>"; 
} 
} 
?>