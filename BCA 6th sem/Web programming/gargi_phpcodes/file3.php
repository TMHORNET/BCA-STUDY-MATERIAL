<html>
<head>
<title>Reading a file using PHP</title>
</head>
<body>
<?php
$filename = "C:/xampp/htdocs/gargi/emp.txt";//path of the file ,saved
$file = fopen($filename,"r" );
if($file == false )
{
 echo ( "Error in opening file" );
 exit();
}
$filesize = filesize($filename );
$filetext = fread($file, $filesize );
fclose($file );
echo ( "File size : $filesize bytes" );
echo ( "<pre>$filetext</pre>" );
?>