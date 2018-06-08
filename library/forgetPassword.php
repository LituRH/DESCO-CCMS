


<?php
	if(isset($_POST['btnForgetPass']))
	{
		  $u_name=$_POST['user'];
		  $email=$_POST['email'];
		  $type=$_POST['utype'];
		  if($type==1)
		  {
			$query = mysql_query("SELECT password FROM tbl_customer WHERE user_name='$u_name' AND email='$email'");
			if(mysql_num_rows($query) == 0)
			{
				echo '<center><font color="red">Enter Correct Username or Email</font><center>';
			}
			else
			{
				$result ="SELECT password FROM tbl_customer WHERE user_name='$u_name' AND email='$email'";
				$tt=mysql_query($result);
				while($row = mysql_fetch_array($tt))
				{	
					$pass=$row['password'];
					echo '<center><font color="red">Your Password Is: </font><center>';
				}
			}
		  }
		  
		  else
		  {
		    $query = mysql_query("SELECT password FROM tbl_engineer WHERE user_name='$u_name' AND email='$email'");
			if(mysql_num_rows($query) == 0)
			{
				echo '<center><font color="red">Enter Correct Username or Email</font><center>';
			}
			else
			{
				$result ="SELECT password FROM tbl_engineer WHERE user_name='$u_name' AND email='$email'";
				$tt=mysql_query($result);
				while($row = mysql_fetch_array($tt))
				{	
					$pass=$row['password'];
					echo '<center><font color="red">Your Password Is: </font><center>';
				}
			}
		  }
			
	}
		
?>