<?php 
  include ('sessioncheck.php');
?>
<?php 
include ('library/connection.php');
$id=$_SESSION['user'];
?>
		<?php 
		$result ="SELECT eng_id FROM tbl_engineer WHERE user_name='$id'";
		$tt=mysql_query($result);
		
		while($row = mysql_fetch_array($tt))
        {
			$e_id=$row[0];
		 } 
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
								   
<center> <table width="677px;" border="0" cellpadding="0" cellspacing="0" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">
     <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#9966CC;">REPORT</td>
	  
    </tr>
	</table></center>
		<?php include("library/compReport.php"); ?> 						   
	
				<form action="" method="post"  name="frmListUser" id="frmListUser" style="background-color:#F0FFFF;">
  <table width="677" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#336699" class="entryTable">
      <td class="contentArea" style="background-color:#F0FFFF">
          <table width="100%" border="0" cellpadding="0" cellspacing="10" class="text">
      
                <tr>
		 <td width="20%" style="font-size:16px; height:30px;text-align:center;background-color:#a3c2c2;color:black;">&nbsp;Complain ID</td>
		<td style="font-size:16px; height:30px;background-color:#F0FFFF;color:black;"><select class="textbox" name="cid" id="pass" required style="font-size:13px; height:30px;WIDTH:200PX;background-color:white;color:black;font-weight:bold;">
		<option value="">Select Complain ID</option>
		<?php 
		$result ="SELECT * FROM tbl_complain where eng_id='$e_id' AND comp_status='Working'";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
           {	
			$cid=$row['comp_id'];
	    	echo "<option value='$cid'>$cid</option>";
		}
			?>
		</select></td>
			</tr>
			<tr class="entryTable">
              <td width="20%" style="font-size:16px; height:30px;text-align:center;background-color:#a3c2c2;color:black;">&nbsp;Service Name</td>
              <td class="content" style="background-color:#F0FFFF;"><input name="servName" type="text" class="box" id="CustomerName"  placeholder="Enter Service Name" required style="background-color:white;color:black;height:30px;font-weight:bold;margin-top:7px;" size="51" maxlength="200"  value="" /></td>
            </tr>
			  <tr class="entryTable">
               <td width="20%" style="font-size:16px; height:30px;text-align:center;background-color:#a3c2c2;color:black;">&nbsp;Description</td>
              <td class="content" style="background-color:#F0FFFF;"><textarea name="desc" cols="30" rows="3" class="box" placeholder="Enter Service Description" required style="background-color:white;color:black;font-weight:bold;margin-top:7px;" id="Address"></textarea></td>
            </tr>
			<tr class="entryTable">
              <td width="20%" style="font-size:16px; height:30px;text-align:center;background-color:#a3c2c2;color:black;">&nbsp;Service Charge</td>
              <td class="content" style="background-color:#F0FFFF;"><input name="servCharge" type="text" class="box" id="CustomerName" placeholder="Optional" style="background-color:white;color:black;height:30px;font-weight:bold;margin-top:7px;" size="51" maxlength="20"  value="" /></td>
            </tr>
			
			
			<center> <table width="605px;" border="0" cellpadding="1" cellspacing="0" class="text">                      
	<tr id="entryTableHeader1" style="height:30px;background-color:#F0FFFF;">
     <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#F0FFFF;"> <input name="btnSave"  style="BACKGROUND-COLOR:#9966CC;color:white;font-size:16px; float:center;"  type="submit" value="SUBMIT"> </td>
	  
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
