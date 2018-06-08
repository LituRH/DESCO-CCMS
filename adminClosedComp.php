<?php 
  include ('sessioncheck.php');
include ('library/connection.php');
$id=$_SESSION['user'];
$brname=$_POST['searching'];
?>
<html>
<head>
<title>Complain Management System - Admin View</title>
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
								   
	<table width="400px" border="0" cellpadding="0" cellspacing="0" class="text">                      
<tr>
	        <form name="srch" action="" method="post" style="float:center;">
     <td>  <select class="form-control" width="300" name="searching" id="pass" required style="font-size:14px;">
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
		<input type="submit" name="sname" value="Search"  size="8px" style="background-color:#95A5A6;color:white;font-size:15px;"/>
</td>
		</form>    
	</table>
	<table width="677px;" border="0" cellpadding="0" cellspacing="0" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">
      <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#9966CC;">Closed Complain List </td>
	  
    </tr>
	</table></center>
								   
				<form action="" method="post"  name="frmListUser" id="frmListUser" style="background-color:black;">
  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" class="text">
  
      <tr align="center" id="listTableHeader"  style="color:white;";>
      <td width="400" style="font-size:17px; height:30px;background-color:#a3c2c2;color:black;";>Complain Title</td>
      <td width="200" style="font-size:17px; height:30px;background-color:#a3c2c2;color:black;";>Complain Date</td>
      <td width="100" style="font-size:17px; height:30px;background-color:#a3c2c2;color:black;";>Status</td>
	  <td width="100" style="font-size:17px; height:30px;background-color:#a3c2c2;color:black;";>Branch</td>
	   <td width="100" style="font-size:17px; height:30px;background-color:#a3c2c2;color:black;">Details</td>
    </tr>
		  
		  <?php 
		if ($brname=="")
			$result ="SELECT * FROM tbl_complain WHERE comp_status='Closed' ORDER BY comp_id DESC";
		else if ($brname!="")
			$result ="SELECT * FROM tbl_complain WHERE comp_zone='$brname' AND comp_status='Closed' ORDER BY comp_id DESC";
			
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {

			$title=$row['comp_title'];
			$date=$row['create_date'];
			$status=$row['comp_status'];
				$bnamed=$row['comp_zone'];
			?>
	 <tr align="center" class="row2"  style="color:black;";>
      <td width="500" style="font-size:16px; height:30px; background-color:#ffffff;color:black;"><?php echo $title;?></td>
      <td width="500" style="font-size:16px; height:30px;;background-color:#ffffff;color:black;"><?php echo $date;?></td>
      <td width="500" style="font-size:16px; height:30px;background-color:#ffffff; font-weight: bold;color:black;"><?php echo $status;?></td>
	   <td width="500" style="font-size:16px; height:30px;background-color:#ffffff; color:black;"><?php echo $bnamed;?></td>
	     <td width="500" style="font-size:16px; height:30px;background-color:#ffffff;color:black;"><?php  echo "<a href='report.php?compid=$row[0]'>Click Here</a>";?></td>
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
