    <?php
if(isset($_POST['btnUpdate']))
{
			$name=$_POST['name'];
		  $pass=$_POST['pass'];
		  $address=$_POST['address'];
		  $email=$_POST['email'];
		   $mobile=$_POST['mobile'];
		  $meter=$_POST['meter'];
		  $type=$_POST['type'];
		$bname=$_POST['bname'];

				
$q1=mysql_query("UPDATE tbl_customer SET cust_id='$custid',cust_name='$name',user_name='$uname',password='$pass',address='$address',mobile='$mobile',email='$email',conn_type='$type',meter_id='$meter',branch_name='$bname' WHERE user_name ='$id'");
if($q1)
{
echo '<font color="red"><center><h4>Record Updated Succesfully!!!!!<font></h4></center>';
}
else
{
echo '<font color="red"><center><h4>Record Not Updated!!!!!</h4><font></center>';
}
}

?>