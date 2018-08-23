<?php
	include('header.html');
						//Taking data from exam form//
				
	$name= $_POST['name'];
	$father= $_POST['father'];
	$reg_num= $_POST['reg'];
	$gender= $_POST['gender'];
	$college= $_POST['college'];
	$coll_code= $_POST['coll_code'];
	$dept= $_POST['dept'];
	$dept_code= $_POST['dept_code'];
	$course= $_POST['course'];
	$medium= $_POST['medium'];
	$fee= $_POST['fee'];
	$catagory= $_POST['catagory'];
	/*$photo = $_POST['photo'];
	$thumb = $_POST['thumb'];
	*/
	
	
	
	session_start();
  $_SESSION['sessionVar'] = $reg_num;
  
	
	
						// to subject table in db
						
	$sm1= $_POST['sm1'];    $pt1= $_POST['pt1'];    $pc1= $_POST['pc1'];
	$sm2= $_POST['sm2']; 	$pt2= $_POST['pt2'];	$pc2= $_POST['pc2'];
	$sm3= $_POST['sm3'];	$pt3= $_POST['pt3'];	$pc3= $_POST['pc3'];
	$sm4= $_POST['sm4'];	$pt4= $_POST['pt4'];	$pc4= $_POST['pc4'];
	$sm5= $_POST['sm5'];	$pt5= $_POST['pt5'];	$pc5= $_POST['pc5'];
	$sm6= $_POST['sm6'];	$pt6= $_POST['pt6'];	$pc6= $_POST['pc6'];
	$sm7= $_POST['sm7'];	$pt7= $_POST['pt7'];	$pc7= $_POST['pc7'];
	$sm8= $_POST['sm8'];	$pt8= $_POST['pt8'];	$pc8= $_POST['pc8'];
	$sm9= $_POST['sm9'];	$pt9= $_POST['pt9'];	$pc9= $_POST['pc9'];
	$sm10= $_POST['sm10'];	$pt10= $_POST['pt10'];	$pc10= $_POST['pc10'];
	
	
	
	$sm11= $_POST['sm11'];  $pt11= $_POST['pt11'];  $pc11= $_POST['pc11'];
	$sm12= $_POST['sm12']; 	$pt12= $_POST['pt12'];	$pc12= $_POST['pc12'];
	$sm13= $_POST['sm13'];	$pt13= $_POST['pt13'];	$pc13= $_POST['pc13'];
	$sm14= $_POST['sm14'];	$pt14= $_POST['pt14'];	$pc14= $_POST['pc14'];
	$sm15= $_POST['sm15'];	$pt15= $_POST['pt15'];	$pc15= $_POST['pc15'];
	$sm16= $_POST['sm16'];	$pt16= $_POST['pt16'];	$pc16= $_POST['pc16'];
	
	/* -----------------------------------------------------------------------*/
		//Photo
		$imgName = $_FILES["photo"]["name"];
		$imgType = $_FILES["photo"]["type"];
		$imgSize = $_FILES["photo"]["size"];
		$imgFile = $_FILES["photo"]["tmp_name"];

		$data="";
		$fp = fopen($imgFile, "rb");
		while(!feof($fp))
		{
		$data .= fread($fp, 1024);
		}
		fclose($fp);
		$data = addslashes($data);
		$data = addcslashes($data, "\0");
		//Photo ends
		
		//Thumb
		/*
		$imName = $_FILES["thumb"]["name"];
		$imType = $_FILES["thumb"]["type"];
		$imSize = $_FILES["thumb"]["size"];
		$imFile = $_FILES["thumb"]["tmp_name"];

		$dataT="";
		$fop = fopen($imFile, "rb");
		while(!feof($fop))
		{
		$dataT .= fread($fop, 1024);
		}
		fclose($fop);
		$dataT = addslashes($dataT);
		$dataT = addcslashes($dataT, "\0");
				
	/*------------------------------------------------------------------------*/
	
					// Connecting to database 
	
	include('sqlconn.php');
	
				//inserting to exam  frm table 
				
		/*	$qry1 = "insert INTO examfrm(catagory,coll_code,college,course,dept,dept_code,father,fee,gender,medium,name,photo,reg_num,thumb)".
	"VALUES('$catagory','$coll_code','$college','$course','$dept','$dept_code','$father','$fee' ,'$gender' ,'$medium' ,'$name' ,'$data' ,'$reg_num' ,'$dataT')";
	
	*/
	
	// echo $catagory." ". $coll_code. $college. $course. $dept. $dept_code .$medium. $fee."<br/>" ;
	
$qry1 = "UPDATE examfrm set catagory='$catagory',coll_code='$coll_code',".
			"college='$college',course='$course',".
			"dept='$dept',dept_code='$dept_code',".
			"fee=$fee,medium='$medium',photo='$data' where reg_num='$reg_num'";
	
	
			$result1 = mysqli_query($dbc,$qry1);
				
					// insert to subjet table //
			
	$qry = "UPDATE subject SET sm1='$sm1',sub1='$pt1',".
			"code1='$pc1',".
			"sm2='$sm2',sub2='$pt2',code2='$pc2',".
			"sm3='$sm3',sub3='$pt3',code3='$pc3',".
			"sm4='$sm4',sub4='$pt4',code4='$pc4',".
			"sm5='$sm5',sub5='$pt5',code5='$pc5',".
			"sm6='$sm6',sub6='$pt6',code6='$pc6',".
			"sm7='$sm7',sub7='$pt7',code7='$pc7',".
			"sm8='$sm8',sub8='$pt8',code8='$pc8',".
			"sm9='$sm9',sub9='$pt9',code9='$pc9',".
			"sm10='$sm10',sub10='$pt10',code10='$pc10',".
			"sm11='$sm11',sub11='$pt11',code11='$pc11',".
			"sm12='$sm12',sub12='$pt12',code12='$pc12',".
			"sm13='$sm13',sub13='$pt13',code13='$pc13',".
			"sm14='$sm14',sub14='$pt14',code14='$pc14',".
			"sm15='$sm15',sub15='$pt15',code15='$pc15',".
			"sm16='$sm16',sub16='$pt16',code16='$pc16' where reg_num='$reg_num'";
			
			

					
			$result2 = mysqli_query($dbc,$qry);
			
			if($result1==1 && $result2==1){
			
			?><form method="post" action="printfrm.php" enctype="multipart/form-data" >
				<h1><center>"Register number <input type="hidden" name="reg" size='10' value="<?php echo $reg_num; ?>" readonly /> Details uploaded successfully ! <br/> <input type ="submit" value="Print Details"</center></h1>
				
					</form>
			<?php }
			else
				echo "<h1><center><font color='red'/>\"uploaded Unsuccessfully ! </font>\"</center></h1>";	
	
		
?>