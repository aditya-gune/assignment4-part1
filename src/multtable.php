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
$emptyflag = false;
$tempVar = $min_multiplicand;

		if(empty($min_multiplicand)){
				echo "Error: Minimum multiplicand is missing.\r\n";
				$errorflag = true;
				$emptyflag = true;
		}
		if(empty($max_multiplicand)){
				echo "Error: Maximum multiplicand is missing.\r\n";
				$errorflag = true;
				$emptyflag = true;
		}
		if(!is_numeric($min_multiplicand)){
			echo "Error: Minimum multiplicand is not an integer.\r\n";
			$errorflag = true;
		}
		if(!is_numeric($max_multiplicand)){
			echo "Error: Maximum multiplicand is not an integer.\r\n";
			$errorflag = true;
		}
		if($min_multiplicand > $max_multiplicand){
			echo "Error: Minimum multiplicand larger than maximum.\r\n";
			$errorflag = true;
		}
		
		
		if(empty($min_multiplier)){
				echo "Error: Minimum multiplier is missing.\r\n";
				$errorflag = true;
				$emptyflag = true;
		}
		if(empty($max_multiplier)){
				echo "Error: Maximum multiplier is missing.\r\n";
				$errorflag = true;
				$emptyflag = true;
		}
		if(!is_numeric($min_multiplier)){
			echo "Error: Minimum multiplier is not an integer.\r\n";
			$errorflag = true;
		}
		if(!is_numeric($max_multiplier)){
			echo "Error: Maximum multiplier is not an integer.\r\n";
			$errorflag = true;
		}
		else if($min_multiplier > $max_multiplier){
			echo "Error: Minimum multiplier larger than maximum.\r\n";
			$errorflag = true;
		}


if($errorflag == false)
{
	
	echo '<p><h3>Ye Olde Multiplication Table</h3>';
	echo '<p>
	<table border="1">
	<tr><th>';
	for($i = $min_multiplier; $i <= $max_multiplier; $i++) {
	echo '<th>' . $i;
	}
 for($j = $min_multiplicand; $j <= $max_multiplicand; $j++) {
	echo '<tr>';
	echo '<th>' . $tempVar;
	$tempVar2 = $min_multiplier;
	for($i = $min_multiplier; $i <= $max_multiplier; $i++) {
	  
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