<?php 
  include ('sessioncheck.php');
?>
<?php 
include ('library/connection.php');
$id=$_SESSION['user'];
$compid=$_REQUEST['compid'];
include("library/compInfoRetrieve.php");
	
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
    <td width="20%" valign="top" class="navArea" style="background-color:#d1e0e0"><p>&nbsp;</p>
		<?php include("include/menuCust.php"); ?> 
	</td>
	
	
	
    <td width="720" valign="top" class="contentArea" style="background-color:#F0FFFF">
		<table width="100%" border="0" cellspacing="0" cellpadding="20">
			<tr>
				<td>
	                               <! ***************Main Content Start ****************>
								   				<?php if($status=="Open"){?>

      <p><center style="color:white; height:20px; font-size:16px; color:white;BACKGROUND-COLOR:red;"><marquee>Your Complain Status is Pending. We Will Assign This an Engineer Very Soon.</marquee></center></p>

	<?php } ?>		
			<?php if($status=="Working"){?>

      <p><center style="color:white; height:20px; font-size:16px; color:white;BACKGROUND-COLOR:red;"><marquee>Your Complain is Under Working.</marquee></center></p>

	<?php } ?>	
			<?php if($status=="Closed"){
			$result ="SELECT * FROM tbl_report where complain_id='$compid'";
	$tt=mysql_query($result);
	while($row = mysql_fetch_array($tt))
       {
		$bill=$row['serv_charge'];
			$servname=$row['serv_name'];
			$servdesc=$row['description'];
		}?>

      <p><center style="color:white; height:20px; font-size:16px; color:white;BACKGROUND-COLOR:green;"><marquee>Your Complain Have Been Closed. Thanks For Stay With DESCO.</marquee></center></p>

	<?php } ?>	
								   
				<form action="" method="post"  name="frmListUser" id="frmListUser" style="BACKGROUND-COLOR:#F0FFFF;">
				  <div id="yes">
  <table width="660" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#336699" class="entryTable">
    <tr>
  <td colspan="2" style="font-size:17px; height:30px;BACKGROUND-COLOR:#9966CC;color:white;"><center>Complain Details </center></td>
  </tr>
      <td class="contentArea" style="BACKGROUND-COLOR:#F0FFFF;"><div class="errorMessage" align="center"></div>
          <table width="100%" border="0" cellpadding="0" cellspacing="3" class="text">
     <tr class="entryTable">
             <td  width="40%"style="font-size:16px; height:30px;background-color:#a3c2c2;color:black">&nbsp;&nbsp;Complain ID</td>
             <td  style="font-size:15px; height:30px;width:500px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $compid;?></td>
            </tr>
			<tr class="entryTable">
             <td  style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2;color:black">&nbsp;&nbsp;Complain Title</td>
             <td  style="font-size:15px; height:30px;width:500px;text-align:left;background-color:#a3c2c2;color:black";>&nbsp;&nbsp;<?php echo $title;?></td>
            </tr>
			   <tr class="entryTable">
             <td  style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2; color:black;">&nbsp;&nbsp;Complainer Name</td>
             <td  style="font-size:15px; height:30px;width:500px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $custname;?></td>
            </tr>
			<tr class="entryTable">
             <td  style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2;color:black">&nbsp;&nbsp;Complainer Mobile No.</td>
             <td  style="font-size:15px; height:30px;width:500px;text-align:left;background-color:#a3c2c2;color:black";>&nbsp;&nbsp;<?php echo '0'.$custmobile;?></td>
            </tr>
            <tr class="entryTable">
                <td  style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2; color:black;">&nbsp;&nbsp;Complainer Address</td>
             	<td width="200" style="font-size:15px; height:30px;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $custaddress;?></td>
			</tr>
			  <tr class="entryTable">
                <td  style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2;color:black">&nbsp;&nbsp;Complain Description</td>
               <td width="200" style="font-size:15px; height:30px;background-color:#a3c2c2;color:black";>&nbsp;&nbsp;<?php echo $desc;?></td>
            </tr>
				   <tr class="entryTable">
             <td  style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2; color:black;">&nbsp;&nbsp;Status</td>
             <td  style="font-size:15px; height:30px;width:500px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php if($status=="Open"){echo "Pending";}else{echo $status;} ?></td>
            </tr>
			<tr class="entryTable">
             <td  style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2;color:black">&nbsp;&nbsp;Date of Creation</td>
             <td  style="font-size:15px; height:30px;width:500px;text-align:left;background-color:#a3c2c2;color:black";>&nbsp;&nbsp;<?php echo $createdate;?></td>
            </tr>
			<?php if($status=="Open" || $status=="Working"){?>
		<tr class="entryTable">
             <td  style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2; color:black;">&nbsp;&nbsp;Possible Slution Date</td>
             <td  style="font-size:15px; height:30px;width:500px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $closedate;?></td>
            </tr>
			<?php }?>
			<?php if($status=="Closed"){?>
		<tr class="entryTable">
             <td  style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2; color:black;">&nbsp;&nbsp;Date of Closed</td>
             <td  style="font-size:15px; height:30px;width:500px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $closedate;?></td>
            </tr>
			<?php }?>
			<?php if($status=="Open" || $status=="Working"){?>
					<tr class="entryTable">
             <td  style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2;color:black">&nbsp;&nbsp;Complain Assign To</td>
             <td  style="font-size:15px; height:30px;width:500px;text-align:left;background-color:#a3c2c2;color:black";>&nbsp;&nbsp;<?php echo $engname;?></td>
            </tr>
			<?php }?>
			<?php if($status=="Closed"){?>
					<tr class="entryTable">
             <td  style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2;color:black">&nbsp;&nbsp;Complain Closed By</td>
             <td  style="font-size:15px; height:30px;width:500px;text-align:left;background-color:#a3c2c2;color:black";>&nbsp;&nbsp;<?php echo $engname;?></td>
            </tr>
			<?php }?>
		<tr class="entryTable">
             <td  style="font-size:16px; height:30px;text-align:left;background-color:#a3c2c2;color:black">&nbsp;&nbsp;Branch Name</td>
             <td  style="font-size:15px; height:30px;width:500px;text-align:left;background-color:#a3c2c2; color:black;";>&nbsp;&nbsp;<?php echo $bname;?></td>
            </tr>


			     <tr> 
 <td colspan="2" width="100%" style="BACKGROUND-COLOR:#F0FFFF;color:white;">
			<center><input type="button" style="BACKGROUND-COLOR:#9966CC;color:white;" value="Print" onclick="window.print()"></input></center>
			</td>
           </tr>
        </table></td>
    </tr>
  </table>
    </div>
  <script language="javascript">
function printPage(id) {
    var html="<html>";
    html+= document.getElementById(id).innerHTML;
    html+="</html>";
    var printWin = window.open('','','left=0,top=0,width=900,height=900,toolbar=0,scrollbars=0,status =0');
   
	printWin.document.write(html);
    printWin.document.close();
    printWin.focus();
    printWin.print();
    printWin.close();
}
</script>
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
