<?php 
session_start(); 
// store session data 
$_SESSION['views']=0; 
?> 
<html> 
<body> 
<?php 
//retrieve session data 
echo "Pageviews=". $_SESSION['views']; 
?> 
</body> 
</html>