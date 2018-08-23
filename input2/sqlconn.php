<?php
	
			// SQL Connection 
$dbc = mysqli_connect('localhost','root','','omr')
or die('Error connecting to MySql server');

if(mysqli_connect_error()){
	echo "failed to connect";
}

?>