<?php 
  include ('sessioncheck.php');
?>
<?php 
include ('library/connection.php');
$id=$_SESSION['user'];
$engids=$_REQUEST['engid'];
	
$result ="SELECT * FROM tbl_engineer WHERE eng_id='$engids'";
			
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {

			$eid=$row['eng_id'];
			$name=$row['eng_name'];
			$desig=$row['designation'];
			$address=$row['address'];
			$mobile=$row['mobile'];
			$email=$row['email'];
			$jdate=$row['join_date'];
			$ebranchcode=$row['branch_name'];
						$working=0; $closed=0;			
						$abc ="SELECT *FROM tbl_complain WHERE eng_id='$eid'";
						$ttt=mysql_query($abc);
						while($row = mysql_fetch_array($ttt))
							{			
								$status=$row['comp_status'];
								if($status=='Working')
								{
									$working=$working+1;
								}
								if($status=='Closed')
								{
									$closed=$closed+1;
								}
							}
							
						$result1 ="SELECT *FROM tbl_branch WHERE branch_code='$ebranchcode'";
						$tt1=mysql_query($result1);
						while($row = mysql_fetch_array($tt1))
							{			
								$bbname=$row['branch_name'];
							}
		}			
?>
<html>
<head>
<title>Complain Management System - Admin Menu</title>
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
		<table width="100%" border="0" cellspacing="0" cellpadding="20">
			<tr>
				<td>
	                               <! ***************Main Content Start ****************>
								   
	<center><table width="660" border="0" cellpadding="0" cellspacing="0" class="text">                      
	<tr id="entryTableHeader1" style="height:30px;;">
      <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#9966CC;"> Engineer Profile Details </td>
	  
    </tr>
	</table></center>
								   
	
				<form action="" method="post"  name="frmListUser" id="frmListUser" style="background-color:#F0FFFF;">
  <table width="667" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#336699" class="entryTable">
      <td class="contentArea" style="background-color:#F0FFFF;"><div class="errorMessage" align="center"></div>
          <table width="100%" border="0" cellpadding="0" cellspacing="3" class="text">
			         <tr class="entryTable">
             <td width="40%" style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:100px;">&nbsp;Engineer ID</td>
             <td width="200" style="font-size:15px; height:30px;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $eid;?></td>
            </tr>
			<tr class="entryTable">
             <td width="300" style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:100px;">&nbsp;Engineer Name</td>
             <td width="200" style="font-size:15px; height:30px;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $name;?></td>
            </tr>
			<tr class="entryTable">
             <td width="300" style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:100px;">&nbsp;Designation</td>
             <td width="200" style="font-size:15px; height:30px;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $desig;?></td>
            </tr>
			<tr class="entryTable">
             <td width="300" style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:100px;">&nbsp;Address</td>
             <td width="200" style="font-size:15px; height:30px;;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $address;?></td>
            </tr>
			<tr class="entryTable">
             <td width="300" style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:100px;">&nbsp;Email-ID</td>
             <td width="200" style="font-size:15px; height:30px;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $email;?></td>
            </tr>
			<tr class="entryTable">
             <td width="300" style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:100px;">&nbsp;Mobile No.</td>
             <td width="200" style="font-size:15px; height:30px;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo '0'.$mobile;?></td>
            </tr>
			<tr class="entryTable">
             <td width="300" style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:100px;">&nbsp;Joining Date</td>
             <td width="200" style="font-size:15px; height:30px;;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $jdate;?></td>
            </tr>
					<tr class="entryTable">
             <td width="300" style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:100px;">&nbsp;Branch Name</td>
             <td width="200" style="font-size:15px; height:30px;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $bbname;?></td>
            </tr>
			<tr class="entryTable">
             <td width="300" style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:100px;">&nbsp;Working Complains</td>
             <td width="200" style="font-size:15px; height:30px;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $working;?></td>
            </tr>
					<tr class="entryTable">
             <td width="300" style="font-size:16px; height:30px;background-color:#a3c2c2; color:black;padding-left:100px;;">&nbsp;Closed Complains</td>
             <td width="200" style="font-size:15px; height:30px;;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $closed;?></td>
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
