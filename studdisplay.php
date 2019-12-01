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
				$row1['balancedept1']=$row['dept']+$row1['fine'];
				echo"<td>".$row1['balancedept1']."</td>";
				echo"</tr>";
				}
					
				
			}
			echo"</table>";
				
			mysql_close($con);		
?>
</body>
</html>