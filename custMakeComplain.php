<?php 
  include ('sessioncheck.php');
?>
<?php 
include ('library/connection.php');
$id=$_SESSION['user'];
?>
		  <?php 
		$result ="SELECT * FROM tbl_customer WHERE user_name='$id'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$custid=$row[0];
			$cust_name=$row[1];
			$address=$row[4];
			$mobile=$row[5];
			$conn=$row[7];
			$meter=$row[8];
			$bcode=$row[9];
		 }	 
		 ?> 
		 		  <?php 
		$result ="SELECT * FROM tbl_branch WHERE branch_code='$bcode'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$bname=$row[2];
		 }
	 
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
    <td width="20%" valign="top" class="navArea" style="background-color: #dddd";><p>&nbsp;</p>
		<?php include("include/menuCust.php"); ?> 
	</td>
	
	
	
    <td width="720" valign="top" class="contentArea" style="background-color:#F0FFFF;">
		<table width="100%" border="0" cellspacing="0" cellpadding="20">
			<tr>
				<td>
	                               <! ***************Main Content Start ****************>
								   
	<center> <table width="662px;" border="0" cellpadding="0" cellspacing="0" class="text">                      
	<tr id="entryTableHeader1" style="height:30px; ">

      <td   style="font-size:17px;text-align:center;BACKGROUND-COLOR:#9966CC;"> Customer Complain Form </td>
	 <?php  include ("library/makeComplains.php");	?>
	  
    </tr>	</table></center> 
								   
	
				<form action="" method="post"  name="frmListUser" id="frmListUser"  style="background-color:#F0FFFF;">
  <table width="660" border="0" align="center" cellpadding="0" cellspacing="1" style="background-color: #dddd;" class="entryTable"  >
      <td class="contentArea" style="background-color:#F0FFFF;><div class="errorMessage" align="center"></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right">
			  <input type="hidden" name="cid" value="<?php echo $cid; ?>" />
			  </div></td>
            </tr>
            <tr class="entryTable1" >
             <input name="CustomerName" type="text" readonly disabled style="background-color:#a3c2c2; float:left;color:black; font-weight: bold;" class="box1" id="CustomerName" size="32" disabled maxlength="30"  value="Date : <?php echo $date?>"/>
			 <input name="CustomerName" type="text" readonly  disabled style=" background-color:#a3c2c2;float:right; color:black;font-weight: bold;" class="box1" id="CustomerName" size="32" maxlength="32"  disabled value="Customer ID : <?php echo $custid?>" /></br></br></br>
			 
			 <input name="CustomerName" type="text" readonly  disabled style="float:left;background-color:#a3c2c2;color:black;font-weight: bold;" class="box1" id="CustomerName" size="32" disabled maxlength="30"  value="Meter No : <?php echo $meter?>" />
			 <input name="CustomerName" type="text" readonly disabled  style="float:right;background-color:#a3c2c2;color:black;font-weight: bold;" class="box1" id="CustomerName" size="32" maxlength="32"  disabled value="Name : <?php echo $cust_name?>" /></br></br> </br>
			 
			 <input name="CustomerName" type="text" readonly  disabled style="float:right; background-color:#a3c2c2; float:left;color:black;font-weight: bold;height:33px;" class="box1" id="CustomerName" size="32" disabled maxlength="30"  value="Connection Type : <?php echo $conn;?>" />
			 <input name="CustomerName" type="text" readonly  disabled style="background-color:#a3c2c2; color:black;float:right;font-weight: bold;" class="box1" id="CustomerName" size="32" maxlength="32"  disabled value="Mobile No : 0<?php echo $mobile;?>" /></br></br> </br>
			<textarea name="address" cols="20" rows="6" readonly disabled style="background-color:#a3c2c2; color:black;float:left;height:150px;font-weight: bold;width:200px;" class="box1" disabled id="txtAdd">Address:                           <?php echo $address;?></textarea></td></br></br></br></br></br></br></br></br></br></br></br>
			</tr>
			 
   
			<tr class="entryTable">

			
			<input name="CustomerName" type="text" style=" background-color:#E5E4E2; font-size:15px; text-align:center;color:black;font-weight: bold;width:600px;height:40px;"  id="CustomerName" size="77" maxlength="30" readonly disabled  value="Line Disconnect Problem/Wire Problem (Type-A)" /></br> </br>
			
			<input type="radio" name="plan" value="1"> <input name="prb1" type="text2" style=" border: 0; background-color:#F0FFFF;color:black;font-weight: bold;" readonly class="box1" id="CustomerName" size="20"  maxlength="30"  value="Service Wire Burnt For Short Circuit." /></br> </br></input>
			<input type="radio" name="plan" value="2"><input name="prb2" type="text2" style="border: 0; background-color:#F0FFFF;color:black;font-weight: bold;" readonly class="box1" id="CustomerName" size="32"  maxlength="30"  value="Service Wire Stealing." /></br> </br></input>
			<input type="radio" name="plan" value="3"><input name="prb3" type="text2" style="border: 0; background-color:#F0FFFF;color:black;font-weight: bold;" readonly class="box1" id="CustomerName" size="32"  maxlength="30"  value="Service Wire Need To Be Replaced." /></br></br></input>
			&nbsp;&nbsp;&nbsp;<input name="CustomerName" type="text" style=" background-color:#CFECEC;color:black;font-weight: bold;height:35px;text-align:center;" class="box1" id="CustomerName" size="14" maxlength="30" disabled readonly  value="Complain Details" />&nbsp;&nbsp;<br>
			&nbsp;&nbsp;&nbsp;<textarea name="descF" cols="73" rows="3"  placeholder="<?php echo $msg1;?>" style="background-color:white;color:black;font-weight: bold;" class="box1" id="txtAdd"><?php echo $descF;?></textarea></br></br>
			</tr>
				<tr class="entryTable">
				<input name="CustomerName" type="text" style=" background-color:#E5E4E2; font-size:15px; text-align:center;color:black;font-weight: bold;width:600px;height:40px;"  id="CustomerName" size="77" maxlength="30" disabled  readonly  value="Meter Problem (Type-B)" /></br> </br>
			<input type="radio" name="plan" value="11" > <input name="prba" type="text2" style=" border: 0; background-color:#F0FFFF;color:black;font-weight: bold;" readonly class="box1" id="CustomerName" size="32"  maxlength="30"  value="Meter Reading Problem." /></br> </br></input>
			<input type="radio" name="plan" value="12"><input name="prbb" type="text2" style="border: 0; background-color:#F0FFFF;color:black;font-weight: bold;" readonly class="box1" id="CustomerName" size="32" maxlength="30"  value="Meter Sheal Problem." /></br> </br></input>
			<input type="radio" name="plan" value="13"><input name="prbc" type="text2" style="border: 0; background-color:#F0FFFF;color:black;font-weight: bold;" readonly class="box1" id="CustomerName" size="32" maxlength="30" d value="Meter Internal Problem." /></br></br></input>
			&nbsp;&nbsp;&nbsp;<input name="CustomerName" type="text" style="  background-color:#CFECEC;;color:black;font-weight: bold;height:35px;text-align:center;" class="box1" id="CustomerName"  maxlength="30" readonly disabled value="Complain Details" />&nbsp;&nbsp;<br>
			&nbsp;&nbsp;&nbsp;<textarea name="descS" cols="73" rows="3"  placeholder="<?php echo $msg2;?>" style="background-color:white; color:black;font-weight: bold;" class="box1" id="txtAdd"><?php echo $descS;?></textarea></br></br>
			</tr>
				<tr class="entryTable">
				<input name="CustomerName" type="text" style=" background-color:#E5E4E2; font-size:15px; text-align:center;color:black;font-weight: bold;width:600px;height:40px;"  id="CustomerName" size="77" disabled maxlength="30" readonly  value="Relocation Problems (Type-C)" /></br> </br>
			<input type="radio" name="plan" value="21" > <input name="prb21" type="text2" style="border: 0; background-color:#F0FFFF;color:black;font-weight: bold;" readonly class="box1"  id="CustomerName" size="32" maxlength="30"  value="Meter Need To Move Temporary." /></br> </br></input>
			<input type="radio" name="plan" value="22"><input name="prb22" type="text2" style="border: 0; background-color:#F0FFFF;color:black;font-weight: bold;" readonly class="box1"  id="CustomerName" size="32" maxlength="30"  value="Meter Need To Move Permanatly." /></br> </br></input>
			<input type="radio" name="plan" value="23"><input name="prb23" type="text2" style="border: 0; background-color:#F0FFFF;color:black;font-weight: bold;" readonly class="box1" id="CustomerName" size="32" maxlength="30"  value="Meter Need To Change." /></br></br></input>
			&nbsp;&nbsp;&nbsp;<input name="CustomerName" type="text" style=" background-color:#CFECEC;;color:black;font-weight: bold;height:35px;text-align:center;" class="box1" id="CustomerName" size="14" disabled maxlength="30" readonly  value="Complain Details" />&nbsp;&nbsp;<br>
			&nbsp;&nbsp;&nbsp;<textarea name="descT" cols="73" rows="3"  placeholder="<?php echo $msg3;?>" style="background-color:white; color:black;font-weight: bold;" class="box1" id="txtAdd"><?php echo $descT;?></textarea></br></br>
			</tr>
			<tr class="entryTable">
				<input name=" CustomerName" type="text" style=" background-color:#E5E4E2; font-size:15px; text-align:center;color:black;font-weight: bold;width:600px;height:40px;"  id="CustomerName" size="77" maxlength="30" readonly disabled  value="Others Problem" /></br> </br>
			&nbsp;&nbsp;&nbsp;<input name="CustomerName" readonly type="text" style="background-color:#CFECEC;;color:black;font-weight: bold;height:35px;text-align:center;" class="box1" id="CustomerName" size="14" maxlength="30" disabled readonly  value="Complain Title" />&nbsp;&nbsp;<br>
			&nbsp;&nbsp;&nbsp;<input name="prbFO" type="text3" placeholder="<?php echo $msg5;?>" style=" background-color:white;; color:black;font-weight: bold;"  class="box1" id="CustomerName" size="43" maxlength="100"  value="<?php echo $prbFO;?>" /></br></br></input>
			&nbsp;&nbsp;&nbsp;<input name="CustomerName" type="text" style="background-color:#CFECEC;color:black;font-weight: bold;height:35px;text-align:center;" class="box1" id="CustomerName" size="14" maxlength="30" readonly disabled value="Complain Details" />&nbsp;&nbsp;</font><br>
			&nbsp;&nbsp;&nbsp;<textarea name="descFO" cols="73" rows="3"  placeholder="<?php echo $msg6;?>" style="background-color:white; color:black;font-weight: bold;font-weight: bold;" class="box1" id="txtAdd"><?php echo $descFO;?></textarea></br></br>
			</tr>
     		<center> <table width="605px;" border="0" cellpadding="2" cellspacing="1" class="text">                      
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
