<?php

$regnum = strtoupper($_POST['reg']);
 
  include('sqlconn.php');
  $query = "select name from examfrm where reg_num='$regnum'";
	$result = mysqli_query($dbc,$query);
	$num_row = mysqli_num_rows($result);

	
	if($num_row==0){
		header("Location: getadmincard.php?error=1");
		exit("invalid");
	}
	while($row = mysqli_fetch_array($result)){
		
	
		$name = $row['name'];
		}
		
		session_start();
 		$_SESSION['sessionVar'] = $regnum;
  include('header.html');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>


<title> hall ticket </title>

<meta name="" content="">
</head>
<body><a href="logout.php" ">logout</a>
	<div align="right" style="margin-top: -15px">
		
		<a href="#" onclick="window.print();return false;">Print</a>
	</div>
	<br/>




<center>
	
	<b>ADMISSION CARD FOR UNIVERSITY EXAMINATION OF ................../..................</b>
	<br/><br/>
	<br/><br/>
</center>
	<center>
	<table >
	<tr>
		<td>Place of Examination</td>
		<td>________________________</td>
			
				
	</tr>
	<tr></tr>
	<tr>
	<td rowspan="5"><img src="getimg.php" height="120" width="100"/></td>
		<td>Centre number</td>
		<td>_________</td>
				
	</tr>
	<tr>
		<td>Name : </td>
		<td> <?php echo $name; ?> </td>
	
		
	</tr>
	<tr>
		<td>Register number :</td>
		<td><?php echo $regnum; ?></td>
		<td></td>
		
	</tr>
</table>
  
</center>

<br/>

</body>
</html>



<html>
<head>
<title></title>
<style>
	
	
</style>
<meta name="" content="">
</head>
<body>


<center>
	<?php
		
		//$regnum = ;
	include('sqlconn.php');	
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
	echo "<tr><th>SEM</th><th width='200px'>PAPER TITLE</th><th>PAPER CODE</th>".
	 "<th width='100px'>Invigilator Signature</th> </tr>";
	while($j<$count){
		
echo "<tr><td>".$row[++$j]."</td><td align='center'>".$row[++$j]."</td><td>".$row[++$j]."</td><td></td></tr>";
	}
	echo "</table>";
	echo "<br/><br/>";	
	?>
	<br/><br/>
Signature of Candidate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chief Superintendent	

</center>
 
</body>
</html>