<?php
session_start();
require_once('../Connections/Connection.php');

$_POST['name'] = str_replace(".","'",$_POST['name']);
$sql = "SELECT * FROM student WHERE student_name = '".$_POST['name']."'";
$sql2 = "SELECT * FROM company WHERE company_name = '".$_POST['cname']."'";
$result = $db->query($sql);
$result2 = $db->query($sql2);

$row = mysqli_fetch_array($result);
$row2 = mysqli_fetch_array($result2);

$student_id = $row['Student_Id'];
$company_id = $row2['Company_Id'];
$Intern_Status = $db->escape_string($_POST['Intern_Status']);
$Start_Date = $db->escape_string($_POST['Start_Date']);
$Finish_Date = $db->escape_string($_POST['Finish_Date']);


$insertsql = "INSERT into stud_attachment VALUES (DEFAULT,'$student_id','$company_id','$Intern_Status','$Start_Date','$Finish_Date')";
$db->query($insertsql);

?>
		<script>
		alert('Successfully Attached');
        window.location.href='../Student/view_SA2017.php?success';
    </script>
<?php
		mysqli_close($db);
?>
