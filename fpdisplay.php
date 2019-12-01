<html>
<head>
<title> STUDENT DETAILS </title>
</head>
<body>
<?php
	 	$con=mysql_connect("localhost","root","");
		mysql_select_db("stud1",$con);
		echo"<tr>";
		
			$y=mysql_query("select * from fstudt where fine");
			echo"<table border=5>";
			echo"<th>NAME</th><th>ROLLNO</th><th>DATE</th><th>COURSE</th><th>FINE_PAID</th><th>REMARK</th></tr>";
			while($row=mysql_fetch_array($y))	
			{
					echo"<tr>";
					echo"<td>".$row['name']."</td>";
					echo"<td>".$row['rollno']."</td>";
					echo"<td>".$row['date']."</td>";
					echo"<td>".$row['course']."</td>";
					echo"<td>".$row['fine']."</td>";
					echo"<td>".$row['remark']."</td>";
					echo"</tr>";
			}
			echo"</table>";
			mysql_close($con);
?>
</body>
</html>