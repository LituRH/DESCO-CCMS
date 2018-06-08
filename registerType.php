<?php 
session_start(); 
include ('library/connection.php');
?>

<html>
<head>
<title>Complain Management System - Customer Register</title>
<?php include("include/header.php"); ?> 
</head>
<body>
<div class="wrapper">
<div class="tops" style="background-color:#dddd;border:0px;"><img src="images/complains.jpg" width="900" height="120"></div>
<div class="pcontent">

    <div class="errorMessage" align="center"></div>
	 <form method="post" name="frmUserReg" id="frmUserReg" action="">
  
      <table width="500px">
	  		<?php include ("library/custRegistration.php");?>
			<tr>
			<th colspan="2" height="40px">Registration Type<br>&nbsp;<a href="index.php" style="text-decoration:none;color:white;;font-size:14px;float:right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back </th>
			</tr>
			<tr>
				<td width="190px" style="padding-left:30px;"><font style="font-weight: bold;">New Customer ?&nbsp;&nbsp;&nbsp;<a href="registerCust.php" style="text-decoration:none;">Registered Here!!</a></font></td>
				
			</tr>
			<tr>
				<td style="padding-left:30px;padding-bottom:10px;"><br><font style="font-weight: bold;">New Engineer ?&nbsp;&nbsp;&nbsp;<a href="registerEngr.php" style="text-decoration:none;">Registered Here!!</a></font></td>
				
			</tr>
			
	  </table>
		
      </form>
   </div>
	  <?php include("include/footer.php"); ?> 
</div>
</body>
</html>
