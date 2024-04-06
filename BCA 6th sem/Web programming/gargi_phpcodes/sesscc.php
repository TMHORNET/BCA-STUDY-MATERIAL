<?php 
session_start(); 
/*The isset() function checks if the "views" variable 
has already been set. If "views" has been set, we can 
increment our counter. If "views" doesn't exist, we create a 
"views" variable, and set it to 1:*/

if(isset($_SESSION['views'])) 
$_SESSION['views']=$_SESSION['views']+1; 
else 
$_SESSION['views']=1; 
echo "Views for this page=". $_SESSION['views']; 
?>