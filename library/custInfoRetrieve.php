	 <?php 
		$result ="SELECT * FROM tbl_customer where user_name='$id'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$custname=$row['cust_name'];
			$custid=$row['cust_id'];
			$custmobile=$row['mobile'];
			$custaddress=$row['address'];
			$uname=$row['user_name'];
			$pass=$row['password'];
			$email=$row['email'];
			$type=$row['conn_type'];
			$meter=$row['meter_id'];
			$branch=$row['branch_name'];
		}

		$result ="SELECT * FROM tbl_branch where branch_code='$branch'";
		$tt=mysql_query($result);
		
		while($row = mysql_fetch_array($tt))
        {
			$bname=$row['branch_name'];
		}
        ?>