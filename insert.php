<html>
<head>
</head>
<body>
<?php
	         $con=mysql_connect("localhost","root","");
		 if(mysql_query("create database stud1",$con))
		 	echo"database created";
		 mysql_select_db("stud1",$con);
		if(mysql_query("create table studt(name varchar(20),rollno varchar(20),date varchar(20),course varchar(20),tf int,dept int,fine int,balancedept1 int )",$con))
			echo"table created";
		 else
			echo"not created".mysql_error();
		if(mysql_query("create table fstudt(name varchar(20),rollno varchar(20),date varchar(20),course varchar(20),fine int,remark varchar(20))",$con))
			echo"table created";
		 else
			echo"not created".mysql_error();
		if(mysql_query("create table sstudt(name varchar(20),rollno varchar(20),course varchar(20),balancedept int,st varchar(20))",$con))
			echo"table created";
		 else
			echo"not created".mysql_error();
		
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
		if(mysql_select_db("stud1",$con))
	 	$na=$_POST["na"];
		$na1=$_POST["na1"];
		$rno=$_POST["rno"];
		$rno1=$_POST["rno1"];
		$d=$_POST["d"];
		$m=$_POST["m"];
		$y=$_POST["y"];
		$date="$d/$m/$y";
		$cr=$_POST["cr"];
		$cr1=$_POST["cr1"];
		$tf=$_POST["tf"];
		$dp=$_POST["dp"];
		$fp=$_POST["fp"];
		$rm=$_POST["rm"];
		$bdp=$_POST["bdp"];
		$st=$_POST["st"];
		if(mysql_query("INSERT INTO studt(name,rollno,date,course,tf,dept) values('$na','$rno','$date','$cr','$tf','$dp')",$con))
			echo" INSERTED";
		else
			echo" NOT INSERTED".mysql_error();
		if(mysql_query("INSERT INTO fstudt values('$na','$rno','$date','$cr','$fp','$rm')",$con))
			echo" INSERTED";
		else
			echo" NOT INSERTED".mysql_error();
		if(mysql_query("INSERT INTO sstudt values('$na1','$rno1','$cr1','$bdp','$st')",$con))
			echo" INSERTED";
		else
			echo" NOT INSERTED".mysql_error();
		
		
		mysql_close($con);
?>
</body>
</html>
