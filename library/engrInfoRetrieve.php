	 <?php 
		$result ="SELECT * FROM tbl_engineer where user_name='$id'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$eid=$row['eng_id'];
			$ename=$row['eng_name'];
			$mobile=$row['mobile'];
			$address=$row['address'];
			$uname=$row['user_name'];
			$pass=$row['password'];
			$email=$row['email'];
			$desig=$row['designation'];
			$jdate=$row['join_date'];
			$branch=$row['branch_name'];
		}

		$result ="SELECT * FROM tbl_branch where branch_code='$branch'";
		$tt=mysql_query($result);
		
		while($row = mysql_fetch_array($tt))
        {
			$bname=$row['branch_name'];
		}
        ?>