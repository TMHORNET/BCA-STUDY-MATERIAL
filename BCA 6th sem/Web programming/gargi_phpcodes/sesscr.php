<?php
// Start the session
session_start();
//Session id for a particular session
echo session_id();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables,assigning the values to the session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat"; 
echo "Session variables are set."; 
echo "<br>";
//Retrieve the values to the given session variables
echo "Favorite color is " . $_SESSION["favcolor"] . ".";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>