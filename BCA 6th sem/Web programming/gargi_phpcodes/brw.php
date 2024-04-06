<html>
<body>
<?php
 $viewer = getenv("HTTP_USER_AGENT" );
 $browser = "An unidentified browser";
 if( preg_match( "/MSIE/i", "$viewer" ) )
 {
 $browser = "Internet Explorer";
 }
 else if( preg_match( "/Microsoft Edge/i", "$viewer" ) )
 {
 $browser = "edge";
 }


else if( preg_match( "/Chrome/i", "$viewer" ) )
 {
 $browser = "chrome";
 }
 $platform = "An unidentified OS!";
 if( preg_match( "/Windows/i", "$viewer" ) )
 {
 $platform = "Windows!";
 }
 else if ( preg_match( "/Linux/i", "$viewer" ) )
 {
 $platform = "Linux!";
 }
 echo("You are using $browser on $platform");
?>
</body>
</html>