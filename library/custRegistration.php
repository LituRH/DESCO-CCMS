


<?php
	if(isset($_POST['btnSave']))
	{
		  $name=$_POST['name'];
		  $u_name=$_POST['u_name'];
		  $password=$_POST['password'];
		  $cpassword=$_POST['cpassword'];
		  $address=$_POST['address'];
		  $mobile=$_POST['mobile'];
		  $email=$_POST['email'];
		  $type=$_POST['type'];
		  $meter=$_POST['meter'];
		  $branch=$_POST['branch'];
		  
		  $flag=0; $flag2=0;
		  $result ="SELECT *FROM tbl_customer";
	      $tt=mysql_query($result);
	      while($row = mysql_fetch_array($tt))
           {	
				$match=$row['user_name'];
				if($match== $u_name)
					$flag=1;
		   }
			  $result ="SELECT *FROM tbl_customer";
	      $tt=mysql_query($result);
	      while($row = mysql_fetch_array($tt))
           {	
				$match=$row['meter_id'];
				if($match== $u_name)
					$flag2=1;
		   }
		if($flag==1)
		  {
			$msg1="Username Already Used!";
		  }
		  else if(!preg_match("/^[a-zA-z. ]+$/", $name)) 
		  {
			$msg1="Customer Name Contains Only Letter!";
		  }
		  else if($password!=$cpassword)
		 {
			$msg1="Missmatch Password!";
		 }
		  else if(strlen($password)<6)
		  {
			$msg1="Password Minimum 6 Character.!";
		  }	
	
		else if(!ctype_digit($mobile))
			{
			$msg1="Mobile Number Must Be Integer";
			}
				
		 else if (strlen($mobile)!=11)
		 {
			$msg1="Mobile Number Must Be 11 Digit!";
		 }
		else if($flag2==1)
		  {
			$msg1="Meter Number Must Be Unique!";
		  }
		else if(!ctype_digit($meter))
			{
			$msg1="Meter Number Must Be Integer";
			}
				
		 else if (strlen($meter)<8)
		 {
			$msg1="Meter Number Must Be 8 Digit!";
		 }
			
		 else
		 {
				$query = "INSERT INTO tbl_customer VALUES ('', '$name','$u_name','$cpassword','$address','$mobile','$email','$type','$meter','$branch')";
           		 mysql_query($query);
				 $_SESSION['user'] = $u_name;
				echo "<script>window.location='custWelcome.php'</script>";
		 }
			
}
		
?>