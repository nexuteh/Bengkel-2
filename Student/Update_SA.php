<?php
// including the database connection file
include("../Connections/Check.php");
 
if(isset($_POST['update']))
{ 
 
 	$sql = "SELECT * FROM student WHERE Student_Matric = '".$_POST['Student_Matric']."'";
	$sql2 = "SELECT * FROM company WHERE Company_Name = '".$_POST['cname']."'";
	$result = $db->query($sql);
	$result2 = $db->query($sql2);

   $row = mysqli_fetch_array($result);
   $row2 = mysqli_fetch_array($result2); 
   
  $id = $_POST['Stud_AttachmentID'];
  $company_name = $row2['Company_Id']; 
  $student_matric = $row['Student_Id'];
  $status = $_POST['Intern_Status'];
  $start = $_POST['Start_Date'];
  $finish = $_POST['Finish_Date'];
 
	
    
        //updating the table
        $result = mysqli_query($db, "UPDATE stud_attachment SET Company_Id='$company_name',Student_Id='$student_matric', Intern_Status='$status', Start_Date='$start', Finish_Date='$finish' WHERE Stud_AttachmentID=$id");
        
		echo "<script>
		  alert('Successfully Updated Student Attachment');
		  window.location.href='View_SA2017.php';
		  </script>";
    
}
?>
<?php
//getting id from url
$id = $_GET['Stud_AttachmentID'];
 
//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT stud_attachment.Stud_AttachmentID,stud_attachment.Company_Id,stud_attachment.Student_Id,student.Student_Matric,company.Company_Name,stud_attachment.Intern_Status,stud_attachment.Start_Date,stud_attachment.Finish_Date FROM `stud_attachment`INNER JOIN `student` ON stud_attachment.Student_Id = student.Student_Id INNER JOIN `company` ON stud_attachment.Company_Id=company.Company_Id WHERE Stud_AttachmentID=$id");
 
