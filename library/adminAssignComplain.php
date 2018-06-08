


<?php
	if(isset($_POST['btnAssign']))
	{
			 $eeid=$_POST['eeid'];
				
$q1=mysql_query("UPDATE tbl_complain SET comp_status='Working',eng_id='$eeid' WHERE comp_id ='$compid'");
if($q1)
{
echo '<center><font color="red"><h4>Complain Assigned To Engineer Succesfully!!!!!<font></h4></center>';
}
else
{
echo '<center><font color="red"><h4>Complain Not Assign Succesfully!!!!!</h4><font></center>';
}
}
		
?>