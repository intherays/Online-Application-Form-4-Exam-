<?php include('header.html'); ?>
<html>
  <body>
  <center>
	<img src="bu3.jpg"/><br/><br/>
  </center>		
  </body>
</html>


<?php

$reg_num=strtoupper($_POST['regno']);
$college=$_POST['college'];
$name=strtoupper($_POST['name']);
$father=strtoupper($_POST['father_name']);
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$address=$_POST['address'];
$pin=$_POST['pin'];
$password=$_POST['psw'];
$cpass=$_POST['cpwd'];
$colCode=$_POST['code'];


if(trim($reg_num)=="" || trim($college)=="" || trim($name)=="" || trim($gender)=="" || trim($father)=="" || trim($mobile)=="" ||trim($email)=="" ||trim($address)==""||trim($pin)==""||trim($colCode)=="" ){
header("Location: register.php?error=1");
		exit("invalid");
}

if($password!=$cpass){
header("Location: register.php?error=2");
		exit("invalid");
}

if(!is_numeric($mobile) || !is_numeric($pin)){
header("Location: register.php?error=3");
		exit("invalid");
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		
header("Location: register.php?error=4");
		exit("invalid");
}

if(is_numeric($name)){
	header("Location: register.php?error=5");
		exit("invalid");
}

// Sql Connection to db
include('sqlconn.php');


// Query to insert into register table 
$query =  "insert into register ".
"(reg_num, college_name, student_name, std_father, gender, mobile, email, address, pincode, password,colcode ) ".
" values ('$reg_num','$college','$name','$father','$gender','$mobile','$email','$address','$pin','$cpass','$colCode')";



$result=mysqli_query($dbc,$query);



// Query to insert in login table
$query2 = "insert into login(reg_num,password) values ('$reg_num','$cpass') ";

 $result2 = mysqli_query($dbc,$query2);


$qery1="insert into examfrm(reg_num,name,father,gender)".
 		"values('$reg_num','$name','$father','$gender')"; 

$rslt1 = mysqli_query($dbc,$qery1);

$qery2 = "insert into subject(reg_num) values('$reg_num')"; 

$rslt2 = mysqli_query($dbc,$qery2);



 //checking for duplicate reg_number
if($result==1 && $result2==1 && $rslt1==1  && $rslt2==1 ){
echo  "<h1><center>Registerd Successfully <br/> <a href='index.html'>click here to login</a></center></h1>";

}// unsuccessful registration
else {
	echo "<center><h1><font color ='red' > Invalid registerd details or Already Registered User</font></h1></center>";
	
	echo "<br/><br/><center><a href='register.html'> Register here</a>  or  <a href='index.html'>click here to login</a></center>";
}

mysqli_close($dbc);

?>