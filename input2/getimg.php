<?php
	session_start();
  $x = $_SESSION['sessionVar'];
	include('sqlconn.php');
	
	$reg_num = $x;
	
	$query = "select * from examfrm where reg_num='$reg_num'";
	$result = mysqli_query($dbc,$query);
	while($row = mysqli_fetch_array($result))
	{$image = $row['photo'];}
	header("Content-type :image/jpeg");
	echo $image;
?>