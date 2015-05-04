<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$_POST['username'];
$numvisits = 0;
session_start();



if(session_status() == PHP_SESSION_ACTIVE) {
  if(isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
  }
  if (empty($_SESSION['username'])){
	echo 'A username must be entered. Click <a href="login.php">here</a> to return to the login screen.';
}

  else
  {if(!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
  	}
	

  	$_SESSION['visits']++;
  	echo 'Hi '. $_SESSION['username'] . ', you have visited this page ' . $_SESSION[visits] . ' 			times.';
	echo '<a href="content2.php">content2.php</a>';
	?>
    <form action="login.php" method="post">
<input type="submit" value = "Logout">
</form>
<?php

 
}
}

?>



</body>
</html>