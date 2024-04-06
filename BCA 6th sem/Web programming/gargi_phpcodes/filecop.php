<?php
$name1="emp.txt";
$name2="emp2.txt";
if(file_exists($name1))
{
$success=copy($name1,$name2);
if($success)
{
echo"<div> file was copied.</div>";
}
}
?>