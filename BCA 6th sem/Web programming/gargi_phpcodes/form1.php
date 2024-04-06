<?php
if(isset($_POST['name']))
$name=$_POST['name'];
else $name="Not entered";
echo <<<_end
<html>
<head>
<title> first form in PHP</title>
</head>
<body>
Your name is :$name<br>
<form method="post" action="form1.php">
Name: <input type ="text" name="name"/>
<input type="submit"/>
</form>
</body>
</html>
_end;
?>