


<?php
	if(isset($_POST['btnSave']))
	{
			$id=$_POST['c_id'];
			$name=$_POST['name'];
			$designation=$_POST['desig'];
			$u_name=$_POST['u_name'];
			$password=$_POST['password'];
			$cpassword=$_POST['cpassword'];
			$address=$_POST['address'];
			$mobile=$_POST['mobile'];
			$email=$_POST['email'];
			$date=$_POST['date'];
			$branch=$_POST['branch'];
			
			$flag=0;		$flag2=0;
			$result ="SELECT *FROM tbl_engineer";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
			{	
				$match=$row['user_name'];
				if($match== $u_name)
					$flag=1;
			}	  	  
		  	$result ="SELECT *FROM tbl_engineer";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
			{	
				$match=$row['eng_id'];
				if($match== $id)
					$flag2=1;
			}	
		if(!ctype_digit($id))
			{
			$msg1="Engineer ID Must Be Integer";
			}
		 else if($flag2==1)
		  {
			$msg1="Engineer ID Must be Unique!";
		  }		
		 else if (strlen($id)<6)
		 {
			$msg1="Engineer ID Minimum 6 Digit!";
		 }	
		  else if(!preg_match("/^[a-zA-z. ]+$/", $name)) 
		  {
			$msg1="Engineer Name Contains Only Letter!";
		  }
		 else if($flag==1)
		  {
			$msg1="Username Already Used!";
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
		else
			{
						 $query = "INSERT INTO tbl_engineer VALUES ('$id', '$name','$designation','$u_name','$cpassword','$address','$mobile','$email','$date','$branch')";
           				  mysql_query($query);
						  $_SESSION['user'] = $u_name;
						  echo "<script>window.location='engrWelcome.php'</script>";
			}
			
}
		
?>