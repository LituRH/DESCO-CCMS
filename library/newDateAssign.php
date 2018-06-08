
<?php
	if(isset($_POST['btnSave']))
	{
			$newdate=$_POST['newdate'];
			$q1=mysql_query("UPDATE tbl_complain SET close_date='$newdate'  WHERE comp_id ='$compidagain'");
			$msg7="New Date Assign Successfully!!!!!!!";
	}
		
?>