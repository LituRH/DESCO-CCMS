


<?php
include("include/datetime.php");
	if(isset($_POST['btnSave']))
	{
			 $descT=$_POST['descT'];
			$descS=$_POST['descS'];
			$descF=$_POST['descF'];
			$descFO=$_POST['descFO'];
			$prbFO=$_POST['prbFO'];
			$d1;
			$d2=date("n");
			$d3=date("Y");
			
		    $value=$_POST['plan'];
			$flag=1;
			$desc;
			$solution;
			if($value==1)
				$title=$_POST['prb1'];
			if($value==2)
				$title=$_POST['prb2'];
			if($value==3)
				$title=$_POST['prb3'];
			if($value==11)
				$title=$_POST['prba'];				
			if($value==12)
				$title=$_POST['prbb'];
			if($value==13)
				$title=$_POST['prbc'];
			if($value==21)
				$title=$_POST['prb21'];				
			if($value==22)
				$title=$_POST['prb22'];
			if($value==23)
				$title=$_POST['prb23'];	
				
			if($value=="")
			{
				if($prbFO=="" && $descFO=="")
				{
					echo '<center><h4><font color="red">Plz Select  at Least One Problem!!!!!</font></h4></center>';
					$flag=0;
					
				}
				else if($prbFO=="" || $descFO=="")
				{
					if($prbFO=="")
					{
						echo '<center><h4><font color="red">May Be Something wrong!!!!!</font></h4></center>';
						$msg5="Plz Write Title Here!";
						$flag=0;
					
					}
					if($descFO=="")
					{
						echo '<center><h4><font color="red">May Be Something wrong!!!!!</font></h4></center>';
						$msg6="Plz Write Description Here!";
						$descT="";
						$descS="";
						$descF="";
						$flag=0;
					
					}
				}
				else
				{
					$title=$prbFO;
					$desc=$descFO;
					$solution="Unknown";
					$d1="S";
					$flag=1;
					
				}
			}
			else if ($value!="" && ($prbFO!="" || $descFO!=""))
			{	
				echo '<center><h4><font color="red">Plz Select  only One Problem at a Time!!!!!</font></h4></center>';
				$flag=0;
			}
			else
			{
				if ($value==1 || $value==2 || $value==3)
				{
					if ($descF=="")
					{
						echo '<center><h4><font color="red">May Be Something wrong!!!!!</font></h4></center>';
						$msg1="Plz Write Description Here!";
						$descT="";
						$descS="";
						$descFO="";
						$flag=0;
					}
					else
					{
						$desc=$descF;
						$solution="Short Time";
						$d1=date("d")+3;
						if($d1>28 && $d2==2)
						{
							$d1=$d1-28;
							$d2=$d2+1;	
						}
						if($d1>31 && $d2!=2)
						{
							$d1=$d1-31;
							$d2=$d2+1;	
						}
						if($d2>12)
						{
							$d2=$d2-12;
							$d3=$d3+1;
						}
					}
				}
				if ($value==11 || $value==12 || $value==13)
				{
					if ($descS=="")
					{
						echo '<center><h4><font color="red">May Be Something wrong!!!!!</font></h4></center>';
						$msg2="Plz Write Description Here!";
						$descT="";
				
						$descF="";
						$descFO="";
						$flag=0;
					}
					else
					{
						$desc=$descS;
						$solution="Mid Time";
						$d1=date("d")+5;
						if($d1>28 && $d2==2)
						{
							$d1=$d1-28;
							$d2=$d2+1;	
						}
						if($d1>31 && $d2!=2)
						{
							$d1=$d1-31;
							$d2=$d2+1;	
						}
						if($d2>12)
						{
							$d2=$d2-12;
							$d3=$d3+1;
						}
					}
				}
				if ($value==21 || $value==22 || $value==23)
				{
					if ($descT=="")
					{
						echo '<center><h4><font color="red">May Be Something wrong!!!!!</font></h4></center>';
						$msg3="Plz Write Description Here!";
					
						$descS="";
						$descF="";
						$descFO="";
						$flag=0;
					}
					else
					{
						$desc=$descT;
						$solution="Long Time";
						$d1=date("d")+7;
						if($d1>28 && $d2==2)
						{
							$d1=$d1-28;
							$d2=$d2+1;	
						}
						if($d1>31 && $d2!=2)
						{
							$d1=$d1-31;
							$d2=$d2+1;	
						}
						if($d2>12)
						{
							$d2=$d2-12;
							$d3=$d3+1;
						}
					}
				}
				
			}
			if($flag==1){
						if($d1=="S"){$d4="Unknown";}
						else { $d4 = $d1."-".$d2."-".$d3;}
						
						 $query = "INSERT INTO tbl_complain VALUES ('', '$custid','$solution','$title','$desc','$bname','Open','NULL','$date','$d4')";
           				  mysql_query($query);
						  echo '<center><h4><font color="red">Complain Successfully Received!!!!!</font></h4></center>';
						  $_SESSION['user'] = $id;
						  $descT="";
						$descS="";
						$descF="";
						  $descFO="";
						}
						
						
						
			
			
}
		
?>