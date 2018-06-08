<?php 
  include ('sessioncheck.php');
?>
<?php 
include ('library/connection.php');
$id=$_SESSION['user'];
include("library/engrInfoRetrieve.php");
?>	
<html>
<head>
<title>Complain Management System - Engineer Menu</title>
<?php include("include/header.php"); ?> 
</head>
<body>
<br/><br/>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox" style="background-color:#dddd;">
  <tr>
      <td colspan="2"><img src="images/complains.jpg" width="900" height="120"></td>
  </tr>
  
  <tr>
    <td width="20%" valign="top" class="navArea" style="background-color:#d1e0e0;"><p>&nbsp;</p>
		<?php include("include/menuEngr.php"); ?>  
	</td>
	
	
	
    <td width="720" valign="top" class="contentArea" style="background-color:#F0FFFF;">
		<table width="100%" border="0" cellspacing="0" cellpadding="20">
			<tr>
				<td>
	                               <! ***************Main Content Start ****************>
								   
					<center><table width="670px;" border="0" cellpadding="0" cellspacing="0" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">
      <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#9966CC;"> Edit Profile</td>
		<?php include("library/engrProfileUpdate.php"); ?> 
	  
    </tr>
	</table></center>					   
	
				<form action="" method="post"  name="frmListUser" id="frmListUser" style="background-color:#F0FFFF;">
  <table width="670" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#336699" class="entryTable">
      <td class="contentArea" style="background-color:#F0FFFF;"><div class="errorMessage" align="center"></div>
          <table width="100%" border="0" cellpadding="0" cellspacing="3" class="text">
			 <tr class="entryTable">
             <td width="30%" style="font-size:16px; background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Engineer ID</td>
              <td class="content" style="background-color:#F0FFFF;"><input name="eid" type="text" disabled readonly style="background-color:a3c2c2;color:black;font-weight: bold;height:30px;text-align:center;" size="45" maxlength="20"  value="<?php echo $eid?>"/></td>
            </tr>
            <tr class="entryTable">
                            <td width="30%" style="font-size:16px;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Engineer Name</td>
              <td class="content" style="background-color:#F0FFFF;"><input name="name" type="text" style="background-color:white;color:black;font-weight: bold;height:30px;text-align:center;" size="45" maxlength="50"  value="<?php echo $ename ?>" /></td>
            </tr>
			  	      <tr>
		 <td width="30%" style="font-size:16px;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Designation</td>
		<td style="font-size:16px;background-color:#F0FFFF;color:black;black;font-weight: bold;"><select class="textbox" name="desig" id="pass" required style="font-size:13px; height:30px;background-color:white;color:black;font-weight: bold;">
		<option value="<?php echo $desig ?>"><?php echo $desig ?></option>
		<option value="Senior Engineer">Senior Engineer</option>
		<option value="Assistant Engineer">Assistant Engineer</option>
		<option value="Sub-Assistant Engineer">Sub-Assistant Engineer</option>
		</select></td>
			</tr>
			  <tr class="entryTable">
              <td width="30%" style="font-size:16px;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;User Name</td>
              <td class="content" style="background-color:#F0FFFF;"><input name="uame" disabled type="text" class="box" readonly disabled style="background-color:#a3c2c2;color:white;font-weight: bold;height:30px;text-align:center;" size="53" maxlength="30"  value="<?php echo $uname ?>" /></td>
            </tr>
            <tr class="entryTable">
                  <td width="30%" style="font-size:16px;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Password</td>
              <td class="content" style="background-color:#F0FFFF;"><input name="pass" type="text" class="box" style="background-color:white;color:black;font-weight: bold;height:30px;text-align:center;" size="53" maxlength="20" value="<?php echo $pass ?>" /></td>
            </tr>
            <tr class="entryTable">
                <td width="30%" style="font-size:16px;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Address</td>
              <td class="content" style="background-color:#F0FFFF;"><textarea name="address" cols="30" rows="3" style="background-color:white;color:black;font-weight: bold;text-align:center;"  class="box" id="Address"><?php echo $address ?></textarea></td>
            </tr>
            <tr class="entryTable">
              <td width="30%" style="font-size:16px;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Email-ID</td>
              <td class="content" style="background-color:#F0FFFF;"><input name="email" type="text" class="box" style="background-color:white;color:black;font-weight: bold;height:33px;text-align:center;" size="53" maxlength="50"  value="<?php echo $email ?>"/></td>
            </tr>
            <tr class="entryTable">
             <td width="30%" style="font-size:16px; background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Mobile No.</td>
              <td class="content" style="background-color:#F0FFFF;"><input name="mobile" type="text" class="box" style="background-color:white;color:black;font-weight: bold;height:33px;text-align:center;" size="53" maxlength="20"   id="Mobile" value="<?php echo '0'.$mobile ?>"  /></td>
            </tr>
		    <tr class="entryTable">
             <td width="30%" style="font-size:16px;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Joining Date</td>
              <td class="content" style="background-color:#F0FFFF;"><input name="jdate" type="text" style="background-color:white;color:black;font-weight: bold;height:35px;text-align:center;" size="45" maxlength="60" value="<?php echo $jdate ?>" /></td>
            </tr>
			      <tr>
			   <td width="30%" style="font-size:16px; background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Branch Name</td>
		<td style="font-size:16px;background-color:#F0FFFF;height:30px;color:black;"><select class="textbox" name="bname" id="pass" required required style="font-size:13px; height:30px;text-align:center;background-color:white;color:black;font-weight: bold;">
		<option value="<?php echo $branch ?>"><?php echo $bname ?></option>
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
			
			           		<center> <table width="605px;" border="0" cellpadding="2" cellspacing="1" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">
     <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#F0FFFF;"> <input name="btnUpdate"  style="BACKGROUND-COLOR:#9966CC;color:white;font-size:16px; float:center;"  type="submit" value="SAVE"> </td>
	  
    </tr>
	</table></center>
			
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>



									 <! ***************Main Content End ****************>
									 
									 
									 
				</td>
			</tr>
		</table>
	</td>
	
	
	
  </tr>
</table>
<?php include("include/footer.php"); ?> 
</body>
</html>
