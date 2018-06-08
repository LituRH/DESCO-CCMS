<?php 
  include ('sessioncheck.php');
include ('library/connection.php');
$id=$_SESSION['user'];
$compid=$_REQUEST['compid'];
include("library/compInfoRetrieve.php");
?>
	<?php 
			$result ="SELECT *FROM tbl_complain WHERE comp_id='$compid'";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
			{	
			$compzone=$row['comp_zone'];
			}
			
			$result ="SELECT *FROM tbl_branch WHERE branch_name='$compzone'";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
			{	
			$bid=$row['branch_code'];
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
		<?php include("include/menuAdmin.php"); ?> 
	</td>
	
	
	
    <td width="720" valign="top" class="contentArea" style="background-color:#F0FFFF;">
		<table width="100%" border="0" cellspacing="0" cellpadding="20">
			<tr>
				<td>
	                               <! ***************Main Content Start ****************>
		<center><table width="667px;" border="0" cellpadding="0" cellspacing="0" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">
      <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#9966CC;"> Complain Assign To Engineer </td>
	  
    </tr>
		<?php include("library/adminAssignComplain.php"); ?>
	</table></center>							   
								   
	
				<form action="" method="post"  name="frmListUser" id="frmListUser" style="background-color:#F0FFFF;">
  <table width="667" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#336699" class="entryTable">
      <td class="contentArea" style="background-color:#F0FFFF;"><div class="errorMessage" align="center"></div>
          <table width="100%" border="0" cellpadding="0" cellspacing="3" class="text">
  
			   		<tr class="entryTable">
             <td  width="40%" style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2;color:black;">&nbsp;&nbsp;Complain Title</td>
             <td  style="font-size:15px; height:30px;width:500px;text-align:left;background-color:#a3c2c2;color:black;";>&nbsp;&nbsp;: <?php echo $title;?></td>
            </tr>
			   <tr class="entryTable">
             <td    width="40%" style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2;color:black;">&nbsp;&nbsp;Complainer Name</td>
             <td  style="font-size:15px; height:30px;width:500px;text-align:left;background-color:#a3c2c2;color:black;";>&nbsp;&nbsp;: <?php echo $custname;?></td>
            </tr>
			<tr class="entryTable">
             <td    width="40%" style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2;color:black;">&nbsp;&nbsp;Complainer Mobile No.</td>
             <td  style="font-size:15px; height:30px;width:500px;text-align:left;background-color:#a3c2c2;color:black;";>&nbsp;&nbsp;: <?php echo '0'.$custmobile;?></td>
            </tr>
            <tr class="entryTable">
                <td  style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2;color:black;">&nbsp;&nbsp;Complainer Address</td>
              <td width="200" style="font-size:15px; height:30px;background-color:#a3c2c2;color:black;";>&nbsp;&nbsp;: <?php echo $custaddress;?></td>
			</tr>
			  <tr class="entryTable">
                <td  style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2;color:black;">&nbsp;&nbsp;Complain Description</td>
               <td width="200" style="font-size:15px; height:30px;background-color:#a3c2c2;color:black;";>&nbsp;&nbsp;: <?php echo $desc;?></td>
            </tr>
			<tr class="entryTable">
             <td  style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2;color:black;">&nbsp;&nbsp;Date of Creation</td>
             <td  style="font-size:15px; height:30px;width:500px;text-align:left;background-color:#a3c2c2;color:black;";>&nbsp;&nbsp;: <?php echo $createdate;?></td>
            </tr>
					      <tr>
		<td width="50%" style="font-size:16px; height:30px;background-color:#a3c2c2;color:black;">&nbsp;&nbsp;Assign To Engineer</td>
		<td style="font-size:16px; height:30px;background-color:white;color:black;"><select class="textbox" name="eeid" id="pass" required style="font-size:13px; font-weight: bold;height:30px;width:333px;height:35px;text-align:left;background-color:white;color:black;">
		<option value="">Select an Engineer</option>
		<?php 
			$result ="SELECT *FROM tbl_engineer WHERE branch_name='$bid'";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
           {	
			$eid=$row['eng_id'];
			$ename=$row['eng_name'];
			$desig=$row['designation'];			
	    	echo "<option value='$eid'>$ename ($desig)</option>";
		}
			?>
		</select></td>
			</tr>
					
			<center> <table width="605px;" border="0" cellpadding="1" cellspacing="1" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">
     <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#F0FFFF;"> <input name="btnAssign"  style="BACKGROUND-COLOR:#9966CC;color:white;font-size:16px; float:center;"  type="submit" value="ASSIGN"> </td>
	  
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
