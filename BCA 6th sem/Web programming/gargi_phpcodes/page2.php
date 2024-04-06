<?php
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
setcookie ("m1",$_POST["m1"],time()+ 3600);
	setcookie ("m3",$_POST["m3"],time()+ 3600);
setcookie ("m2",$_POST["m2"],time()+ 3600);

	echo "Cookies Set Successfuly" ; echo "<br>";
echo  $_COOKIE["username"]; echo "<br>";
echo $_COOKIE["password"]; echo "<br>";
echo "marks scored in subject 1:" . $_COOKIE["m1"]; echo "<br>";
echo "marks scored in subject 2:" .$_COOKIE["m2"]; echo "<br>";
echo "marks scored in subject 3:" .$_COOKIE["m3"]; echo "<br>";
$tot=$_COOKIE["m1"]+$_COOKIE["m2"]+$_COOKIE["m3"];
$per=round($tot/3,2);
echo " the sum total  marks and per centage is:" . $tot  . "<br>". $per;

} else {
	setcookie("name","");
	setcookie("password","");
	echo "Cookies Not Set";
} 

?>

<p><a href="page3.php"> Go to Page3 </a> </p>