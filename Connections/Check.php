<?php
include('Connection.php');
session_start();
$user_check=$_SESSION['Supervisor_StaffID'];
 
$sql = mysqli_query($db,"SELECT * FROM supervisor WHERE Supervisor_StaffID='$user_check' ");
 
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 
$login_user=$row['Supervisor_StaffID'];
$login_name = $row['Supervisor_Name'];
 
if(!isset($user_check))
{
header("Location: ../Mapping/Main.php");
}
?>