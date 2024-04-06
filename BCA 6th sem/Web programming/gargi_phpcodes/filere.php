<?php
$file=fopen("emp.txt", "rb");
$name=" ";
while(!feof($file))
{
$name=fgets($file);
if($name=== false)
continue;
$name =trim($name);
if(strlen($name)==0 ||substr($name,0,1)=="#")
continue;
$names="";
$names.="<div>".$name."</div?\n";
}
fclose($file);
echo $names;
?>
