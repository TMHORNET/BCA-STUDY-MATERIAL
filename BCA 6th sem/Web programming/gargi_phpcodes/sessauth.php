<?php 
$username="admin"; 
$password="letmein"; 
if(isset ($_SERVER["PHP_AUTH_USER"])&& isset ($_SERVER["PHP_AUTH_PW"])) 
{ 
if($_SERVER["PHP_AUTH_USER"]==$username && 
$_SERVER["PHP_AUTH_PW"]==$password) 
echo "YOU ARE NOW LOGGED IN"; 
else 
die("invalid username/ password combination"); 
} 
else 
{ 
header('WWW-authenticate: basic realm="restricted section"'); 
header("HTTP/1.0 401 Unauthorized"); 
die("please enter your username and password"); 
}

/*It is possible to use the header() function to send an "Authentication Required" message to the client browser causing it to pop up a Username/Password input window. Once the user has filled in a username and a password, the URL containing the PHP script will be called again with the predefined variables PHP_AUTH_USER, PHP_AUTH_PW, and AUTH_TYPE set to the user name, password and authentication type respectively. These predefined variables are found in the $_SERVER array. Both "Basic" and "Digest" authentication methods are supported.
realm=<realm>
A description of the protected area. If no realm is specified, clients often display a formatted hostname instead.*/