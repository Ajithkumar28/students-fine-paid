<html>
<head>
<title> STUDENT DETAILS </title>
</head>
<body>
<?php
	 	$con=mysql_connect("localhost","root","");
		mysql_select_db("stud1",$con);
		echo"<tr>";
			$y=mysql_query("select * from sstudt where balancedept");
			echo"<table border=5>";
			echo"<th>NAME</th><th>ROLLNO</th><th>COURSE</th><th>BALANCE_DEPOSIT</th><th>SETTLEMENT_TYPE</th></tr>";
			while($row=mysql_fetch_array($y))	
			{
				echo"<tr>";
				echo"<td>".$row['name']."</td>";
				echo"<td>".$row['rollno']."</td>";
				echo"<td>".$row['course']."</td>";
				echo"<td>".$row['balancedept']."</td>";
				echo"<td>".$row['st']."</td>";
				echo"</tr>";
			}
			echo"</table>";
			mysql_close($con);
?>
</body>
</html>