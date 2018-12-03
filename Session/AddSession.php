<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include("../Connections/Connection.php");
 
if(isset($_POST['Submit'])) {    
   
 
   	$session = $_POST['semester_session'];   

	
        $result = mysqli_query($db, 'INSERT INTO session(semester_session) VALUES("'.$session.'")');
        
        //display success message
		echo "<script>
		  alert('Successfully Add New Session');
		  window.location.href='View_Session.php';
		  </script>";
   
   
}
?>
</body>
</html>