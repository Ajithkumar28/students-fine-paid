<html>
<head>
<title> STUDENT DETAILS </title>
</head>
<body>
<?php
	$na=$_POST["na"];
	$pass=$_POST["pass"];
	if($na=="ajith")
	{
		if($pass=="kumar")
		{
			$f=1;
		}
	}
	else
		$f=2;
	if($f==1)
		require("display.php");
	else
		echo"LOGIN FAILED";
	
?>
</body>
</html>
	
		






















