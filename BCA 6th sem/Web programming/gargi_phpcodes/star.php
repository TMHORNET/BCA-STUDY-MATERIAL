<?php  
for($i=1; $i<=15; $i++)  
{  
 if($i%2 != 0)  
{  // i=2,   j=13,*, j=12,*, j=11,*   and so on
 for($j=15; $j>=$i; $j--)  
{  
echo "* ";  
}  
echo "<br>";  
}  
}  
?> 
