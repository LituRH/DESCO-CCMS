<?php 
  include ('sessioncheck.php');
?>
<?php 
include ('library/connection.php');
$id=$_SESSION['user'];
$compid=$_REQUEST['compid'];
include("library/compInfoRetrieve.php");
$day = date("d");
  $month =  date("n");
$year = date("Y");
$datetoday = $day."/".$month."/".$year;
?>
<?php 
			$result ="SELECT * FROM tbl_report where complain_id='$compid'";
	$tt=mysql_query($result);
	while($row = mysql_fetch_array($tt))
       {
		$bill=$row['serv_charge'];
			$servname=$row['serv_name'];
			$servdesc=$row['description'];
		}?>
<?php 
			$results ="SELECT * FROM tbl_branch where branch_name='$bname'";
	$t=mysql_query($results);
	while($row = mysql_fetch_array($t))
       {
		$b_address=$row['address'];
		}?>
 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="include/report.css">
<title>Report</title>
</head>
<body>
<div class="wrapper" id="pr">
	<div class="space"></div>
	<div class="com_title">
		<div class="logo"><img src="images/logo.jpg" height="100px" width="100px"/></div>
		<div class="header"><h2>DHAKA ELECTRIC SUPPLY COMPANY(DESCO)</h2><h3><?php echo $b_address; ?></h3></div>
	</div>
	<hr>						
	<div class="rep_title">
		<h2>REPORT</h2>
	</div>
	<div class="rep_date">
		Complain ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#<?php echo $compid;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Complain Date &nbsp;&nbsp;<?php echo $createdate;?><br>
		Complainer ID&nbsp;&nbsp;&nbsp;#<?php echo $custids;?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Closed Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $closedate;?>
	</div>
	
	<div class="comp_content">
	<p style="text-align:justify;">Your Complain Have Been Closed By. If You Have Any Query or Any Complain, You Can Submit It Online By Fill-Up Our Complain Form. Thanks For Stay With DESCO...</p><br>
		<center><table height="200px" width="400px" style="font-weight:bold;" >
			<tr>
				<td width="180px">Complain Title</td>
				<td><?php echo $title;?></td>
			</tr>
			<tr>
				<td>Complainer Name</td>
				<td><?php echo $custname;?></td>
			</tr>
			<tr>
				<td>Serviced Description</td>
				<td><?php echo $servdesc ?></td>
			</tr>
			<tr>
				<td>Serviced By</td>
				<td><?php echo $engname;?></td>
			</tr>
			<tr>
				<td>Service Charge</td>
				<td><?php echo $bill.' BDT';?></td>
			</tr>
		</table></center>
	</div>
	<div class="rep_footer">
		<div class="lr1"><b><?php echo "Date : ".$datetoday; ?></b></div>
		<div class="lr2">Reported By<br><?php echo $engname;?></br><?php echo $engdeg; ?><br><?php echo $bname ;?> DESCO</div>
	</div>
	<div class="faka"></div>
	<div class="rep_button">
	<center><input type="button" value="PRINT" onclick="window.print()"></center>
	</div>
	
</div>

</script>
</body>
</html> 
