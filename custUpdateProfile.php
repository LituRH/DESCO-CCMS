<?php 
  include ('sessioncheck.php');
?>
<?php 
include ('library/connection.php');
$id=$_SESSION['user'];
include("library/custInfoRetrieve.php");
?>		   		 	  

<html>
<head>
<title>Complain Management System - Customer Menu</title>
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
		<?php include("include/menuCust.php"); ?> 
	</td>
	
	
	
    <td width="720" valign="top" class="contentArea" style="background-color:#F0FFFF;">
		<table width="100%" border="0" cellspacing="0" cellpadding="20">
			<tr>
				<td>
	                               <! ***************Main Content Start ****************>
								   

		<center><table width="659px;" border="0" cellpadding="0" cellspacing="0" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">
      <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#9966CC;font-weight:bold;"> Customer Profile Update </td>
	<?php include("library/custProfileUpdate.php"); ?> 
	  
    </tr>
	</table></center>
				
								   
	
				<form action="" method="post"  name="frmListUser" id="frmListUser" style="background-color:#F0FFFF;padding-left:40px;">
  <table width="500px" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#336699" class="entryTable">
      <td class="contentArea" style="background-color:#F0FFFF;><div class="errorMessage" align="center"></div>
          <table width="100%" border="0" cellpadding="0" cellspacing="5" class="text">

            <tr class="entryTable">
              <td  width="40%" style="font-size:16px; height:5px;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Customer Name</td>
             <td width="200" class="content" style="background-color:#F0FFFF;padding-top:10px;"> <input name="name" type="text" class="box" id="CustomerName" style="background-color:white;color:black;font-weight: bold;height:30px;text-align:center;" size="54" maxlength="50"  value="<?php echo $custname;?>" /></td>
            </tr>
			<tr class="entryTable">
              <td  style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;User Name</td>
              <td class="content" style="background-color:#F0FFFF;padding-top:10px;"><input name="uname" type="text" class="box" id="CustomerName" readonly disabled style="background-color:#a3c2c2;color:white;font-weight: bold;height:30px;text-align:center;" size="54" maxlength="30"  value="<?php echo $uname;?>" /></td>
            </tr>
			 <tr class="entryTable">
              <td  style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Password</td>
              <td class="content" style="background-color:#F0FFFF;padding-top:10px;"><input name="pass" type="text" class="box" id="CustomerName" style="background-color:white;color:black;font-weight: bold;height:30px;text-align:center;" size="54" maxlength="20"  value="<?php echo $pass;?>" /></td>
            </tr>
			
            <tr class="entryTable">
               <td  style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Address</td>
              <td class="content" style="background-color:#F0FFFF;padding-top:10px;"><textarea name="address" cols="40" rows="3" class="box" style="background-color:white; width:200px;color:black;font-weight: bold;text-align:center;" id="Address"><?php echo $custaddress;?></textarea></td>
            </tr>
				 <tr class="entryTable">
              <td  style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Email-ID</td>
              <td class="content" style="background-color:#F0FFFF;padding-top:10px;"><input name="email" type="text" class="box" id="CustomerName" style="background-color:white;color:black;font-weight: bold;height:30px;text-align:center;" size="54" maxlength="50"  value="<?php echo $email;?>" /></td>
            </tr>
				<tr class="entryTable">
              <td  style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Mobile No.</td>
              <td class="content" style="background-color:#F0FFFF;padding-top:10px;"><input name="mobile" type="text" class="box" id="CustomerName" style="background-color:white;color:black;font-weight: bold;height:30px;text-align:center;" size="54" maxlength="20"  value="<?php echo '0'. $custmobile;?>" /></td>
            </tr>
					 <tr class="entryTable">
              <td  style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Meter No.</td>
              <td class="content" style="background-color:#F0FFFF;padding-top:10px;"><input name="meter" type="text" class="box" id="CustomerName" style="background-color:white;color:black;font-weight: bold;height:30px;text-align:center;" size="54" maxlength="20"  value="<?php echo $meter;?>" /></td>
            </tr>
			
			    <tr>
		 <td  style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:10px;text-align:left;">&nbsp;Connection Type</td>
		<td style="font-size:16px;background-color:#F0FFFF;height:30px;color:black;"><select class="textbox" name="type" id="pass" required style="font-size:13px; height:30px;width:200px;background-color:white;color:black;font-weight: bold;" >
		<option value="<?php echo $type; ?>"><?php echo $type; ?> Connection</option>
		<option value="LT">LT Connection</option>
		<option value="ST">ST Connection</option>
		</select></td>
			</tr>
				      <tr>
		   <td  style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Branch Name</td>
		<td style="font-size:16px; height:30px;background-color:#F0FFFF;color:black;"><select class="textbox" name="bname" id="pass" required style="font-size:13px; height:30px;width:200px;text-align:center;background-color:white;color:black;font-weight: bold;">
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
           		<center> <table width="605px;" border="0" cellpadding="0" cellspacing="0" class="text">                      
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
