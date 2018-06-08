<?php 
session_start(); 
include ('library/connection.php');
?>
<html>
<head>
<title>DESCO Complain Management System- Login</title>
<?php include("include/header.php"); ?> 
</head>
<body>
<br/>
<br/>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox" style="background-color:white;">
 <tr> 
  <td><img src="images/complains.jpg" width="900" height="120"></td>
 </tr>
 <tr> 
  <td valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="20">
    <tr> 
     <td class="contentArea" style="background-color:#2175bc;"> <form method="post" name="frmLogin" id="frmLogin">
       <center> <table width="660px;" border="0" cellpadding="2" cellspacing="1" class="text">                      
	<tr id="entryTableHeader1" style="height:35px; ">
      <td   style="font-size:17px;text-align:center;"> Customer Must Need To Login For Assign His Complain. </td>
	  
    </tr>
	</table></center><br>
       <table width="400" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#336699" class="entryTable" style="background-color:green;">
        <tr id="entryTableHeader1"> 
         <td style=" font-size:18px;text-align:center;"> Login Form </td>
        </tr>
        <?php   include ('library/login.php') ;?>
		
        <tr> 
         <td class="contentArea" style="background-color:white;"> 
		 <div class="errorMessage" align="center"></div>

		  <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
           <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           <tr class="text"> 
            <td width="100" align="right" style=" font-size:15px;">User Name</td>
            <td width="10" align="center">:</td>
            <td><input name="user" type="text" class="box" required placeholder="Enter Your Username" style=" height:25px;" id="txtUserName"  size="30" maxlength="40" value="<?php echo $user;?>"></td>
           </tr>
           <tr>
             <td align="right" style=" font-size:15px;">Password</td>
             <td align="center">:</td>
             <td><input name="pass" type="password" placeholder="Enter Password" required style=" height:25px;" class="box" id="txtPassword" size="30" maxlength="40" value="<?php echo $pass;?>"></td>
           </tr>
		             <tr> 
            <td width="100" align="right" style=" font-size:15px;">User Type </td>
            <td width="10" align="center">:</td>
            <td><label>
              <select name="utype" class="box" required style=" height:25px;">
			  <option value="">&nbsp;&nbsp; Select User Type</option>
			  <option value="1">&nbsp;&nbsp; Administrator &nbsp;</option>
			  <option value="3">&nbsp;&nbsp; Customer &nbsp;</option>
			  <option value="4">&nbsp;&nbsp; Engineer &nbsp;</option>
              </select>
              </label></td>
           </tr>
           <tr>
             <td colspan="2">&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td colspan="2">&nbsp;</td>
             <td><div align="right" style=" font-size:15px;">New User?  &nbsp;&nbsp;<a href="registerType.php">Register Here</a> </div></td>
           </tr>
              <tr>
             <td colspan="2">&nbsp;</td>
             <td><div align="right" style=" font-size:15px;">Forget Password?   &nbsp;&nbsp;&nbsp;&nbsp;<a href="forgetPass.php">Click Here</a> </div></td>
           </tr>
           <tr> 
            <td colspan="2">&nbsp;</td>
            <td><input name="login" type="submit" id="btnLogin" value=" Login Now " style="font-size:14px;color:#0066FF;padding:5px 8px;"></td>
           </tr>
          </table></td>
        </tr>
       </table>
       <p>&nbsp;</p>
      </form></td>
    </tr>
   </table></td>
 </tr>
</table>
<?php include("include/footer.php"); ?> 
</body>
</html>
