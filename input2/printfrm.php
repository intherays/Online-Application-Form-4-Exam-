<?php
	$regnum = $_POST['reg'];
	
	include('sqlconn.php');
	
/*	
*/	
	//echo "Your reg number is  : ".$_POST['reg'];
	$query = "select * from examfrm where reg_num='$regnum'";
	$result = mysqli_query($dbc,$query);
	while($row = mysqli_fetch_array($result)){
		
	
		$name = $row['name'];
		$father = $row['father'];
		$genger = $row['gender'];
		$college = $row['college'];
		$coll_code = $row['coll_code'];
		$dept = $row['dept'];
		$dept_code = $row['dept_code'];
		$course = $row['course'];
		$fee = $row['fee'];
		$medium = $row['medium'];
		$catagory = $row['catagory'];
		
		
	}
	
	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<script lang='javascript'>
 </script>
<title></title>
<meta name="" content="">
</head>
<body>
	<center><h3>Application Form for Bangalore University Examination of PG /PG Diploma /PG Certificate Course</h3></center><hr/>
	<a href="logout.php" ">logout</a>
<center>

<table>
	<tr>
		<td>Name</td>
		<td><?php echo $name; ?></td>
		<td></td>
		<td rowspan="3"><img src="getimg.php" height="120" width="100"/></td>
	</tr>
	<tr>
		<td>Father Name</td>
		<td><?php echo $father; ?></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Register number</td>
		<td><?php echo $regnum; ?></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>College Name</td>
		<td><?php echo $college; ?></td>
		<td>College Code</td>
		<td><?php echo $coll_code; ?></td>
	</tr>
	<tr>
		<td>Department Name</td>
		<td><?php echo $dept; ?></td>
		<td>Department Code</td>
		<td><?php echo $dept_code; ?></td>
	</tr>
	<tr>
		<td>Course/Branch</td>
		<td><?php echo $course; ?></td>
		<td>Medium of Writing Exam &nbsp;&nbsp;&nbsp;</td>
		<td><?php echo $medium; ?></td>
	</tr>
	<tr>
		<td>Total Exam Fee Paid &nbsp;&nbsp;&nbsp;</td>
		<td><?php echo $fee; ?></td>
		<td>Catagory</td>
		<td><?php echo $catagory; ?></td>
	</tr>
	
	
	
	
</table>
</center>
	<hr/>
		
</body>
</html>
	
<html>
<body>
	<center>
		
		

	<?php  
	$query1 = "select * from subject where reg_num='$regnum'";
	$result1 = mysqli_query($dbc,$query1);
	
	$num = mysqli_num_fields($result1);
	
	$row = mysqli_fetch_row($result1);
	$count=0;
	$cnt=0;
	for($i = 0; $i < $num; $i++){
		if(($row[$i]))
		{	
		$count++;	
		}
		else{
			$cnt++;
		}"<br/>";
	}

	
	$j=0;
	//echo $row[$j];
	echo "<table border='1'>";
	echo "<tr><th>SEM</th><th width='500px'>PAPER TITLE</th><th>PAPER CODE</th></tr>";
	while($j<$count){
		
echo "<tr><td>".$row[++$j]."</td><td align='center'>".$row[++$j]."</td><td>".$row[++$j]."</td></tr>";
	}
	
	echo "</table>";
	
	
	
	
	
	/*
	
	
	while($row = mysqli_fetch_array($result1)){
	echo"<table border='2'>".
		"<tr>".
		"<th>SEM</th>".
		
		"<th width='500px'>PAPER TITLE</th>".
		"<th width='6'>PAPER CODE</th>".
		"</tr>";
		echo "<tr><td>".$row[1]."</td>"."<td>".$row[2]."</td>"."<td>".$row[3]."</td> <tr/>";
		echo "<tr><td>".$row[4]."</td>"."<td>".$row[5]."</td>"."<td>".$row[6]."</td></tr>";
		echo "<tr><td>".$row[7]."</td>"."<td>".$row[8]."</td>"."<td>".$row[9]."</td> <tr/>";
		echo "<tr><td>".$row[10]."</td>"."<td>".$row[11]."</td>"."<td>".$row[12]."</td></tr>";
		echo "<tr><td>".$row[13]."</td>"."<td>".$row[14]."</td>"."<td>".$row[15]."</td> <tr/>";
		echo "<tr><td>".$row[16]."</td>"."<td>".$row[17]."</td>"."<td>".$row[18]."</td></tr>";
			
		echo "</table>";
		}
		*/
			
	
		
	?>
	
	<a href="getadmincard.html"> Get Hall Ticket</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="window.print();">Print</a> 
		
	</center>


	 
</body>
</html>