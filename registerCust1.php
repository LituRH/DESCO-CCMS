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
<br/><br/>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox" style="background-color:#dddd;">
 <tr> 
  <td><img src="images/complains.jpg" width="900" height="120"></td>
 </tr>
 <tr> 
  <td valign="top">
   <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr> 
     <td class="contentArea" style="background-color:#F0FFFF;"> 
	 <form method="post" name="frmUserReg" id="frmUserReg" action="">
  
       <table width="400" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#336699" class="entryTable" style="BACKGROUND-COLOR:#9966CC;">
       

	   <tr id="entryTableHeader1"> 
				 <?php 
		include ('library/custRegistration.php');
		?>
		<center ><p style="font-size:17px;text-align:center;color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php   echo $msg1;?> </p></center>
		
         <td style="font-size:17px;color:white;height:20px;text-align:center;BACKGROUND-COLOR:#9966CC;"> Customer Registration Form </td>
        </tr>
		
		           <tr align="center" style="BACKGROUND-COLOR:#9966CC;"> 
            <td colspan="2"><div align="right"><a href="registerType.php" style="font-size:17px;color:white;text-decoration:none;text-align:right;BACKGROUND-COLOR:#9966CC;">Back</a></div></td>
           </tr>
        <tr > 
         <td class="contentArea" style="background-color:#F0FFFF;"> 
		 <div class="errorMessage" align="center"></div>
		 
		  <table width="100%" border="0" cellpadding="5" cellspacing="0" class="text" >

		   			<br><tr>
              <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Customer Name : </td>
              <td ><input class="form-control" name="name" type="text"   required placeholder="Enter Your Full Name" value="<?php echo $name;?>" /></td>
            
		   			</tr>
	
			<tr>
                           <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Username : </td>
              <td><input class="form-control" name="u_name" type="text"  required placeholder="Enter Your User Name"  size="30" maxlength="30"  value="<?php echo $u_name;?>" /></td>
            
			</tr>
			   			<tr>
                          <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Password : </td>
              <td><input name="password" type="password" class="form-control" id="CustomerName"  required placeholder="Enter Min 6 Digit Password"   value="<?php echo $password;?>" /></td>
            </tr>
				<tr>
 <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Retype Password : </td>
              <td><input name="cpassword" type="password" class="form-control" id="CustomerName"  required placeholder="Retype Password"   value="<?php echo $cpassword;?>" /></td>
            </tr>
					  <tr>
 <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Address : </td>
              <td><textarea name="address" cols="46" rows="3" class="form-control" required placeholder="Enter Your Address" id="Address" style="width:255px;height:80px;"><?php echo $address;?></textarea></td>
            </tr>
					<tr>
              <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Mobile No : </td>
              <td><input name="mobile" type="text" class="form-control" id="CustomerName"  required placeholder="Enter Your Mobile No."  value="<?php echo $mobile;?>" /></td>
            </tr>
					   			<tr>
 <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Email ID : </td>
              <td><input name="email" type="email" class="form-control" id="CustomerName"  required placeholder="Enter Your Email ID"  value="<?php echo $email;?>" /></td>
            </tr>
		    <tr>
 <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Connection Type : </td>
		<td><select class="form-control" name="type" id="pass" required>
		<option value="">Select Connection Type</option>
		<option value="LT">LT Connection</option>
		<option value="ST">ST Connection</option>
		</select></td>
			</tr>
			<tr>
              <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Meter No : </td>
              <td><input name="meter" type="text" class="form-control" id="CustomerName"  required placeholder="Enter Your Meter No." value="<?php echo $meter;?>" /></td>
            </tr>
		   
		   
		      <tr>
 <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Branch Name : </td>
		<td><select class="form-control" name="branch" id="pass" required >
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
       			<center> <table width="650px;" border="0" cellpadding="2" cellspacing="1" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">
     <td   style="font-size:17px;text-align:center;background-color:#F0FFFF;"> <input name="btnSave"  style="BACKGROUND-COLOR:#9966CC;color:white;font-size:16px; float:center;"  type="submit" value="Submit Now"> </td>
	  
    </tr>
	</table></center>
          </table></td>
        </tr>
       </table>

      </form></td>
    </tr>
   </table></td>
 </tr>
</table>
<?php include("include/footer.php"); ?> 
</body>
</html>
