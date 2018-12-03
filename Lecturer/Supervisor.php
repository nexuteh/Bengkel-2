<?php
 include("../Connections/Check.php"); 
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Supervisor</title>
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
                                        <a href="../Student/Student.php">Add Student</a>
                                    </li>
                                    <li>
                                        <a href="../Student/View_Student.php">View Student</a>
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
                        <li class="active">
                                <a href="#submenu-4" class="accordion-toggle collapsed toggle-switch" data-toggle="collapse">
                                    <i class="material-icons">face</i>
                                    <p>Lecturer</p>
                                </a>
                                </li>
                                <ul class="panel-collapse collapse panel-switch" role="menu" id="submenu-4">
                                    <li>
                                        <a href="Supervisor.php">Add Lecturer</a>
                                    </li>
                                    <li>
                                        <a href="View_Supervisor.php">View Lecturer</a>
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
                                <a href="#submenu-5" class="accordion-toggle collapsed toggle-switch" data-toggle="collapse">
                                    <i class="material-icons">attachment</i>
                                    <p>Student Attachment</p>
                                </a>
                                <ul class="panel-collapse collapse panel-switch" role="menu" id="submenu-5">
                                    <li>
                                        <a href="../Mapping/Student_Attachment.php">Add Student Internship</a>
                                    </li>
                                    <li>
                                        <a href="../Student/view_SA2017.php">View Student Attachment</a>
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
                        <a class="navbar-brand" href="#"> Lecturer </a>
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
                                    <h4 class="title">Insert Lecturer Detail</h4>
                                  
                                </div>
                                <div class="card-content">
 <form action="AddSupervisor.php" method="POST" class="form-horizontal" name="form1">
  <div class="form-group">
    <label class="control-label col-sm-3" for="Supervisor_Name">Lecturer Name*:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Supervisor_Name" name="Supervisor_Name" required>
   </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-3" for="Supervisor_Department">Lecturer Department*:</label>
    <div class="col-sm-6">
      <select class="form-control" id="Supervisor_Department" name="Supervisor_Department">
        <option>Department Of Interactive Media</option>
        <option>Department Of Software Engineering</option>
        <option>Department Of Intelligent Computing and Analytics</option>
        <option>Department Of Computer System and Communications</option>
      </select>
  </div>
  </div>
   <div class="form-group has-feedback">
    <label class="control-label col-sm-3" for="Supervisor_Phone">Lecturer Phone No*:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" maxlength="11" id="Supervisor_Phone" name="Supervisor_Phone" required>
       <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors">Please input the correct phone number</div>
    </div>
  </div>
   <div class="form-group">
     <label class="control-label col-sm-3"  for="Supervisor_St">Lecturer Role*:</label>
    <div class="col-sm-6">
      <select class="form-control" id="Supervisor_St" name="Supervisor_St">
        <option>AJK</option>
        <option>Supervisor</option>
      </select>
    </div>
</div>
  <div class="form-group">
    <label class="control-label col-sm-3"  for="Supervisor_Status">Lecturer Status*:</label>
    <div class="col-sm-6">
    <select class="form-control" id="Supervisor_Status" name="Supervisor_Status" >
        <option>Active</option>
        <option>Non Active</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="Supervisor_StaffID">Lecturer StaffID*:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" maxlength="5" id="Supervisor_StaffID" name="Supervisor_StaffID" required>
       <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors">Please input the correct staff id</div>
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-3" for="Supervisor_Password">Lecturer Password:</label>
    <div class="col-sm-6">
      <input type="password" class="form-control"  data-minlength="6" id="Supervisor_Password" name="Supervisor_Password">
      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors">Minimum 6 length</div>
    </div>
   </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="Supervisor_Comfirm"> Lecturer Confirm Password:</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" data-match="#Supervisor_Password" data-match-error="Whoops, these don't match"  id="Supervisor_Comfirm" name="Supervisor_Comfirm">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" id="submit" name="Submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>

<h4 class="title">Import CSV File</h4>
<form action="import_supervisor.php" method="post" enctype="multipart/form-data" >
<input type="file" name="file"/> 
<div class="col-sm-offset-2 col-sm-10">
<input type="submit" name="submit" class="btn btn-success" value="Import Excel" />
</div>
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
<script type="text/javascript">
$("#Supervisor_Password").password();
</script>
<script type="text/javascript">
$("#Supervisor_Comfirm").password();
</script>
<script type="text/javascript">
    $(function () {
        $("#submit").click(function () {
            var password = $("#Supervisor_Password").val();
            var confirmPassword = $("#Supervisor_Comfirm").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>