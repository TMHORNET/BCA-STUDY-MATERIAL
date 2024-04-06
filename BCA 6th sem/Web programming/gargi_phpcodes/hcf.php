<?php
if(isset($_POST['submit'])){
	$number= $_POST['number'];
	$ar=(explode(",",$number));
	$no= count($ar);
	sort($ar);
	$n=1;
	$i=1;
	while($n!=$no){
		if($ar[$i]%$ar[0]!=0){
			$a=$ar[0];
			$ar[0]=$ar[$i]%$ar[0];
			$ar[$i]=$a;
		}
		else{
			$n++;
			$i++;
		}
	}
	echo "The HCF of all the Number is ".$ar[0];
}
?>

<html>
	<head>
		<title>HCF</title>
	</head>
	<body>
		<form action="" method='POST'>
		<label for="number">Please Enter No</label>
		<input type="text" name="number" value="">
		<br><br>
		
		<input type="submit" value="Done" name="submit">
		</form>
	</body>
</html>