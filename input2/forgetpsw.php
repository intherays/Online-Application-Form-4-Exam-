<?php
	include('header.html');
?>
<html>
<body bgcolor="ivory">
	<center>
		<img src="bu4.jpg"/>	<br/>
		<?php 
		if(!isset($_POST['submit']))
		{?>
<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="POST">
	<font color="gray" size="4" >Submit Detail to get your password</font>
	<table>
	<!--	
		<tr>
			<td>Register number</td>
			<td><input style="text-transform: uppercase" type="text" name="reg" /></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input style="text-transform: uppercase"  type="text" name="name" /></td>
		</tr>-->
		<tr>
			<td>Mobile number </td>
			<td><input type="text" name="mobile" maxlength="10" /></td>
		</tr>
		<tr>
			<td>Email id</td>
			<td><input type="text" name="email" /></td>
		</tr>
	</table>
	<input type="submit" name="submit" value="ok" style="width: 50px" />
</form>	


	</center>
</body>
</html>
<?php
}
	else{
		
	
	//	$name = strtoupper($_POST['name']);
	//	$regnu = strtoupper($_POST['reg']);
		$mobile=$_POST['mobile'];
		$email= $_POST['email'];
		include('sqlconn.php');
		$qry="SELECT password FROM register WHERE mobile = '$mobile' and email='$email' ";
		$result=mysqli_query($dbc,$qry);
		$num_row = mysqli_fetch_row($result);
		if($num_row){
			echo "Your password is ".$num_row[0];
			echo "<br/><a href='index.html'>click here to login</a>";
		}
		else {
		echo "<font color='red'> Please Enter Vaild Input to get your password </red>";
		
		echo "<br/><a href='forgetpsw.php'>try again </a> <br/>";
		echo "<br/><a href='index.html'>click here to login</a>";
		}
		
		
	}
?>