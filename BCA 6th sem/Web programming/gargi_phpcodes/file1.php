<html>
<body>
<?php
$path=getcwd();
$items=scandir($path);
$files=array();
foreach($items as $item)
{
$item_path = $path. DIRECTORY_SEPARATOR .$item;
if(is_file($item_path))
{
$files[] = $item;
}
}
echo"<p>Files in $path</p>";
echo"<ul>";
foreach($files as $file)
{
echo "<li>".$file."</li>";
}
echo "</ul>";
?>
</body>
</html>
