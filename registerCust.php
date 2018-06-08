<?php 
session_start(); 
include ('library/connection.php');
?>

<html>
<head>
<title>Complain Management System - Customer Register</title>
<?php include("include/header.php"); ?> 
</head>
<body>
<div class="wrapper">
<div class="tops" style="background-color:#dddd;border:0px;"><img src="images/complains.jpg" width="900" height="120"></div>
<div class="pcontent">

    <div class="errorMessage" align="center"></div>
	 <form method="post" name="frmUserReg" id="frmUserReg" action="">
  
      <table width="500px">
	  		<?php include ("library/custRegistration.php");?>
			
				<tr><td></td><td style="font-size:13px;text-align:left;color:red;float:left"><?php   echo $msg1;?></td></tr>
			<tr>
			<th colspan="2" height="40px">Registration Form (Customer)<br>&nbsp;<a href="registerType.php" style="text-decoration:none;color:white;;font-size:14px;float:right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back </th>
			</tr>
			<tr>
				<td width="190px" style="padding-left:30px;">Name</td>
				<td style="padding-top:10px;"><input name="name" type="text"   style="height:36px;" required placeholder="Enter Full Name" value="<?php echo $name;?>" /></td>
			</tr>
			<tr>
				<td style="padding-left:30px;padding-bottom:10px;">Username</td>
				<td style=""><input name="u_name" type="text"   style="height:36px;" required placeholder="Enter User Name"  value="<?php echo $u_name;?>" /></td>
			</tr>
			<tr>
				<td style="padding-left:30px;padding-bottom:10px;">Password</td>
				<td><input name="password" type="password" class="form-control" id="CustomerName"   style="height:36px;" required placeholder="Enter Password"   value="<?php echo $password;?>" /></td>
            </td>
			</tr>
			<tr>
			<td style="padding-left:30px;padding-bottom:10px;">Retype Password</td>
				<td><input name="cpassword" type="password" class="form-control" id="CustomerName"   style="height:36px;" required placeholder="Retype Password"   value="<?php echo $cpassword;?>" /></td>
            </td>
				
			</tr>
			<tr>
				<td style="padding-left:30px;padding-bottom:10px;">Address</td>
				<td><textarea name="address" cols="10" rows="3" class="form-control"  required placeholder="Enter Address" id="Address" style="width:200px;height:80px;"><?php echo $address;?></textarea></td>
            </td>
			</tr>
			<tr>
				<td style="padding-left:30px;padding-bottom:10px;">Mobile</td>
				<td><input name="mobile" type="text"   required placeholder="Enter Mobile No."   style="height:36px;" value="<?php echo $mobile;?>" /></td>
            </td>
			</tr>
			<tr>
				<td style="padding-left:30px;padding-bottom:10px;">Email</td>
				<td><input name="email" type="text"   required placeholder="Enter Email ID"  style="height:36px;" value="<?php echo $email;?>" /></td>
            </tr>
			<tr>
				<td style="padding-left:30px;padding-bottom:10px;">Connection</td>
				<td><select class="form-control"  style="height:36px;" id="selectt" name="type" required>
				<option value="">Select Connection</option>
				<option value="LT">LT Connection</option>
				<option value="ST">ST Connection</option>
				</select></td>
		
			</tr>
			<tr>
				<td style="padding-left:30px;padding-bottom:10px;">Meter No</td>
				<td style="padding-top:10px;"><input name="meter" type="text"  required placeholder="Enter Meter No." style="height:36px;"  value="<?php echo $meter;?>" /></td>
            
			</tr>
			<tr>
				<td style="padding-left:30px;padding-bottom:10px;">Branch</td>
				<td><select class="form-control" id="selectt" width="150px" name="branch" id="pass"  style="height:36px;" required >
		<option value="">Select Branch Name</option>
		<?php 
		$result ="SELECT *FROM tbl_branch ";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
           {	
			$bcode=$row['branch_code'];
			$bname=$row['branch_name'];	
	    	echo "<option value='$bcode'>$bname</option>";
		}
			?>
		</select></td>
			</tr>
			
		<tr>
		<td></td>
		<td><input name="btnSave"  style="BACKGROUND-COLOR:#9966CC;color:white;font-size:16px; float:center;"  type="submit" value="Submit"> </td>
	  </td>
		</tr>
	  </table>
		
      </form>
   </div>
	  <?php include("include/footer.php"); ?> 
</div>
</body>
</html>
