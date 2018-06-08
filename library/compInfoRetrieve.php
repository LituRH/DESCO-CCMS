<?php 
		$result ="SELECT * FROM tbl_complain where comp_id='$compid'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
		$custids=$row['comp_id'];
			$custid=$row['cust_id'];
			$engid=$row['eng_id'];
			$title=$row['comp_title'];
			$date=$row['create_date'];
			$status=$row['comp_status'];
			$desc=$row['comp_desc'];
			$status=$row['comp_status'];
			$createdate=$row['create_date'];
			$closedate=$row['close_date'];
			
		}
		$result ="SELECT * FROM tbl_customer where cust_id='$custid'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$custname=$row['cust_name'];
			$custids=$row['cust_id'];
			$custmobile=$row['mobile'];
			$custaddress=$row['address'];
			$branch=$row['branch_name'];
			}
			if($engid=="0")
			{$engname="Not Assigned Till Now";}
			else
			{
			$result ="SELECT * FROM tbl_engineer where eng_id='$engid'";
			$tt=mysql_query($result);
			while($row = mysql_fetch_array($tt))
			{
			$engname=$row['eng_name'];
			$engdeg=$row['designation'];
			}
			}
		$result ="SELECT * FROM tbl_branch where branch_code='$branch'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$bname=$row['branch_name'];
		}
        ?>