<html>
<body bgcolor="ivory">
<center>

</center>
<hr/>

<center>
 <img src="bu2.jpg"/>
<br/>
<br/>
<font color="gray" size="4" >
Enter Register number to get hall ticket : </font>
  
  <form action="halltkt.php" method="POST">
  <input style="text-transform: uppercase" type="text" name="reg" maxlength="10"/>
  <input type="submit" value="Submit" />
  </form>
  <?php  
  if($_GET['error']=='1'):
  ?>
  <tr>
  <td colspan="2"><font color="red" size="4">Invalid register number</font> </td>
  </tr>
  <?php endif ?>
  </center>
  
  </body>
  </html>
  
  