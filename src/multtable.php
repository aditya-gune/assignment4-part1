<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$min_multiplicand = $_GET["minmultiplicand"];
$max_multiplicand = $_GET["maxmultiplicand"];
$min_multiplier = $_GET["minmultiplier"];
$max_multiplier = $_GET["maxmultiplier"];
$errorflag = false;
$tempVar = $min_multiplicand;


		if($min_multiplicand > $max_multiplicand){
		echo "Error: Minimum multiplicand larger than maximum";
		$errorflag = true;
		}
		if(gettype($min_multiplicand) != "integer")
			echo "Error: Minimum multiplicand is not an integer.";
		if(gettype($max_multiplicand) != "integer")
			echo "Error: Maximum multiplicand is not an integer.";

	if($min_multiplier > $max_multiplier){
		echo "Error: Minimum multiplier larger than maximum";
		$errorflag = true;
		}
		if(gettype($min_multiplier) != "integer")
			echo "Error: Minimum multiplier is not an integer.";
		if(gettype($max_multiplier) != "integer")
			echo "Error: Maximum multiplier is not an integer.";


if($errorflag == false)
{
	
	echo '<p><h3>Multiplication Table</h3>';
	echo '<p>
	<table border="1">
	<tr><th>';
	for($i = $min_multiplier; $i < $max_multiplier; $i++) {
	echo '<th>' . $i;
	}
for($i = $min_multiplier; $i < $max_multiplier; $i++) {
	echo '<tr>';
	echo '<th>' . $tempVar;
	$tempVar2 = $min_multiplier;
  for($j = $min_multiplicand; $j < $max_multiplicand; $j++) {
	  
	  echo '<td>' . $tempVar2 * $tempVar;
	  $tempVar2++;
	  
  }
  $tempVar++;
}
  
echo '<table>';

	
	
}



?>


</body>
</html>