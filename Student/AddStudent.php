<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include("../Connections/Connection.php");
 
if(isset($_POST['Submit'])) {    
    $name = $_POST['Student_Name'];
    $matric = $_POST['Student_Matric'];
    $course = $_POST['Student_Course'];
	$year = $_POST['Student_Year'];
    $semester = $_POST['semester_session'];
	$phone = $_POST['Student_Phone'];
	

        // if all the fields are filled (not empty)             
        //insert data to database
		$sql = 'INSERT INTO student(Student_Name,Student_Matric,Student_Course,Student_Year,semester_session,Student_Phone) VALUES("'.$name.'","'.$matric.'","'.$course.'","'.$year.'","'.$semester.'","'.$phone.'")';
        $result = mysqli_query($db, $sql);
		
			echo "<script>
		  alert('Successfully Add New Student');
		  window.location.href='View_Student.php';
		  </script>";
      

}
?>
</body>
</html>