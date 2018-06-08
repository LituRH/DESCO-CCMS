<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Show Hide Elements Using Radio Buttons</title>
<?php include("include/header.php"); ?> 
<style type="text/css">
    .box{
        padding: 20px;
        display: none;
        margin-top: 20px;
        border: 1px solid #000;
    }
    .red{ background: #ff0000; }
    .green{ background: #00ff00; }
    .blue{ background: #0000ff; }
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="red"){
            $(".box").not(".red").hide();
            $(".red").show();
        }
        if($(this).attr("value")=="green"){
            $(".box").not(".green").hide();
            $(".green").show();
        }
        if($(this).attr("value")=="blue"){
            $(".box").not(".blue").hide();
            $(".blue").show();
        }
    });
});
</script>
</head>
<body>
    <div>
        <label><input type="radio" name="colorRadio" value="red"> red</label>
        <label><input type="radio" name="colorRadio" value="green"> green</label>
        <label><input type="radio" name="colorRadio" value="blue"> blue</label>
    </div>
    <div class="red box"><div class="pcontent">

    <div class="errorMessage" align="center"></div>
	 <form method="post" name="frmUserReg" id="frmUserReg" action="">
  
      <table width="500px">
	  		<?php include ("library/custRegistration.php");?>
			<tr>
			<th colspan="2" height="40px">Registration Form (Customer)</th>
			</tr>
			<tr>
				<td width="190px" style="padding:10px;">Name</td>
				<td><input name="name" type="text"   required placeholder="Enter Full Name" value="<?php echo $name;?>" /></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input name="u_name" type="text"  required placeholder="User Name"  value="<?php echo $u_name;?>" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input name="password" type="password" class="form-control" id="CustomerName"  required placeholder="Enter Min 6 Digit Password"   value="<?php echo $password;?>" /></td>
            </td>
			</tr>
			<tr>
			<td>Retype Password</td>
				<td><input name="cpassword" type="password" class="form-control" id="CustomerName"  required placeholder="Retype Password"   value="<?php echo $cpassword;?>" /></td>
            </td>
				
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea name="address" cols="10" rows="3" class="form-control" required placeholder="Enter Your Address" id="Address" style="width:200px;height:80px;"><?php echo $address;?></textarea></td>
            </td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><input name="mobile" type="text"   required placeholder="Enter Your Mobile No."  value="<?php echo $mobile;?>" /></td>
            </td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input name="email" type="text"   required placeholder="Enter Your Mobile No."  value="<?php echo $mobile;?>" /></td>
            </tr>
			<tr>
				<td>Connection</td>
				<td><select class="form-control" id="selectt" name="type" required>
				<option value="">Select Connection Type</option>
				<option value="LT">LT Connection</option>
				<option value="ST">ST Connection</option>
				</select></td>
		
			</tr>
			<tr>
				<td>Meter No</td>
				<td><input name="meter" type="text"  required placeholder="Enter Your Meter No." value="<?php echo $meter;?>" /></td>
            
			</tr>
			<tr>
				<td>Branch</td>
				<td><select class="form-control" id="selectt" width="150px" name="branch" id="pass" required >
		<option value="">Select Branch Name</option>
		<?php 
		$result ="SELECT *FROM tbl_branch ";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
           {	
			$bcode=$row['branch_code'];
			$bname=$row['branch_name'];	
	    	echo "<option value='$bcode'>$bname</option>";
		}
			?>
		</select></td>
			</tr>
			
		<tr>
		<td></td>
		<td><input name="btnSave"  style="BACKGROUND-COLOR:#9966CC;color:white;font-size:16px; float:center;"  type="submit" value="Submit"> </td>
	  </td>
		</tr>
	  </table>
		
      </form>
   </div>
	  <?php include("include/footer.php"); ?> </div>
    <div class="green box">You have selected <strong>green radio button</strong> so i am here</div>
    <div class="blue box">You have selected <strong>blue radio button</strong> so i am here</div>
</body>
</html>                                		