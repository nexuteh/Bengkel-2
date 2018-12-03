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
    <title>Company</title>
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
                    <li class="active">
                                <a href="#submenu-3" class="accordion-toggle collapsed toggle-switch" data-toggle="collapse">
                                    <i class="material-icons">business</i>
                                    <p>Company</p>
                                </a>
                                </li>
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
                        <a class="navbar-brand" href="#"> Company </a>
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
                                    <h4 class="title">Insert Company Detail</h4>
                                  
                                </div>
                                <div class="card-content">
<form action="AddCompany.php" method="POST" class="form-horizontal" name="form1" id="form1" data-toggle="validator">
  <div class="form-group">
    <label class="control-label col-sm-3" for="Company_Name">Company Name* :</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Company_Name" name="Company_Name" placeholder="Company Name" required>
      
    </div>
  </div>
   <div class="form-group has-feedback">
    <label class="control-label col-sm-3" for="Company_Phone">Company Phone No* :</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Company_Phone" name="Company_Phone" maxlength="11"  placeholder="Phone No." required>
       <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors">Please input the correct phone number</div>
     </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-3" for="Company_Add">Company Address* :</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Company_Add" name="Company_Add" placeholder="Address" required>
      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors">Please input the correct address</div>
     </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-3" for="Company_Posscode">Company Postcode* :</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" id="Company_Posscode" name="Company_Posscode" maxlength="5" placeholder="Postcode" required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors">Please input the correct postcode</div>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3"  for="Company_State">Company State* :</label>
    <div class="col-sm-6">
    <select class="form-control" id="Company_State" name="Company_State">
     <option selected>Choose State</option>
    <option value="MELAKA">MELAKA</option>
    <option value="PERAK">PERAK</option>
    <option value="JOHOR">JOHOR</option>
    <option value="N.SEMBILAN">N.SEMBILAN</option>
    <option value="SELANGOR">SELANGOR</option>
    <option value="KUALA LUMPUR">KUALA LUMPUR</option>
    <option value="PULAU PINANG">PULAU PINANG</option>
    <option value="KEDAH">KEDAH</option>
    <option value="PERLIS">PERLIS</option>
    <option value="PAHANG">PAHANG</option>
    <option value="TERENGGANU">TERENGGANU</option>
    <option value="KELANTAN">KELANTAN</option>
    <option value="SABAH">SABAH</option>
    <option value="SARAWAK">SARAWAK</option>
 </select>
  </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="Submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
<h4 class="title">Import CSV File</h4>
<form action="import_company.php" method="post" enctype="multipart/form-data" >
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