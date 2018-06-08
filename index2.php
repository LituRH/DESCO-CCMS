<?php 
include ('library/connection.php');
session_start();
if(!isset($_SESSION['user'])){
	$active = "";
}else{
if($_SESSION['user'] == "administrator"){
	$active= "(Active)";
}else{
	$active = "";
}
}
?>
<html>
<head>
<title>Complain Management System - Customer Menu</title>
<?php include("include/header.php"); ?> 
</head>
<body>
<br/><br/>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox" style="background-color:#dddd;>
  <tr>
      <td colspan="2"><img src="images/complains.jpg" width="900" height="120"></td>
  </tr>
  
  <tr>
   
	
	
	
    <td width="720" valign="top" class="contentArea" style="background-color:#F0FFFF;padding-left:210px;">
		<table width="100%" border="0" cellspacing="0" cellpadding="20">
			<tr>
				<td>
	                               <! ***************Main Content Start ****************>
								   


		
	
									<table width="500px;" border="0" cellpadding="0" cellspacing="0" class="text"> 
	 <td   style="">  <?php   include ('library/login.php') ;?>		</td>
	
	
	  
    </tr>
	</table>   

				<form action="" method="post"  name="frmListUser" id="frmListUser" style="background-color:#F0FFFF;">
  <table width="500" border="0" cellpadding="0" cellspacing="0"  class="entryTable" align="center" >
      <td class="contentArea" style="background-color:#F0FFFF;"><div class="errorMessage" align="center"></div>

        <table width="70%" border="0" cellpadding="5" cellspacing="0" class="text">
<br>
					   	 <tr>
		
		<td><select  class="form-control" name="utype" required id="pass" required="required" style="width:270px;">
		  <option value="">Select User Type</option>
			  <option value="1">Administrator &nbsp;</option>
			  <option value="3">Customer &nbsp;</option>
			  <option value="4">Engineer &nbsp;</option>
		</select></td>
			</tr>
            <tr>
                         
              <td width="30%"><input name="user" type="text" required placeholder="Enter Username" style="width:270px;" class="form-control" id="CustomerName"   value="<?php echo $user;?>" /></td>
            </tr>

			<tr>
                   
              <td><input name="pass" type="password"  class="form-control" placeholder="Enter Password" style="width:270px;" required id="CustomerName" value="<?php echo $pass;?>" /></td>
            </tr>

	
	
           		 <table width="650px;" border="0" cellpadding="0" cellspacing="0" class="text" style="padding-right:0px;">                      
	<tr id="entryTableHeader1" style="height:20px;background-color:#F0FFFF;">

     <br><td   style="font-size:17px;text-align:center;background-color:#F0FFFF;float:left;padding-left:6px;"> <input name="login"  class="form-control" style="height:40px;width:100px;BACKGROUND-COLOR:#9966CC;;color:white;font-size:16px;"  type="submit" value="Login"> </td>
	 </tr>
	 <tr>
	 <td style="float:left;""><br><br><a href="registerType.php" style="text-decoration:none;color:black;;font-size:14px;padding-right:20px;font-weight:bold;">&nbsp;&nbsp;&nbsp;New User?
		&nbsp;<a href="forgetPass.php" style="text-decoration:none;color:black;;font-size:14px;font-weight:bold;">&nbsp;&nbsp;&nbsp;Forget Password?</td>

    </tr>
			
 
	</table>
	
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
