<?php
$z=0;
$sum=0;
echo "Table<br>";
echo "<table align=center border=1>
<tr><td>Name</td><td>Roll No</td><td>Class</td><td>Mark1</td><td>Mark2</td><td>Mark3</td><td>Total</td></tr>";
foreach(explode(",",file_get_contents("re.txt")) as $key => $val){
if($key%6==0){
 echo "<tr>";
 echo "<td>".$val."</td>";
}else if($key%6==1 || $key%6==2   ){
 echo "<td>".$val."</td>";
}else{
	$sum+=$val;
 echo "<td>".$val."</td>";
}
if($key%6==5){
echo "<td>".number_format($sum/'3', 1 )."%"."</td></tr>";
$sum=0;
}
}
?>