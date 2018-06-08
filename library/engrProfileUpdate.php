    <?php
if(isset($_POST['btnUpdate']))
{
		$eid=$_POST['eid'];
			$name=$_POST['name'];
		  $pass=$_POST['pass'];
		  $desig=$_POST['desig'];
		  $address=$_POST['address'];
		  $email=$_POST['email'];
		   $mobile=$_POST['mobile'];
		  $joindate=$_POST['jdate'];
			$bname=$_POST['bname'];

				
$q1=mysql_query("UPDATE tbl_engineer SET eng_name='$name',designation='$desig',user_name='$uname',password='$pass',address='$address',mobile='$mobile',email='$email',join_date='$joindate',branch_name='$bname' WHERE user_name ='$id'");
if($q1)
{
echo '<center><font color="red"><h4>Record Updated Succesfully!!!!!<font></h4></center>';
}
else
{
echo '<center><font color="red"><h4>Record Not Updated!!!!!</h4><font></center>';
}
}

?>