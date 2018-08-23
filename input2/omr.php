<?php

	$username=strtoupper($_POST['user']);
	$password=$_POST['pass'];

	session_start();
  $_SESSION['sess'] = $username;

	include('sqlconn.php');

	// for valid user
	$qry="SELECT * FROM login WHERE reg_num = '$username' and password='$password'";

	$result=mysqli_query($dbc,$qry);

	$num_row = mysqli_num_rows($result);

	
	if($num_row==0){
		header("Location: login.php?error=1");
		exit("invalid");
	}
	
	// query for fetching details
 $queryOmr = "SELECT * from register WHERE reg_num = '$username' and password='$password'";
	$resultOmr=mysqli_query($dbc,$queryOmr);		
	while($row = mysqli_fetch_array($resultOmr)){
		$reg_num = $row['reg_num'];
		$collge_name = $row['college_name'];
		$std_name = $row['student_name'];
		$std_father = $row['std_father'];
		$college_code=$row['colcode'];
		$std_gender=$row['gender'];
	}
	
	
	// fetch  from subject 
	
	?>
	 
		
		
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
    <title>Exam Application</title>
		
		<script type="text/javascript">
			
			function validate(){
			
			
				if(document.frm.dept.value==""){
					alert("Enter Your Depertment name ");
					document.frm.dept.focus();
					return false;
				}
				
				else if(document.frm.course.value==""){
				alert("Enter Your Course name ");
					document.frm.course.focus();
					return false;
				}	
			
				
			
				else if(document.frm.fee.value==""){
					alert("Enter Amount Fee Paid ");
						document.frm.fee.focus();
						return false;
				}
				
				else if(!document.frm.fee.value.match(/^\d+/)){
					alert("Enter Amount Fee Paid ");
						document.frm.fee.value=""
						document.frm.fee.focus();
						return false;
				}
				
				
				
				else if (document.frm.photo.value==""){
					alert("Upload photo ");
						document.frm.photo.focus();
						return false;
				}
				
				var fup = document.getElementById('filename');
						var fileName = fup.value;
						var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
						if(ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG")
						{
						return true;
						} 
						else
						{
						alert("Upload Jpg images only");
						fup.focus();
						return false;
						}
				
			}
			
			
			
			
			
		</script>
	
 </head>
 
 <body bgcolor="ivory">


 
<center><h3>Application Form for Bangalore University Examination of PG /PG Diploma /PG Certificate Course</h3></center><hr/>

<a href="logout.php" ">logout</a>

  <form name="frm" method="post" onsubmit="return validate()" action="omrupload.php" enctype="multipart/form-data"  >
<center>
   <table>
 
	<tr>
		<td>Name :</td>
		<td><input type="text" name="name" value="<?php echo $std_name;?>" readonly=></td>
	
	  
	
		<td align="right" >Father's Name</td>
		<td><input type="text" value="<?php echo $std_father; ?>" name="father" readonly/> </td>
	</tr>
	  
	<tr>
		<td>Register number :</td>
		<td><input type="text" name="reg" value="<?php echo $username;?>" readonly> </td>
	
	  
	
		<td align='right'>Gender</td>
		<td><input type="text" name="gender" value=" <?php echo $std_gender; ?> " readonly> 
	</tr>


	<tr>
		<td>Name of the College </td>
		<td><input type="text" name="college" value="<?php echo $collge_name;?>" ></td>
	
		
	
		<td align="right">College Code </td>
		<td><input type="text" name="coll_code" value="<?php echo $college_code;?>" ></td>
	</tr>
	<tr>
		<td>Dept Name</td>
		<td><input type="text" name="dept" autofocus></td>
		<td>Dept Code<font size="2"><i>(Applicabe for BUB Depts only)
		</i></font>
		<td><input type="text" name="dept_code" maxlength="3"></td>
	</tr>
		

	<tr>
		<td>Course/Branch : </td>
		<td><input type="text" name="course"></td>
	

	
		<td align="center">Medium of writing Exam</td>
		<td>English<input type="radio" name="medium" value="English" checked> &nbsp; Kannada
		<input type="radio" name="medium" value="Kannada"></td>
	  
	</tr>



	  <tr>
		<td>Total Exam Fee </td>
		<td><input type="text" name="fee" maxlength="4"></td>
		<td align="right">Select Catagory</td>
		<td><select name="catagory">
				<option>GEN</option>
				<option>SC</option>
				<option>ST</option>
				<option>C-1</option>
				<option>2A</option>
				<option>2B</option>
				<option>3A</option>
				<option>3B</option>
				
		</select></td>
	  </tr>
		
</table>

<hr>
>>
<table border="1">
<tr>
	<th>SEM</th>
	<th> no </th>
	<th align="center" colspan="4"> Paper Title </th>
	<th align="center"> Paper Code </th>
</tr>

<tr>
	<td> <input type="text" name="sm1" size="2" maxlength="1"/> </td>
		
	<td>1</td>
	<td colspan="4"><input type="text" name="pt1" size="50"></td>
	<td><input type="text" name="pc1" maxlength="5" size="7"></td>
</tr>


<tr>
	<td><input type="text" name="sm2" size="2" maxlength="1" /></td>
	<td>2</td>
	<td colspan="4"><input type="text" name="pt2" size="50"></td>
	<td><input type="text" name="pc2" maxlength="5" size="7"></td>
</tr>


<tr>
	<td><input type="text" name="sm3" size="2" maxlength="1" /></td>
	<td>3</td>
	<td colspan="4"><input type="text" name="pt3" size="50"></td>
	<td><input type="text" name="pc3" maxlength="5" size="7"></td>
</tr>


<tr>
	<td><input type="text" name="sm4" size="2" maxlength="1" /></td>
	<td>4</td>
	<td colspan="4"><input type="text" name="pt4" size="50"></td>
	<td><input type="text" name="pc4" maxlength="5" size="7"></td>
</tr>


<tr>
	<td><input type="text" name="sm5" size="2" maxlength="1" /></td>
	<td>5</td>
	<td colspan="4"><input type="text" name="pt5" size="50"></td>
	<td><input type="text" name="pc5" maxlength="5" size="7"></td>
</tr>


<tr>
	<td><input type="text" name="sm6" size="2" maxlength="1" /></td>
	<td>6</td>
	<td colspan="4"><input type="text" name="pt6" size="50"></td>
	<td><input type="text" name="pc6" maxlength="5" size="7"></td>
</tr>


<tr>
	<td><input type="text" name="sm7" size="2" maxlength="1" /></td>
	<td>7</td>
	<td colspan="4"><input type="text" name="pt7" size="50"></td>
	<td><input type="text" name="pc7" maxlength="5" size="7"></td>
</tr>


<tr>
	<td><input type="text" name="sm8" size="2" maxlength="1" /></td>
	<td>8</td>
	<td colspan="4"><input type="text" name="pt8" size="50"></td>
	<td><input type="text" name="pc8" maxlength="5" size="7"></td>
</tr>


<tr>
	<td><input type="text" name="sm9" size="2" maxlength="1" /></td>
	<td>9</td>
	<td colspan="4"><input type="text" name="pt9" size="50"></td>
	<td><input type="text" name="pc9" maxlength="5" size="7"></td>
</tr>


<tr>
	<<td><input type="text" name="sm10" size="2" maxlength="1" /></td>
	<td>10</td>
	<td colspan="4"><input type="text" name="pt10" size="50"></td>
	<td><input type="text" name="pc10" maxlength="5" size="7"></td>
</tr>


<tr>
	<<td><input type="text" name="sm11" size="2" maxlength="1" /></td>
	<td>11</td>
	<td colspan="4"><input type="text" name="pt11" size="50"></td>
	<td><input type="text" name="pc11" maxlength="5" size="7"></td>
</tr>


<tr>
	<td><input type="text" name="sm12" size="2" maxlength="1" /></td>
	<td>12</td>
	<td colspan="4"><input type="text" name="pt12" size="50"></td>
	<td><input type="text" name="pc12" maxlength="5" size="7"></td>
</tr>


<tr>
	<td><input type="text" name="sm13" size="2" maxlength="1" /></td>
	<td>13</td>
	<td colspan="4"><input type="text" name="pt13" size="50"></td>
	<td><input type="text" name="pc13" maxlength="5" size="7"></td>
</tr>


<tr>
	<td><input type="text" name="sm14" size="2" maxlength="1" /></td>
	<td>14</td>
	<td colspan="4"><input type="text" name="pt14" size="50"></td>
	<td><input type="text" name="pc14" maxlength="5" size="7"></td>
</tr>


<tr>
	<td><input type="text" name="sm15" size="2" maxlength="1" /></td>
	<td>15</td>
	<td colspan="4"><input type="text" name="pt15" size="50"></td>
	<td><input type="text" name="pc15" maxlength="5" size="7"></td>
</tr>


<tr>
	<td><input type="text" name="sm16" size="2" maxlength="1" /></td>
	<td>16</td>
	<td colspan="4"><input type="text" name="pt16" size="50"></td>
	<td><input type="text" name="pc16" maxlength="5" size="7"></td>
</tr>
</table>

<table>

<tr>
	<td>Add your photo</td>
	<td><input type="file" id ="filename" name="photo"></td>
	<td><input type="submit" value="Upload"></td>
</tr>


</table>

</center>

	
</form>
  
 </body>
</html>
