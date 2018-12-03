<?php
$mysqli = new mysqli("localhost","root","","mapping");

if(isset($_POST['submit']))
{
	$file = $_FILES['file']['tmp_name'];
	$handle = fopen($file,"r");
	$replace = 0;
	$new = 0;
	$unabletoinsert = 0;
	
	$handle = fopen($file,"r");
	while(($fileop = fgetcsv($handle,1000,";"))!== false)
	{
		$lectname = $fileop[0];
		$lectdept = $fileop[1];
		$lectphone = $fileop[2];
		$status = $fileop[3];
		$id = $fileop[4];
		$sta = $fileop[5];
		
		 $checksame = $mysqli->query("SELECT Supervisor_StaffID FROM supervisor WHERE Supervisor_StaffID='$id'");
		$row = mysqli_num_rows($checksame);
		
		if($row >= 1)
		{
				$sql1 = $mysqli->query('UPDATE student SET Supervisor_Name="'.$lectname.'",Supervisor_Department="'.$lectdept.'",Supervisor_Phone="'.$lectphone.'",Supervisor_St="'.$status.'",Supervisor_StaffID="'.$id.'",Supervisor_Status="'.$sta.'" WHERE Supervisor_StaffID="'.$id.'"');
				//if($sql1)
					$replace += 1;
				
		}
			else
		{
				$sql = $mysqli->query('INSERT INTO supervisor(Supervisor_Name,Supervisor_Department,Supervisor_Phone,Supervisor_St,Supervisor_StaffID,Supervisor_Status) VALUES ("'.$lectname.'","'.$lectdept.'","'.$lectphone.'","'.$status.'","'.$id.'","'.$sta.'")');
				//if($sql)
					$new += 1;
				
		}
	}
	echo "<script type='text/javascript'>alert('$new New Data Inserted. \\n$replace Old Data Updated.');</script>";
		include('View_Supervisor.php');
}
		
?>