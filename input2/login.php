<!doctype html>
<html lang="en">
	 <head>
	  <meta charset="UTF-8">
	  <title>Login</title>
	 </head>
<body bgcolor="ivory">

<center>
<h1>BANGALORE UNIVERSITY</h1>

<hr/>
<h2>Exam Apptication Register Form for BU  I Sem Students  </h2>
</br>

<img src="bu.jpg"/>
<br/><br/>
<form method="post" action="omr.php">
<font color="gray" size="4" >Sign in to fill Exam Application form</font>
<br/>
<table>
  
  <tr>
	<td>Register number </td>
	<td> : <input style="text-transform: uppercase" type="text" name="user" maxlength="10" autofocus></td>
  </tr>
  <tr>
	<td>Password </td>
	<td> : <input type="password" name="pass"></td>
  </tr>
  <?php  
  if($_GET['error']=='1'):
  ?>
  <tr>
  <td colspan="2"> <font color="red" size="4">Invalid register number or password</font> </td>
  </tr>
  <?php endif ?>
  </table>
  	
   
	<input type="submit" value="Sign in" style="width:250px; height:40px">
  </form>
  <br>
   <a href="forgetpsw.php">Forgot password </a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="register.html">I SEM Register Here</a><br/><br/>
   <a href="getadmincard.html"> Get Hall Ticket Here</a>
  
  </center>

 
 
  </body>
</html>
