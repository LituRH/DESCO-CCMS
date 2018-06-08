<?php 
session_start(); 
include ('library/connection.php');
?>

<html>
<head>
<title>Complain Management System - Engineer Register</title>
<?php include("include/header.php"); ?> 
 <link rel="stylesheet" href="include/style.css">
</head>
<body>
<div class="wrapper">
<div class="tops" style="background-color:#dddd;border:0px;"><img src="images/complains.jpg" width="900" height="120"></div>
<div class="ppcontent">

    <div class="errorMessage" align="center"></div>
	 <?php   include ('library/forgetPassword.php') ;?><?php echo $pass;?>
	 <form method="post" name="frmUserReg" id="frmUserReg" action="">
 	
      <br/><br/><div class="login-wrap">
		<h2>Password Recover</h2>
		<div class="form">
		<select  class="form-control" name="utype" required id="pass" required="required" style="width:255px; margin-left:48px;">
		  <option value="">Select User Type</option>
			  <option value="1">Customer &nbsp;</option>
			  <option value="2">Engineer &nbsp;</option>
		</select>
		<br/></br/>
			<input type="text" placeholder="Username" name="user" />
			<input type="text" placeholder="Email" name="email" />
			<center><input name="btnForgetPass"  class="form-control" style="height:40px;width:100px;BACKGROUND-COLOR:#9966CC;;color:white;font-size:16px;"  type="submit" value="Recover"></center>
			
		</div>
	</div>
        <script src="include   /js/index.js"></script>
      </form>
	  <div class="gap"></div>
   </div>
	  <?php include("include/footer.php"); ?> 
</div>
</body>
</html>
