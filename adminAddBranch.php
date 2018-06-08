<?php 
  include ('sessioncheck.php');
include ('library/connection.php');
?>

<html>
<head>
<title>Complain Management System - Chief Admin Menu</title>
<?php include("include/header.php"); ?> 
</head>
<body>
<br/><br/>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox" style="background-color:#dddd;">
  <tr>
      <td colspan="2"><img src="images/complains.jpg" width="900" height="120"></td>
  </tr>
  
  <tr>
   <td width="20%" valign="top" class="navArea" style="background-color:#d1e0e0"><p>&nbsp;</p>
		<?php include("include/menuAdmin.php"); ?> 
	</td>
	
	
	
    <td width="720" valign="top" class="contentArea" style="background-color:#F0FFFF;">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
	                               <! ***************Main Content Start ****************>
								   <center> <table width="667px;" border="0" cellpadding="0" cellspacing="0" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">
     <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#9966CC;"> Add New Branch </td>
	  
    </tr>
		 <?php   include ('library/addBranch.php') ;?>
		<center><font color="red"><?php   echo $msg;?></font></center><br> 
	</table></center>
								   
	
				<form action="" method="post"  name="frmListUser" id="frmListUser" style="background-color:#F0FFFF;">
  <table width="667" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#336699" class="entryTable">
      <td class="contentArea" style="background-color:#F0FFFF;"><div class="errorMessage" align="center"></div>
          <table width="100%" border="0" cellpadding="0" cellspacing="15" class="text">

			 <tr class="entryTable">
               <td width="20%" style="font-size:16px; height:30px;text-align:center;background-color:#a3c2c2; color:black;">&nbsp;Serial No.</td>
              <td class="content" style="background-color:#F0FFFF; height:30px;color:black;"><input name="s_id" type="text" readonly  style="margin-top:5px;" required  value="<?php echo $serial_id;?>" /></td>
            </tr>
				<tr class="entryTable">
              <td width="20%" style="font-size:16px; height:30px;text-align:center;background-color:#a3c2c2; color:black;">&nbsp;Branch Code</td>
              <td class="content " style="background-color:#F0FFFF;"><input name="bcode" type="text" class="box" id="CustomerName"  required   style="margin-top:5px;" placeholder="Enter Branch Code" style="background-color:white;color:black;height:30px;font-weight: bold" size="54" maxlength="20"  value="<?php echo $bcode;?>"  /></td>
            </tr>
  
			  <tr class="entryTable">
              <td width="20%" style="font-size:16px; height:30px;text-align:center;background-color:#a3c2c2; color:black;">&nbsp;Branch Name</td>
 <td class="content" style="background-color:#F0FFFF;"><input name="bname" type="text" class="box" id="CustomerName"  style="margin-top:5px;" required style="background-color:white;color:black;height:30px;font-weight: bold" size="54"   placeholder="Enter Branch Name" maxlength="100"   value="<?php echo $bname;?>" /></td>             
            </tr>
	     <tr class="entryTable">
               <td width="20%" style="font-size:16px; height:30px;text-align:center;background-color:#a3c2c2; color:black;">&nbsp;Address</td>
              <td class="content" style="background-color:#F0FFFF;"><textarea name="address" cols="30" rows="3"   style="margin-top:5px;" placeholder="Enter Branch Adress" class="box" required style="color:black;font-weight: bold" id="Address"><?php echo $address;?></textarea></td>
            </tr>
			
			
			           		<center> <table width="605px;" border="0" cellpadding="1" cellspacing="1" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">
     <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#F0FFFF;"> <input name="btnSave"  style="BACKGROUND-COLOR:#9966CC;color:white;font-size:16px; float:center;"  type="submit" value="Submit Now"> </td>
	  
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
