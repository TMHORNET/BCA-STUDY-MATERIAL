<html>
<head>
<title>An HTML form that calls itself</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<p><label for="guess">Type your guess here:</label> <br/>
<input type="text" id="guess" name="guess" /></p>
<button type="submit" name="submit" value="submit">Submit</button>
</form>
</body>
</html>
