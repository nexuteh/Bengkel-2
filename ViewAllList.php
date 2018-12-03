<?php
require_once('Connections/Connection.php');
$staffid = $_GET['Supervisor_StaffID'];
$result1 = mysqli_query($db, 'SELECT * FROM supervisor WHERE Supervisor_StaffID = "'.$staffid.'"');

while($res = mysqli_fetch_array($result1))
{
	$sid =$res['Supervisor_Id'];
	$svname = $res['Supervisor_Name'];
	$sdept = $res['Supervisor_Department'];
	$sphone = $res['Supervisor_Phone'];
	$st = $res['Supervisor_St'];
	$role = $res['Supervisor_Status'];
	$staffid = $res['Supervisor_StaffID'];


}
$query = "SELECT student.Student_Matric,student.Student_Name,student.Student_Course,student.Student_Phone,company.Company_Name,company.Company_Add,company.Company_Posscode,company.Company_State,company.Company_Phone,supervisor.Supervisor_Name,supervisor.Supervisor_Phone,supervisor.Supervisor_StaffID,stud_attachment.Start_Date,stud_attachment.Finish_Date FROM student INNER JOIN stud_attachment ON student.Student_Id = stud_attachment.Student_Id INNER JOIN company ON stud_attachment.Company_Id = company.Company_Id INNER JOIN sv_assignment ON sv_assignment.Group_Id = company.Group_Id LEFT JOIN supervisor ON sv_assignment.Supervisor_Id = supervisor.Supervisor_Id ORDER BY student.Student_Name ASC";
$result = mysqli_query($db,$query);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>View Table</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
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
	<link rel="stylesheet" href="css/style2.css">
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>﻿
	<script type="text/javascript" language="javascript" src=		"https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="icon/sidebar.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
         <div class="logo">
                 <h6 class="text-center"><strong><?php echo $svname; ?></strong></h6>
              <h6 class="text-center"><strong>1-2017/2018</strong></h6>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="SupervisorMain.php?Supervisor_StaffID=<?php echo $staffid ?>">
                            <i class="material-icons">dashboard</i>
                            <p>Profile</p>
                        </a>
                    </li>

                       <li>
                     <a href="ViewStateSupervisor.php?Supervisor_StaffID=<?php echo $staffid ?>">
                     <i class="material-icons">done</i>
                     <p>Preference State</p>
                     </a>
                    </li>

                   <li>
                     <a href="ViewStudentAttachmentMap.php?Supervisor_StaffID=<?php echo $staffid ?>">
                     <i class="material-icons">person pin</i>
                     <p>Student Attachment</p>
                     </a>
                    </li>

                     <li>
                     <a href="FeedbackView.php?Supervisor_StaffID=<?php echo $staffid ?>">
                     <i class="material-icons">bookmark</i>
                     <p>Student Feedback</p>
                     </a>
                    </li>
                   <li>
                     <a href="ViewMapSV.php?Supervisor_StaffID=<?php echo $staffid ?>">
                     <i class="material-icons">location_on</i>
                     <p>View Map</p>
                     </a>
                    </li>
                    <li class="active">
                     <a href="ViewAllList.php?Supervisor_StaffID=<?php echo $staffid ?>">
                     <i class="material-icons">face</i>
                     <p>All Internship</p>
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
                        <a class="navbar-brand" href="#">  </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Account</p>
                                </a>
                                <ul class="dropdown-menu">

                                    <li>
                                        <a href="Main.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


         <div class="content"><div class="container">

                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">View Intership Records</h4>
                                </div>
                                <div class='col-lg-12 card'>
                                  <h4> Filter </h3>
                                <?php
                                $stateArray = array('KUALA LUMPUR','PUTRAJAYA','JOHOR','KEDAH','KELANTAN','MELAKA','NEGERI SEMBILAN','PAHANG','PERAK','PERLIS','PULAU PINANG','SABAH','SARAWAK','SELANGOR','TERENGGANU');
                                while (list ($key, $val) = each ($stateArray) ) {
                                ?>
                                <div class='col-lg-3'>
                                  <div id="filters">
                                    <div class="filterblock">
                                      <input onchange="filterme()" type="checkbox" name="type" value="<?php echo $val ?>"><?php echo $val ?>
                                    </div>
                                  </div>
                                    </div>
                                <?php } ?>
  </div>

        <table id="intern_data" class="table table-striped table-bordered">
        <thead>
        <tr>
                              <td>Matric No</td>
                              <td>Student Name</td>
                              <td>Course</td>
                              <td>Student Phone No</td>
                              <td>Company Name</td>
                              <td>Address</td>
                              <td>Postcode</td>
                              <td>State</td>
                              <td>Company Phone No</td>
                              <td>Supervisor Name</td>
                              <td>Supervisor Phone No</td>
                              <td>Start Date</td>
                              <td>Finish Date</td>

        </tr>
        </thead>
		<tbody>
            <?php
        						while($row = mysqli_fetch_array($result))
        					   	{
            						$matric = $row['Student_Matric'];
									$stud_name = $row['Student_Name'];
									$course = $row['Student_Course'];
									$stud_phone = $row['Student_Phone'];
            				        $comp_name = $row['Company_Name'];
          					        $comp_add = $row['Company_Add'];
          					        $comp_poss = $row['Company_Posscode'];
          						    $comp_state = $row['Company_State'];
									$comp_phone = $row['Company_Phone'];
									$super_name = $row['Supervisor_Name'];
									$super_phone = $row['Supervisor_Phone'];
									$start = $row['Start_Date'];
									$finish = $row['Finish_Date'];


          						  echo '<tr>';
                    $internArray = array("$matric","$stud_name","$course","$stud_phone","$comp_name","$comp_add","$comp_poss","$comp_state","$comp_phone","$super_name","$super_phone","$start","$finish");
                        while (list ($key, $val) = each ($internArray) ) {
                          echo '<td>';
                          echo $val;
                          echo '</td>';
                        }
          					    echo '</tr>';
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

<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>

<!--  PerfectScrollbar Library -->
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>


</html>
<script>
$(document).ready(function(){
  var dtable = $('#intern_data').DataTable({
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


  $('#sidebar, #content').toggleClass('active');
  $('.collapse.in').toggleClass('in');
  $('a[aria-expanded=true]').attr('aria-expanded', 'false');

});

$('#sidebarCollapse').on('click', function () {
    $('#sidebar, #content').toggleClass('active');
    $('.collapse.in').toggleClass('in');
    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
});

$(function() {
  otable = $('#intern_data').dataTable();
  })
  function filterme() {
  //build a regex filter string with an or(|) condition
  var types = $('input:checkbox[name="type"]:checked').map(function() {
    return '^' + this.value + '\$';
  }).get().join('|');
  //filter in column 0, with an regex, no smart filtering, no inputbox,not case sensitive
  otable.fnFilter(types, 7, true, false, false, false);
}
</script>
