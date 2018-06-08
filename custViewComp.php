<?php 
  include ('sessioncheck.php');
?>
<?php  
include ('library/connection.php');
$id=$_SESSION['user'];
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
	
	
	
    <td width="720" valign="top" class="contentArea" style="background-color: #F0FFFF;">
		<table width="100%" border="0" cellspacing="0" cellpadding="20">
			<tr>
				<td>
	                               <! ***************Main Content Start ****************>
								   
		<center><table width="682px;" border="0" cellpadding="0" cellspacing="0" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">
      <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#9966CC;"> Customer Complain List </td>
	  
    </tr>
	</table></center>
								   
				<form action="" method="post"  name="frmListUser" id="frmListUser" style="background-color:black;">
  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" class="text">
  
    <tr align="center" id="listTableHeader"  style="color:white;";>
      <td width="450" style="font-size:17px; height:30px;background-color:#a3c2c2;color:black;";>Complain Title</td>
      <td width="200" style="font-size:17px; height:30px;background-color:#a3c2c2;color:black;";>Complain Date</td>
      <td width="100" style="font-size:17px; height:30px;background-color:#a3c2c2;color:black;";>Status</td>
	   <td width="150" style="font-size:17px; height:30px;background-color:#a3c2c2;color:black;">Details</td>
    </tr>
		  
		  <?php 
		$result ="SELECT cust_id FROM tbl_customer WHERE user_name='$id'";
		$tt=mysql_query($result);
		
		while($row = mysql_fetch_array($tt))
        {
			$c_id=$row[0];
		 } 
		 ?>
		 	  <?php 
$result ="SELECT * FROM tbl_complain where cust_id='$c_id'  order by comp_id desc";
		$tt=mysql_query($result);
		
		while($row = mysql_fetch_array($tt))
        {
			$title=$row['comp_title'];
			$date=$row['create_date'];
			$status=$row['comp_status'];
           ?>
	 <tr align="center" class="row2"  style="color:black;";>
      <td width="500" style="font-size:16px; height:30px; background-color:#FFFFFF;color:black;"><?php echo $title;?></td>
      <td width="500" style="font-size:16px; height:30px;background-color:#FFFFFF;color:black;"><?php echo $date;?></td>
      <td width="500" style="font-size:16px; height:30px;background-color:#FFFFFF;color:black;"><?php if($status=="Open"){echo "Pending";}else{echo $status;}?></td>
	   <td width="500" style="font-size:16px; height:30px;background-color:#FFFFFF;color:black;"><?php   if($status=="Closed") { echo "<a href='report.php?compid=$row[0]'>Click Here</a>"; } else {echo "<a href='custCompDetails.php?compid=$row[0]'>Click Here</a>";}?></td>
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
