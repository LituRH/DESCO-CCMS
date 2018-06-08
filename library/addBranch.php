


<?php
$result ="SELECT *FROM tbl_branch ";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {			
			$serial_id=$row['id'];
        }
		$serial_id=$serial_id+1;
	if(isset($_POST['btnSave']))
	{
	
	$bcode=$_POST['bcode'];
	
		  $bname=$_POST['bname'];
		   
		  $address=$_POST['address'];

	
		if (strlen($bcode)>5)
		 {
			$msg="Branch Code at Most 5 Digit!";
		 }
	
			else
			{
						 $query = "INSERT INTO tbl_branch VALUES ('$serial_id', '$bcode','$bname','$address')";
						 mysql_query($query);
						 $msg= $bname. " Succesfully Added In Branch List!!";
           				 
			}
			
}
		
?>