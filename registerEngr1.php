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
       <table width="650" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#336699" class="entryTable" style="BACKGROUND-COLOR:#9966CC;">
		       <tr id="entryTableHeader1"> 
				 <?php 
		include ('library/engrRegistration.php');
		?>
		<center ><p style="font-size:17px;text-align:center;color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php   echo $msg1;?> </p></center>
         <td style="font-size:17px;color:white;height:20px;text-align:center;BACKGROUND-COLOR:#9966CC;"> Engineer Registration Form </td>
        </tr>
		           <tr align="center" style="BACKGROUND-COLOR:#9966CC;"> 
            <td colspan="2"><div align="right"><a href="registerType.php" style="font-size:17px;color:white;text-align:right;text-decoration:none;BACKGROUND-COLOR:#9966CC;">Back</a></div></td>
           </tr>

        <tr> 
         <td class="contentArea" style="background-color:#F0FFFF;"> 
		 <div class="errorMessage" align="center"></div>
		 
		  <table width="100%" border="0" cellpadding="5" cellspacing="0" class="text">
		  
		   			<br><tr>
                           <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Engineer ID : </td>
              <td><input name="c_id" type="text"  class="form-control" id="CustomerName"  required placeholder="Enter Employee ID" value="<?php echo $id;?>" /></td>
            </tr>
			<tr>
              <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Engineer Name : </td>
              <td><input name="name" type="text"  class="form-control" id="CustomerName"  required placeholder="Enter Full Name"   value="<?php echo $name;?>" /></td>
            </tr>
		    <tr>
              <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Designation : </td>
		<td><select name="desig" id="pass"  class="form-control" required="required">
		<option value="">Select Designation</option>
		<option value="Senior Engineer">Senior Engineer</option>
		<option value="Assistant Engineer">Assistant Engineer</option>
		<option value="Sub-Assistant Engineer">Sub-Assistant Engineer</option>
		</select></td>
			</tr>
				<tr>
              <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Username : </td>
              <td ><input name="u_name" type="text"  class="form-control" id="CustomerName"  required placeholder="Enter User Name"  value="<?php echo $u_name;?>" /></td>
            </tr>
    <tr >
              <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Password: </td>
              <td><input name="password" type="password"  class="form-control" id="CustomerName"  required placeholder="Enter Min 6 Digit Password"  value="<?php echo $password;?>" /></td>
            </tr>
				<tr>
              <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Retype Password : </td>
              <td><input name="cpassword" type="password"  class="form-control" id="CustomerName"  required placeholder="Retype Password"   value="<?php echo $cpassword;?>" /></td>
            </tr>
           <tr>
              <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Address: </td>
              <td><textarea name="address" cols="46" rows="3"  class="form-control" required placeholder="Enter Address" style="width:255px;height:80px;" id="Address"><?php echo $address;?></textarea></td>
            </tr>
           <tr>
              <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Mobile No. : </td>
              <td><input name="mobile" type="text"  class="form-control" id="CustomerName"  required placeholder="Enter Mobile No."   value="<?php echo $mobile;?>" /></td>
            </tr>
					   			<tr>
              <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Email ID : </td>
              <td ><input name="email" type="email"  class="form-control" id="CustomerName"  required placeholder="Enter Email ID"   value="<?php echo $email;?>" /></td>
            </tr>
		    <tr>
			<tr>
              <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Joining Date : </td>
              <td><input name="date" type="text"  class="form-control" id="CustomerName"  required placeholder="Enter Joinind Date (ex:dd-mm-yyyy)" value="<?php echo $date;?>" /></td>
            </tr>
	      <tr>
              <td width="50%" style="font-size:17px; height:30px;text-align:right;background-color:#F0FFFF;color:black;padding-right:20px;">&nbsp;<font style="font-family:calibri;">Branch Name : </td>
		<td><select  class="form-control" name="branch" id="pass" required>
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
