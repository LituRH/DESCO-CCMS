<?php 
session_start(); 
include ('library/connection.php');
?>
<html>
<head>
<?php include("include/header.php"); ?> 
<title></title>
<style>
.reveal-if-active {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
  font-size: 16px;
  -webkit-transform: scale(0.8);
          transform: scale(0.8);
  -webkit-transition: 0.5s;
  transition: 0.5s;
}
.reveal-if-active label {
  display: block;
  margin: 0 0 3px 0;
}
.reveal-if-active input[type=text] {
  width: 100%;
}
input[type="radio"]:checked ~ .reveal-if-active, input[type="checkbox"]:checked ~ .reveal-if-active {
  opacity: 1;
  max-height: 100px;
  padding: 10px 20px;
  -webkit-transform: scale(1);
          transform: scale(1);
  overflow: visible;
}

body {
  font-size: 20px;
}

* {
  box-sizing: border-box;
}
</style>
</head>
<body>
<form method="post" action="#">
  
  <h4>Which do you like more?</h4>
  <div>
    <div>
      <input type="radio" name="choice-animals" id="choice-animals-dogs" required>
      <label for="choice-animals-dogs">I like dogs more</label>
    
      <div class="reveal-if-active">
        <div class="pcontent">

    <div class="errorMessage" align="center"></div>
	 <form method="post" name="frmUserReg" id="frmUserReg" action="">
  
      <table width="500px">
	  		<?php include ("library/engrRegistration.php");?>
			<tr>
			<th colspan="2" height="40px">Registration Form (Engineer)</th>
			</tr>
			<tr>
				<td width="120px" style="padding-top:5px;">ID</td>
				<td><input name="c_id" type="text"   required placeholder="Enter Full Name" value="<?php echo $name;?>" /></td>
			</tr>
			<tr>
				<td width="100px" style="padding-top:5px;">Name</td>
				<td><input name="name" type="text"   required placeholder="Enter Full Name" value="<?php echo $name;?>" /></td>
			</tr>
			 <tr>
              <td style="padding-top:5px;">Designation</td>
			<td><select  id="selectt"name="desig"  class="form-control" required="required">
			<option value="">Select Designation</option>
			<option value="Senior Engineer">Senior Engineer</option>
			<option value="Assistant Engineer">Assistant Engineer</option>
			<option value="Sub-Assistant Engineer">Sub-Assistant Engineer</option>
			</select></td>
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
              <td>Joining Date</td>
              <td><input name="date" type="text"  class="form-control" id="CustomerName"  required placeholder="Enter Joinind Date (ex:dd-mm-yyyy)" value="<?php echo $date;?>" /></td>
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
      </div>
    </div>
    
    <div>
      <input type="radio" name="choice-animals" id="choice-animals-cats">
      <label for="choice-animals-cats">I like cats more</label>
    
      <div class="reveal-if-active">
        <label for="which-cat">Why? Cats are weird. Respond.</label>
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
      </div>
    </div>
  </div>
  <script>var FormStuff = {    init: function() {    this.applyConditionalRequired();    this.bindUIActions();  },    bindUIActions: function() {    $("input[type='radio'], input[type='checkbox']").on("change", this.applyConditionalRequired);  },    applyConditionalRequired: function() {        $(".require-if-active").each(function() {      var el = $(this);      if ($(el.data("require-pair")).is(":checked")) {        el.prop("required", true);      } else {        el.prop("required", false);      }    });      }  };FormStuff.init();</script>
  </body>
  </html>