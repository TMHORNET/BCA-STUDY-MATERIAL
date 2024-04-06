<?php
ECHO "THE LENGHT OF THE STRING IS:";
echo strlen("Hello world!"); // outputs 12
echo "<BR>";
ECHO "THE COUNT OF THE STRING IS:";
echo str_word_count("Hello world!"); // outputs 2
echo "<br>";
ECHO "THE STRING REVERSAL IS:";
echo strrev("Hello world!"); 
echo "<br>";
echo " the position of the word world is :";
echo strpos("Hello world!", "world"); // outputs 6
echo "<br>";
echo " replace the word universe with Dolly, the string would be :";
echo str_replace("universe", "Dolly", "Hello universe!"); 
echo "<br>";
$str="My name is BCA";  
$str=strtolower($str);  
echo $str;  
echo "<br>";
echo strtolower("HELLO HW R you");
?>
