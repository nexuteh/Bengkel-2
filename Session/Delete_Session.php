<?php
 include("../Connections/Check.php");
$id=$_REQUEST['Session_Id'];
$query = 'DELETE FROM session WHERE Session_Id="'.$id.'"'; 
$result = mysqli_query($db,$query) or die ( mysqli_error());
header("Location: View_Session.php"); 
?>