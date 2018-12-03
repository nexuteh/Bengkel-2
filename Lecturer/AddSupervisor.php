<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include("../Connections/Connection.php");
 
if(isset($_POST['Submit'])) {    
   
 
   	$name = $_POST['Supervisor_Name'];   
	$dept = $_POST['Supervisor_Department'];
	$phone = $_POST['Supervisor_Phone'];
	$role = $_POST['Supervisor_St'];
	$status = $_POST['Supervisor_Status'];
	$staffid = $_POST['Supervisor_StaffID'];
	$pass = $_POST['Supervisor_Password'];
	$comfirm = $_POST['Supervisor_Comfirm']; 
	
          
        //insert data to database
        $result = mysqli_query($db, 'INSERT INTO supervisor(Supervisor_Name,Supervisor_Department,Supervisor_Phone,Supervisor_St,Supervisor_Status,Supervisor_StaffID,Supervisor_Password,Supervisor_Comfirm) VALUES("'.$name.'","'.$dept.'","'.$phone.'","'.$role.'","'.$status.'","'.$staffid.'","'.$pass.'","'.$comfirm.'")');
		
		echo "<script>
		  alert('Successfully Add New Supervisor');
		  window.location.href='View_Supervisor.php';
		  </script>";
        
       
    
}
?>
</body>
</html>