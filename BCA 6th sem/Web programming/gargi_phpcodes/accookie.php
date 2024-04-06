<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<html>
      <head>
      <title>Accessing Cookies with PHP</title>
   </head>
   
   <body>
      
      <?php
         echo $_COOKIE["$cookie_name"]. "<br />";
         
         ?>
      
   </body>
</html> 