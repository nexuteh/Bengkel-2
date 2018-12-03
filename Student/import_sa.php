<?php
// including the database connection file
include("../Connections/Check.php");

?>
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
		$studentname = $fileop[2];
		$companyname = $fileop[5];
		$start = $fileop[13];
		$finish = $fileop[14];
		

        $result = $mysqli->query("SELECT * FROM student WHERE Student_Name = '$studentname'") ;
        $result2 = $mysqli->query("SELECT * FROM company WHERE Company_Name = '$companyname'");
		if(($result == FALSE)&& ($result2 == FALSE))
		{
			
           printf("Connect failed: %s\n", $mysqli->connect_error);
           exit();

		}
		while(($row1 = mysqli_fetch_array($result)) && ($row2 = mysqli_fetch_array($result2)))
		{
		$student_id = $row1['Student_Id'];
		$company_id = $row2['Company_Id'];
		
		
		
		 $checksame = $mysqli->query("SELECT Student_Id FROM stud_attachment WHERE Student_Id='$student_id'");
		 $row = mysqli_num_rows($checksame);
		
		if($row >= 1)
		{
				$sql = $mysqli->query("UPDATE stud_attachment SET Student_Id='$student_id',Company_Id='$company_id',Intern_Status='Internship',Start_Date='$start',Finish_Date='$finish' WHERE Student_Id='$student_id'");
				$replace += 1;
				
		}
			else
		{
				$sql = $mysqli->query("INSERT INTO stud_attachment(Student_Id,Company_Id,Intern_Status,Start_Date,Finish_Date) VALUES ('$student_id','$company_id','Internship','$start','$finish')");
				$new += 1;
				
		}
	}
	}
	   echo "<script type='text/javascript'>alert('$new New Data Inserted. \\n$replace Old Data Replaced.');</script>";
		include('view_SA2017.php');
}
		
?>