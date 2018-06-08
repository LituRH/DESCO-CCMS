<?php 
  include ('sessioncheck.php');
?>
<?php 
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
    <td width="20%" valign="top" class="navArea" style="background-color: #d1e0e0;"><p>&nbsp;</p>
		<?php include("include/menuCust.php"); ?> 
	</td>
	
	
	
    <td width="720" valign="top" class="contentArea" style="background-color:#F0FFFF;">
		<table width="100%" border="0" cellspacing="0" cellpadding="20">
			<tr>
				<td>
	                               <! ***************Main Content Start ****************>
								   
		<center><table width="677px;" border="0" cellpadding="0" cellspacing="0" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">
      <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#9966CC;">Branches List</td>
	  
    </tr>
	</table>	</center>			   
				<form action="" method="post"  name="frmListUser" id="frmListUser" style="background-color:black;">
  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" class="text">
  
    <tr align="center" id="listTableHeader"  style="color:white;";>
      <td width="100" style="font-size:16px; height:30px;background-color:#a3c2c2;color:black;">SL No</td>
      <td width="200" style="font-size:16px; height:30px;background-color:#a3c2c2;color:black;">Branch Code </td>
      <td width="350" style="font-size:16px; height:30px;background-color:#a3c2c2;color:black;">Branch Name</td>
      <td width="700" style="font-size:16px; height:30px;background-color:#a3c2c2;color:black;">Address</td>
    </tr>
		  
		  <?php 


$result ="SELECT * FROM tbl_branch";
		$tt=mysql_query($result);
		
		while($row = mysql_fetch_array($tt))
        {
			$serial=$row['id'];
			$bcode=$row['branch_code'];
			$bname=$row['branch_name'];
			$address=$row['address'];

		  
           ?>
	 <tr align="center" class="row2"  style="color:black;";>
      <td width="100" style="font-size:15px; height:30px;background-color:#FFFFFF;color:black;"><?php echo $serial;?></td>
      <td width="200" style="font-size:15px; height:30px;background-color:#FFFFFF;color:black;"><?php echo $bcode;?></td>
      <td width="350" style="font-size:15px; height:30px;background-color:#FFFFFF;color:black;"><?php echo $bname;?></td>
      <td width="700" style="font-size:15px; height:30px;background-color:#FFFFFF;color:black"><?php echo $address;?></td>
    </tr>

			<?php } ?>
   
			        

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
