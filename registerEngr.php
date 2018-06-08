<?php 
session_start(); 
include ('library/connection.php');
?>

<html>
<head>
<title>Complain Management System - Engineer Register</title>
<?php include("include/header.php"); ?> 
</head>
<body>
<div class="wrapper">
<div class="tops"  style="background-color:#dddd;border:0px;"><img src="images/complains.jpg" width="900" height="120"></div>
<div class="pcontent">

    <div class="errorMessage" align="center"></div>
	 <form method="post" name="frmUserReg" id="frmUserReg" action="">
  
      <table width="500px">
	  		<?php include ("library/engrRegistration.php");?>
				<tr><td></td><td style="font-size:13px;text-align:left;color:red;float:left"><?php   echo $msg1;?></td></tr>
			<tr>
			<th colspan="2" height="40px">Registration Form (Engineer)<br>&nbsp;<a href="registerType.php" style="text-decoration:none;color:white;;font-size:14px;float:right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back</th>
			</tr>
			<tr>
				<td width="120px" style="padding-left:60px;padding-bottom:15px;"><br>ID </td>
				<td style="padding-left:20px;"><br><input name="c_id" type="text"  style="height:36px;"  required placeholder="Enter Employee ID" value="<?php echo $id;?>" /></td>
			</tr>
			<tr>
				<td width="100px" style="padding-top:5px;padding-left:60px;padding-bottom:15px;">Name</td>
				<td style="padding-left:20px;"><input name="name" type="text" style="height:36px;" required placeholder="Enter Full Name" value="<?php echo $name;?>" /></td>
			</tr>
			 <tr>
              <td style="padding-top:5px;padding-left:60px;padding-bottom:15px;">Designation</td>
			<td style="padding-left:20px;padding-bottom:10px;"><select  id="selectt"name="desig"  style="height:36px;" class="form-control" required="required">
			<option value="">Select Designation</option>
			<option value="Senior Engineer">Senior Engineer</option>
			<option value="Assistant Engineer">Assistant Engineer</option>
			<option value="Sub-Assistant Engineer">Sub-Assistant Engineer</option>
			</select></td>
			</tr>
			<tr>
				<td style="padding-left:60px;padding-bottom:15px;">Username</td>
				<td style="padding-left:20px;"><input name="u_name" type="text"  style="height:36px;" required placeholder="Enter User Name"  value="<?php echo $u_name;?>" /></td>
			</tr>
			<tr>
				<td style="padding-left:60px;padding-bottom:15px;">Password</td>
				<td style="padding-left:20px;"><input name="password" type="password" style="height:36px;" class="form-control" id="CustomerName"  required placeholder="Enter Password"   value="<?php echo $password;?>" /></td>
            </td>
			</tr>
			<tr>
			<td style="padding-left:60px;padding-bottom:15px;">Retype Password</td>
				<td style="padding-left:20px;"><input name="cpassword" type="password" style="height:36px;" class="form-control" id="CustomerName"  required placeholder="Retype Password"   value="<?php echo $cpassword;?>" /></td>
            </td>
				
			</tr>
			<tr>
				<td style="padding-left:60px;padding-bottom:15px;">Address</td>
				<td style="padding-left:20px;"><textarea name="address" cols="10" rows="3"  class="form-control" required placeholder="Enter Address" id="Address" style="width:200px;height:80px;"><?php echo $address;?></textarea></td>
            </td>
			</tr>
			<tr>
				<td style="padding-left:60px;padding-bottom:15px;">Mobile</td>
				<td style="padding-left:20px;"><input name="mobile" type="text"   style="height:36px;" required placeholder="Enter Mobile No."  value="<?php echo $mobile;?>" /></td>
            </td>
			</tr>
			<tr>
				<td style="padding-left:60px;padding-bottom:15px;">Email</td>
				<td style="padding-left:20px;"><input name="email" type="text"   style="height:36px;" required placeholder="Enter Mobile No."  value="<?php echo $email;?>" /></td>
            </tr>

			<tr>
              <td style="padding-left:60px;padding-bottom:15px;">Joining Date</td>
              <td style="padding-left:20px;"><input name="date" type="text"  style="height:36px;" class="form-control" id="CustomerName"  required placeholder="ex:dd-mm-yyyy" value="<?php echo $date;?>" /></td>
            </tr>
			<tr>
				<td style="padding-left:60px;padding-bottom:15px;">Branch</td>
				<td style="padding-left:20px;"><select class="form-control" id="selectt" style="height:36px;" width="150px" name="branch" id="pass" required >
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
		<td style="padding-left:20px;"><input name="btnSave"  style="BACKGROUND-COLOR:#9966CC;color:white;font-size:16px; float:center;"  type="submit" value="Submit"> </td>
	  </td>
		</tr>
	  </table>
		
      </form>
   </div>
	  <?php include("include/footer.php"); ?> 
</div>
</body>
</html>
