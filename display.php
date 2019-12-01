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

<?php
	 	$con=mysql_connect("localhost","root","");
		mysql_select_db("stud1",$con);
			$y=mysql_query("select * from studt where dept");
			$x=mysql_query("select * from fstudt where fine");
				
			echo"<table border=5>";
			echo"<tr><th>NAME</th><th>ROLLNO</th><th>DATE</th><th>COURSE</th><th>TUTION_FEES</th><th>DEPOSIT</th><th>FINE_PAID</th><th>BALANCE_DEPOSIT</th></tr>";
			while($row=mysql_fetch_array($y))	
			{
				if($row1=mysql_fetch_array($x))
				{	
					echo"<tr>";
					echo"<td>".$row['name']."</td>";
					echo"<td>".$row['rollno']."</td>";
					echo"<td>".$row['date']."</td>";
					echo"<td>".$row['course']."</td>";
					echo"<td>".$row['tf']."</td>";
					echo"<td>".$row['dept']."</td>";
					echo"<td>".$row1['fine']."</td>"; 
					echo"<td>".$row['balancedept1']."</td>";
					echo"</tr>";
				}
					
				
			}
			echo"</table>";
				
			mysql_close($con);		
?>
</body>
</html>




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

