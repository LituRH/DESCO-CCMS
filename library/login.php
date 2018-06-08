<?php 
include ('library/connection.php');
//$u_id=$_SESSION['user'];
?>
<?php
	if(isset($_POST['login']))
	{
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$utype= $_POST['utype'];
		if($user=="admin1234" && $pass=="1234567" && $utype=="1")
		{
		$_SESSION['user'] = $user;
		echo "<script>window.location='adminWelcome.php'</script>";
		}
		else
		{
		$query = mysql_query("SELECT * FROM tbl_customer WHERE user_name='$user' AND password='$pass' AND $utype='3'");
		
		if(mysql_num_rows($query) == 0)
				{		
						$query = mysql_query("SELECT * FROM tbl_engineer WHERE user_name='$user' AND password='$pass' AND $utype='4'");
					
						if(mysql_num_rows($query) == 0)		
							{
								echo '<h4><font color="red">&nbsp;&nbsp;&nbsp;Incorrect Username or Password!!!!!</font></h4>';
							}
						else
							{
								$_SESSION['user'] = $user;
								echo "<script>window.location='engrWelcome.php'</script>";	
								
							}
				}
		else
				{
					$_SESSION['user'] = $user;
					echo "<script>window.location='custWelcome.php'</script>";	
							
				}
		
		}
		
	}
?>