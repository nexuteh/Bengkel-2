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
		$studentname = $fileop[0];
		$studentmatric = $fileop[1];
		$studentcourse = $fileop[2];
		$studentsession = $fileop[3];
		$studentphone = $fileop[4];
		
	    $checksame = $mysqli->query("SELECT Student_Matric FROM student WHERE Student_Matric='$studentmatric'");
		$row = mysqli_num_rows($checksame);
		
		if($row >= 1)
		{
				$sql = $mysqli->query('UPDATE student SET Student_Name="'.$studentname.'",Student_Matric="'.$studentmatric.'",Student_Course="'.$studentcourse.'",semester_session="'.$studentsession.'",Student_Phone="'.$studentphone.'" WHERE Student_Matric="'.$studentmatric.'"');
				if($sql)
					$replace += 1;
				
		}
			else
		{
				$sql = $mysqli->query('INSERT INTO student(Student_Name,Student_Matric,Student_Course,semester_session,Student_Phone) VALUES ("'.$studentname.'","'.$studentmatric.'","'.$studentcourse.'","'.$studentsession.'","'.$studentphone.'")');
				if($sql)
					$new += 1;
				
		}
	}
	echo "<script type='text/javascript'>alert('$new New Data Inserted. \\n$replace Old Data Updated.');</script>";
		include('View_Student.php');
}
?>