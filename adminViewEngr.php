<?php 
  include ('sessioncheck.php');
?>
<?php  
include ('library/connection.php');
$id=$_SESSION['user'];
$brname=$_POST['searching'];
?>
    <?php 
			  $result ="SELECT *FROM tbl_branch WHERE branch_name='$brname'";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
           {			
			$bbcode=$row['branch_code'];
			}
			?>
<html>
<head>
<title>Complain Management System - Admin View</title>
<?php include("include/header.php"); ?> 
</head>
<body>
<br/><br/>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox" style="background-color:#dddd">
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
								   
	<table width="400px" border="0" cellpadding="0" cellspacing="0" class="text">                      
<tr>
	        <form name="srch" action="" method="post" style="float:center;">
       <td>
	   <select class="form-control" name="searching" id="pass" required style="color:black;font-size:14px; width="300px">
	   	    <?php if ($brname=="") { ?> <option value="">Select Branch Name</option><?php } else { ?>
	   <option value="<?php echo $brname ?>"><?php echo $brname ?></option> <?php } ?>
            <?php 
			  $result ="SELECT *FROM tbl_branch ";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
           {			
			$bcode=$row['branch_code'];
			$bname=$row['branch_name'];	
	    	echo "<option value='$bname'>$bname</option>";}
			?>
            </select>
         </td>
		 <td>
        <input type="submit" class="button" name="sname" value="Search"  size="8px" style="background-color:#95A5A6; height=15px; color:white;font-size:15px;"/>
</td>
		</tr>
		</form>    
	</table>
	<center><table width="677px;" border="0" cellpadding="0" cellspacing="0" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">
      <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#9966CC;">Engineer Details </td>
	  
    </tr>
	</table></center>
								   
				<form action="" method="post"  name="frmListUser" id="frmListUser" style="background-color:black;">
  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" class="text">
      <tr align="center" id="listTableHeader"  style="color:white; background-color:#a3c2c2";>
      <td width="500" style="font-size:15px; height:30px;background-color:#a3c2c2;color:black;";>Engineer ID</td>
      <td width="100" style="font-size:15px; height:30px;background-color:#a3c2c2;color:black;";>Engineer Name</td>
      <td width="100" style="font-size:15px; height:30px;background-color:#a3c2c2;color:black;";>Designation</td>
	  <td width="100" style="font-size:15px; height:30px;background-color:#a3c2c2;color:black;";>Branch</td>
	        <td width="100" style="font-size:15px; height:30px;background-color:#a3c2c2;color:black;";>Working Complain</td>
      <td width="100" style="font-size:15px; height:30px;background-color:#a3c2c2;color:black;";>Closed Complain</td>
	   <td width="200" style="font-size:15px; height:30px;background-color:#a3c2c2;color:black;">Details</td>
    </tr>

		  
		  <?php 
		if ($brname=="")
			$result ="SELECT * FROM tbl_engineer";
		else if ($brname!="")
			$result ="SELECT * FROM tbl_engineer WHERE branch_name='$bbcode'";
			
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
			?>
			<?php
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
			?>	
			
				 <tr align="center" class="row2"  style="color:black;";>
      <td width="500" style="font-size:14px; height:30px;;background-color:white; color:black;"><?php echo $eid;?></td>
      <td width="500" style="font-size:14px; height:30px;background-color:white; color:black;"><?php echo $name;?></td>
      <td width="500" style="font-size:14px; height:30px;background-color:white; color:black;"><?php echo $desig;?></td>
	   <td width="500" style="font-size:14px; height:30px;background-color:white; color:black;"><?php echo $bbname;?></td>
	         <td width="500" style="font-size:14px; height:30px;background-color:white; color:black;"><?php echo $working;?></td>
      <td width="500" style="font-size:14px; height:30px;background-color:white; color:black;"><?php echo $closed;?></td>
	     <td width="500" style="font-size:14px; height:30px;background-color:white; color:black;"><?php  echo "<a href='adminViewEngrDetails.php?engid=$eid'>Click Here</a>";?></td>
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
