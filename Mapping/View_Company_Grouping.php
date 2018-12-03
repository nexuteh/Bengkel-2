<?php
require_once('../Connections/Check.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Student</title>
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
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css"/>
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style2.css">
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>﻿
	<script type="text/javascript" language="javascript" src=		"https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../icon/sidebar.jpg">
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
                   
                    <li class="dropdown"> <li class="active">
                                <a href="#submenu-6" class="accordion-toggle collapsed toggle-switch" data-toggle="collapse">
                                    <i class="material-icons">folder</i>
                                    <p>Company Group</p>
                                </a>
                                </li>
                                <ul class="panel-collapse collapse panel-switch" role="menu" id="submenu-6">
                                    <li>
                                        <a href="../Mapping/Grouping_Company.php">Group Company</a>
                                    </li>
                                    <li>
                                        <a href="../Mapping/View_Company_Grouping.php">View Company Group</a>
                                    </li>
                                </ul>
					</li>
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
                        <a class="navbar-brand" href="#"> Profile </a>
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
                                    <h4 class="title">View Company Group Records</h4>
                                </div>
  <nav class="navbar navbar-default">
            <div class="container-fluid">
         <form method="post" role="form" class="form-inline" action="Grouping_Company.php">
                		<button type="submit" class="btn btn-info navbar-btn pull-right">Insert New Group</button>
                </div>
          </form>
        </nav>


         <table id="group_data" class="table table-striped table-bordered">
        <thead>
        <tr>
                              <td>Group</td>
                              <td>Company Name</td>
                              <td>Company State</td>
                              <td>No of Student</td>
                              <td>Function</td>

        </tr>
        </thead>
		<tbody>
           <?php
         $query = "SELECT count(stud_attachment.Company_Id) AS NUMBER,sv_assignment.Group_Id,company.Company_Id,company.Company_Name,company.Company_State FROM sv_assignment LEFT JOIN supervisor ON sv_assignment.Supervisor_Id=supervisor.Supervisor_Id LEFT JOIN company ON company.Group_Id=sv_assignment.Group_id LEFT JOIN stud_attachment ON stud_attachment.Company_Id=company.Company_Id WHERE company.Group_Id != 0 GROUP BY company.Company_Id";
         $result = mysqli_query($db,$query);

					while($row = mysqli_fetch_array($result))
				   	{
  						$groupid = $row['Group_Id'];
              $companyid = $row['Company_Id'];
              $companyname = $row['Company_Name'];
              $companystate = $row['Company_State'];
              $noofstudent = $row['NUMBER'];

              echo '<td>';
              echo 'G'.$groupid;
              echo '</td><td>';
              echo $companyname;
			        echo '</td><td>';
              echo $companystate;
              echo '</td><td>';
              echo $noofstudent;
              echo '</td><td>';
						  echo '<a class="btn btn-danger btn-sm" style="padding-left:19px;padding-right:19px" href="Delete_Grouping.php?Group_Id='.$groupid.'&Company_Id='.$companyid.'" onclick="return confirm(\'Confirm Ungroup?\')">Ungroup</a>';
					    echo '</td></tr>';
					   }

      ?>
		</tbody>
        </table>
        					  </div>
                            </div>
                        </div>
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
              </footer>
            </div>

        </div>
    </div>
</body>
<!--   Core JS Files   -->

<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>

<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>


</html>
<script>
$(document).ready(function(){
  var dtable = $('#group_data').DataTable({
  		dom: 'Bfrtip',
  		 buttons: [
              'copyHtml5',
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'
          ]
  	});

  $('.filter').on('keyup change', function () {
          //clear global search value
          dtable.search('');
          dtable.column($(this).data('columnIndex')).search(this.value).draw();
  });

  $( ".dataTables_filter input" ).on( 'keyup change',function() {
         //clear all column search values
          dtable.columns().search('');
         //clear all form input values
         $('.filter').val('');
  });

});

</script>
