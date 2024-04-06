<?php
function abc()
{
echo "hello <br>";
 function xyz()
{
 echo "I don't exist until abc() is called.\n";
}
}
/* We can't call xyz() yet
 since it doesn't exist. */
abc();
/* Now we can call xyz(),
 abc()'s processing has
 made it accessible. */
xyz();
?> 