
<?php
	if(isset($_POST['btnSave']))
	{
	$day = date("d");
	$month =  date("n");
	$year = date("Y");
	$date = $day."-".$month."-".$year;
	$cid=$_POST['cid'];
	$sname=$_POST['servName'];
	$desc=$_POST['desc'];
	$scharge=$_POST['servCharge'];
			
			$result ="SELECT * FROM tbl_complain where comp_id='$cid'";
			$query = "INSERT INTO tbl_report VALUES ('','$cid', '$sname','$desc','$scharge')";
           	mysql_query($query);
			$q1=mysql_query("UPDATE tbl_complain SET comp_status='Closed', close_date='$date'  WHERE comp_id ='$cid'");
			echo '<center><h4><font color="red">You Have Successfully Submited Report!!!!!</font></h4></center>';
	}
		
?>