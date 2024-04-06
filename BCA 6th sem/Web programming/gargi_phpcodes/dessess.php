<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat"; 
echo "Session variables are set."; 
echo "<br>";
//Retrieve the values to the given session variables
echo "Favorite color is " . $_SESSION["favcolor"] . ".";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

session_unset();

// destroy the session
session_destroy();
echo "<br>";
echo "All session variables are now removed, and the session is destroyed."
?>

</body>
</html>