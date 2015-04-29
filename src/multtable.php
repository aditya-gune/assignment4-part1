<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$min_multiplicand = 1;
$max_multiplicand = 1;
$min_multiplier = 1;
$max_multiplier = 1;
$errorflag = false;

foreach($_GET as $min_multiplicand => $max_multiplicand){
		if($min_multiplicand > $max_multiplicand){
		echo "Error: Minimum multiplicand larger than maximum";
		$errorflag = true;
		}
}

foreach($_GET as $min_multiplier => $max_multiplier){
	if($min_multiplier > $max_multiplier){
		echo "Error: Minimum multiplier larger than maximum";
		$errorflag = true;
		}
	
}




?>


</body>
</html>