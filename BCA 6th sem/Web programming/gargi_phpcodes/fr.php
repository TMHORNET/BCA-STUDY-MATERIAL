<form method=post action=''>
<p>selection for the list</p><select name='color[]' size=4 multiple>
<option value='blue'>Blue</option>
<option value='green'>Green</option>
<option value='red'>Red</option>
<option value='yellow'>Yelllow</option>
<option value='' selected>Select a Color </option>
<option value='white'>White</option>
</select> <br>
<input type=submit></form>


<?php

$color= $_POST['color'];
if( is_array($color)){
while (list ($key, $val) = each ($color)) {
echo "$val <br>";
}
}//
else{echo "not array";}
?>