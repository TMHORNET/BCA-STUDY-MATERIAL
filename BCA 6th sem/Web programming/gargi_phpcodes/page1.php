<?php

?>
<form action="page2.php" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
	<p>
		Username: <input name="username" type="text" class="input-field" value="<?php if(isset($_POST["username"])) { echo $_POST["username"]; } ?>" >
	</p>
		 <p>Password: <input name="password" type="password"  class="input-field">
<p> marks 1:<input name="m1" type="number" value="<?php if(isset($_COOKIE["m1"])) { echo $_COOKIE["m1"]; } ?>" class="input-field">
<p> marks 2:<input name="m2" type="number" value="<?php if(isset($_COOKIE["m2"])) { echo $_COOKIE["m2"]; } ?>" class="input-field">
<p> marks 3:<input name="m3" type="number" value="<?php if(isset($_COOKIE["m3"])) { echo $_COOKIE["m3"]; } ?>" class="input-field">
	</p>
		<p><input type="checkbox" name="remember" /> do u want to Remember me
	</p>
		<p><input type="submit" value="Login"></span></p>
</form>