while($res = mysqli_fetch_array($result))
{
   $id = $res['Stud_AttachmentID'];
   $company_id = $res['Company_Id'];   
   $company_name = $res['Company_Name']; 
   $student_id = $res['Student_Id'];
   $student_matric = $res['Student_Matric'];
   $status = $res['Intern_Status'];
   $start = $res['Start_Date'];
   $finish = $res['Finish_Date'];
    
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Update Student Attachment</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
<div class="sidebar" data-color="purple" data-image="../icon/sidebar.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <h6 class="text-center"><strong><?php echo $login_name; ?></strong></h6>
              <h6 class="text-center"><strong>1-2017/2018</strong></h6>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="../Dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="dropdown">
                                <a href="#submenu-2" class="accordion-toggle collapsed toggle-switch" data-toggle="collapse">
                                    <i class="material-icons">people</i>
                                    <p>Student</p>
                                </a>
                                <ul class="panel-collapse collapse panel-switch" role="menu" id="submenu-2">
                                    <li>
                                        <a href="Student.php">Add Student</a>
                                    </li>
                                    <li>
                                        <a href="View_Student.php">View Student</a>
                                    </li>
                                </ul>
                            </li>
                    <li class="dropdown">
                                <a href="#submenu-3" class="accordion-toggle collapsed toggle-switch" data-toggle="collapse">
                                    <i class="material-icons">business</i>
                                    <p>Company</p>
                                </a>
                                <ul class="panel-collapse collapse panel-switch" role="menu" id="submenu-3">
                                    <li>
                                        <a href="../Company/Company.php">Add Company</a>
                                    </li>
                                    <li>
                                        <a href="../Company/View_CompanyALL.php">View Company</a>
                                    </li>
                                </ul>
                            </li>
                        <li class="dropdown">
                                <a href="#submenu-4" class="accordion-toggle collapsed toggle-switch" data-toggle="collapse">
                                    <i class="material-icons">face</i>
                                    <p>Lecturer</p>
                                </a>
                                <ul class="panel-collapse collapse panel-switch" role="menu" id="submenu-4">
                                    <li>
                                        <a href="../Lecturer/Supervisor.php">Add Lecturer</a>
                                    </li>
                                    <li>
                                        <a href="../Lecturer/View_Supervisor.php">View Lecturer</a>
                                    </li>
                                </ul>
                            </li>
                    <li>
                        <a href="../Mapping/View_Map.php">
                            <i class="material-icons">location_on</i>
                            <p>Maps</p>
                        </a>
                    </li>
                   <li class="dropdown">
                   <li class="active">
             
                                <a href="#submenu-5" class="accordion-toggle collapsed toggle-switch" data-toggle="collapse">
                                    <i class="material-icons">attachment</i>
                                    <p>Student Attachment</p>
                                </a>
                                </li>
                                <ul class="panel-collapse collapse panel-switch" role="menu" id="submenu-5">
                                    <li>
                                        <a href="../Mapping/Student_Attachment.php">Add Student Internship</a>
                                    </li>
                                    <li>
                                        <a href="view_SA2017.php">View Student Attachment</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#submenu-6" class="accordion-toggle collapsed toggle-switch" data-toggle="collapse">
                                    <i class="material-icons">folder</i>
                                    <p>Company Group</p>
                                </a>
                                <ul class="panel-collapse collapse panel-switch" role="menu" id="submenu-6">
                                    <li>
                                        <a href="../Mapping/Grouping_Company.php">Group Company</a>
                                    </li>
                                    <li>
                                        <a href="../Mapping/View_Company_Grouping.php">View Company Group</a>
                                    </li>
                                </ul>
                                <li>
                                 <a href="../Mapping/Supervisor_Attachment.php">
                                 <i class="material-icons">style</i>
                                 <p>Supervisor Attachment</p>
                                 </a>
                                </li>
                                      <li>
                        <a href="../Session/View_Session.php">
                            <i class="material-icons">schedule</i>
                            <p>Sem/Session</p>
                        </a>
                    </li>
                        </li>
                </ul>
            </div>
        </div>
<div class="main-panel">
<nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Student Attachment </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="../Dashboard.php" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Account</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../Profile.php">View Account</a>
                                    </li>
                                   
                                    <li>
                                        <a href="../Connections/Logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
</nav>
       <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Update Student Attachment</h4>
                                  
                                </div>
                                <div class="card-content">
 <form method="post" name="form1" action="Update_SA.php" form class="form-horizontal">
 <div class="row">
      <div class="form-group"><label class="control-label col-sm-3"for="Company_Id">Company Name:</label>
        <div class="col-sm-6">
          <input id="cname" type="text" name="cname" class="validate form-control" required placeholder="<?php echo $company_name; ?>" onkeyup="searchc(this.value)">
          <div id="search_cdiv">
          </div>
          </div>
          </div>
          
          
    <div class="form-group">
       <label class="control-label col-sm-3"for="Student_Matric">Student Matric No:</label>
       <div class="col-sm-6">
       <input type="text"  class="form-control" id="Student_Matric" name="Student_Matric"  value="<?php echo $student_matric; ?>">
   </div>
   </div> 
  <div class="form-group">
   <label class="control-label col-sm-3"for="Intern_Status">Student Status:</label>
    <div class="col-sm-6">
      <select class="form-control" id="Intern_Status" name="Intern_Status">
        <option>Internship</option>
        <option>Drop</option>
      </select>
    </div>
  </div>
   <div class="form-group">
       <label class="control-label col-sm-3"for="Start_Date">Start Date:</label>
       <div class="col-sm-6">
       <input type="text" class="form-control" id="Start_Date" name="Start_Date"  value="<?php echo $start; ?>">
   </div>
   </div> 
   <div class="form-group">
       <label class="control-label col-sm-3"for="Finish_Date">Finish Date:</label>
       <div class="col-sm-6">
       <input type="text" class="form-control" id="Finish_Date" name="Finish_Date"  value="<?php echo $finish; ?>">
   </div>
   </div> 
       <input type="hidden" name="Stud_AttachmentID" value=<?php echo $_GET['Stud_AttachmentID'];?>>
      <input type="submit" name="update" value="Update" class="btn btn-default" >
 </form>
                                </div>
                            </div>
                        </div>
                 
   <footer class="footer">
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">Bengkel 2 Group 1</a>, made with love for a better web
                    </p>
                </div>
            </footer>
        </div>
    </div>
    <script>
   function searchc(string){
        var xmlhttp;
        if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject("XMLHTTP");
        }
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                document.getElementById("search_cdiv").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "../Mapping/Search_Company_Name.php?s="+string, true);
        xmlhttp.send(null);
}

function setCName(string) {
    document.getElementById("cname").value = string;
    $(".cnameid").hide();
}
  </script>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>


</html>