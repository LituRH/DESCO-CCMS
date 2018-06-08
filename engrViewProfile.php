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
								   
	<center><table width="495px;" border="0" cellpadding="0" cellspacing="0" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">
      <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#9966CC;">PROFILE </td>
	  
    </tr>
	</table></center>
				

				<form action="" method="post"  name="frmListUser" id="frmListUser" style="background-color:#F0FFFF;">
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#336699" class="entryTable">
      <td class="contentArea" style="background-color:#F0FFFF;"><div class="errorMessage" align="center"></div>
          <table width="100%" border="0" cellpadding="0" cellspacing="3" class="text"  style="background-color:#F0FFFF;">
            <tr class="entryTable">
             <td width="40%" style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Engineer ID</td>
             <td width="200" style="font-size:15px; height:30px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp; <?php echo $eid;?></td>
            </tr>
			<tr class="entryTable">
             <td width="200" style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Engineer Name</td>
             <td width="200" style="font-size:15px; height:30px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp; <?php echo $ename;?></td>
            </tr>
			<tr class="entryTable">
             <td width="200" style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Designation</td>
             <td width="200" style="font-size:15px; height:30px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $desig;?></td>
            </tr>
			  <tr class="entryTable">
             <td width="200" style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;User Name</td>
             <td width="300" style="font-size:15px; height:30px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $uname;?></td>
            </tr>
			<tr class="entryTable">
             <td width="200" style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Password</td>
             <td width="300" style="font-size:15px; height:30px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $pass;?></td>
            </tr>
			<tr class="entryTable">
             <td width="200" style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Address</td>
             <td width="300" style="font-size:15px; height:30px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $address;?></td>
            </tr>
			<tr class="entryTable">
             <td width="200" style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Email-ID</td>
             <td width="300" style="font-size:15px; height:30px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $email;?></td>
            </tr>
			<tr class="entryTable">
             <td width="300" style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Mobile No.</td>
             <td width="200" style="font-size:15px; height:30px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo '0'.$mobile;?></td>
            </tr>
			<tr class="entryTable">
             <td width="300" style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Joining Date</td>
             <td width="200" style="font-size:15px; height:30px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $jdate;?></td>
            </tr>
		<tr class="entryTable">
             <td width="300" style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2; color:black;padding-left:10px;">&nbsp;Branch Name</td>
             <td width="200" style="font-size:15px; height:30px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $bname;?></td>
            </tr>
			<tr class="entryTable">
             <td colspan="2" style="font-size:16px; height:30px;text-align:center;background-color:#F0FFFF; color:black;"><a href="engrUpdateProfile.php" style="text-decoration:none;">Edit</a></td>
			</tr>
   

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
