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
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox" style="background-color:#dddd;">
  <tr>
      <td colspan="2"><img src="images/complains.jpg" width="900px" height="120"></td>
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
    <td>   <select class="form-control" name="searching" id="pass" required width="300px" style="font-size:14px;">
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
         </td><td>
        <input type="submit" name="sname" value="Search"  size="8px" style="background-color:#95A5A6;font-size:15px;"/>
</td>
		</form>    
	</table>
		<table width="100%px;" border="0" cellpadding="0" cellspacing="0" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">
      <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#9966CC;">Customer Details </td>
	  
    </tr>
	</table>
								   
				<form action="" method="post"  name="frmListUser" id="frmListUser">
  <table width="100%" border="1"  cellpadding="0" cellspacing="0" class="text">
  
        <tr align="center" id="listTableHeader"  style="color:white;";>
      <td style="font-size:15px; height:30px;background-color:#a3c2c2;color:black;";>Customer Name</td>
      <td  style="font-size:15px; height:30px;background-color:#a3c2c2;color:black;";>Mobile No.</td>
      <td style="font-size:15px; height:30px;background-color:#a3c2c2;color:black;";>Conn. Type</td>
	  <td  style="font-size:15px; height:30px;background-color:#a3c2c2;color:black;";>Branch</td>
	  <td  style="font-size:15px; height:30px;background-color:#a3c2c2;color:black;";>Address</td>
      <td  style="font-size:15px; height:30px;background-color:#a3c2c2;color:black;";>Complain</td>
    </tr>
		<?php 
		if ($brname=="")
			$result ="SELECT * FROM tbl_customer";
		else if ($brname!="")
			$result ="SELECT * FROM tbl_customer WHERE branch_name='$bbcode'";
			
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$cid=$row['cust_id'];
			$name=$row['cust_name'];
			$address=$row['address'];
			$mobile=$row['mobile'];
			$email=$row['email'];
			$ctype=$row['conn_type'];
			$ebranchcode=$row['branch_name'];			
			?>
			<?php
						$total=0;
						$abc ="SELECT *FROM tbl_complain";
						$ttt=mysql_query($abc);
						while($row = mysql_fetch_array($ttt))
							{			
								$ccid=$row['cust_id'];
								if($cid==$ccid)
								{
									$total=$total+1;
								}

							}
							
						$result1 ="SELECT *FROM tbl_branch WHERE branch_code='$ebranchcode'";
						$tt1=mysql_query($result1);
						while($row = mysql_fetch_array($tt1))
							{			
								$bbname=$row['branch_name'];
							}
			?>

				 <tr class="row2"  style="color:black;";>
      <td style="font-size:13px; height:30px;background-color:#ffffff; color:black;"><?php echo $name;?></td>
      <td  style="font-size:13px; height:30px;background-color:#ffffff; color:black;"><?php echo '0'.$mobile;?></td>
      <td style="font-size:13px; text-align:center;height:30px;background-color:#ffffff; color:black;"><?php echo $ctype;?></td>
	   <td style="font-size:13px; height:30px;background-color:#ffffff; color:black;"><?php echo $bbname;?></td>
	         <td  style="font-size:13px; height:30px;background-color:#ffffff; color:black;"><?php echo $address;?></td>
      <td  style="font-size:13px; height:30px;background-color:#ffffff; text-align:center; color:black;"><?php echo $total;?></td>
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
<p>&nbsp;</p>
<?php include("include/footer.php"); ?> 
</body>
</html>
