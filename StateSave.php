<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include("Connections/Connection.php");
 
if(isset($_POST['Submit'])) { 
	$staff = $_POST['Supervisor_StaffID'];   
    $s1 = $_POST['State1'];
    $s2 = $_POST['State2'];
    $s3 = $_POST['State3'];
$sql = 'UPDATE supervisor SET State1 = "'.$s1.'",State2 = "'.$s2.'",State3 = "'.$s3.'" WHERE Supervisor_StaffID ="'.$staff.'"';
		
        $result = mysqli_query($db, $sql);
		
		echo "<script>
alert('Successfully Add State Preference');
window.location.href='ViewStateSupervisor.php?Supervisor_StaffID=$staff';
</script>";
    
}
?>
</body>
</html>