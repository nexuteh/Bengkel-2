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
					</li>
                                <li class="active">
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
                                  <h4 class="title">Update Supervisor Attachment</h4>
                              </div>
                              <div class="card-content">
                                <div class="col-lg-6">
                            <form method="POST" action="../Mapping/Update_Supervisor_Attachment.php?Group_Id=<?php echo $_GET['Group_Id']?>"  class="form-horizontal" name="form1">
                            <?php
                            $query = "SELECT company.Company_Name FROM sv_assignment LEFT JOIN supervisor ON sv_assignment.Supervisor_Id=supervisor.Supervisor_Id LEFT JOIN company ON company.Group_Id=sv_assignment.Group_id WHERE company.Group_Id = '".$_GET['Group_Id']."' ";
                            $result = mysqli_query($db,$query);

                   					while($row = mysqli_fetch_array($result))
                   				   	{
                                           $companyname = $row['Company_Name'];
                                           echo '<div class="form-group">
                                           <label class="control-label col-sm-3">Company Name :</label>
                                           <div class="col-sm-6">';
                                           echo '<input type="text" class="form-control" disabled value="';
                                           echo $companyname;
                                           echo '">';
                                           echo '</div></div>';

                   					   }
                               ?>
                            <div class="form-group">
                              <label class="control-label col-sm-3">Old Supervisor Name :</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="Supervisor_Name" name="Supervisor_Name" disabled value='<?php echo $_GET['SV_Name']?>'/>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3">New Supervisor Name :</label>
                              <div class="col-sm-6">
                                <input type="text" name='supervisor' id='supervisor' class=" validate form-control" required onkeyup='searchc1(this.value)'>
                                 <div id='search_cdiv1'></div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-10">
                                <button type="submit" name="Submit" class="btn btn-default">Submit</button>
                              </div>
                            </div>
                            </div>
                            <div class="card-content col-lg-6">
                                <div id="map2"></div>
                            </div>
                            </form>
                              </div>
                          </div></div></div>
                          <div class="card">
                          <div class="card-header" data-background-color="purple">
                              <h4 class="title">Supervisor Preferences Table</h4>
                          </div>
                        </div>
                    <table id="group_data" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                                               <td>Supervisor Name</td>
                                               <td>Preference 1</td>
                                               <td>Preference 2</td>
                                               <td>Preference 3</td>

                      </tr>
                    </thead>
                 		<tbody>
                      <?php
                          $query = "SELECT * FROM supervisor WHERE supervisor_id NOT IN (SELECT supervisor_id FROM sv_assignment WHERE supervisor_id!='NULL');";
                          $result = mysqli_query($db,$query);

                 					while($row = mysqli_fetch_array($result))
                 				   	{
                   						$sv_name = $row['Supervisor_Name'];
                              $preference1 = $row['State1'];
                              $preference2 = $row['State2'];
                              $preference3 = $row['State3'];

                               echo '<td>';
                               echo $sv_name;
                               echo '</td><td>';
                               echo $preference1;
                               echo '</td><td>';
                               echo $preference2;
                               echo '</td><td>';
                               echo $preference3;
                 					    echo '</td></tr>';
                 					   }
                       ?>
                 		</tbody>
                    </table>
                  </div></div>

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
<script>
function initMap() {

  var locations = [
  <?php
  $groupid = $_GET['Group_Id'];
  $query = "SELECT * FROM `company` WHERE group_id = $groupid";
  $query2 = "SELECT COUNT(stud_attachment.company_id) AS NUMBER FROM company LEFT JOIN stud_attachment ON company.Company_Id=stud_attachment.Company_Id WHERE Group_Id =$groupid GROUP BY company.Company_Name ORDER BY company.Company_Id";
  $result = mysqli_query($db,$query);
  $result2 = mysqli_query($db,$query2);

  $types = array();
  while(($row2 =  mysqli_fetch_assoc($result2))) {
      $types[] = $row2['NUMBER'];
  }

  $x = 0;
  while($row = mysqli_fetch_array($result)){
    $lat = $row['Company_Latitude'];
    $lng = $row['Company_Longtitude'];
    $companyname = $row['Company_Name'];
    $companyadd = $row['Company_Add'];
    $companyphone = $row['Company_Phone'];

    echo "[$lat, $lng, '<b>$companyname</b></br></br>Address: $companyadd </br></br> No-Tel:$companyphone </br></br> No of Students:$types[$x]'],";
    $x++;
  }
  ?>
  ]

	var map = new google.maps.Map(document.getElementById('map2'), {
		zoom: 7,
		center: new google.maps.LatLng(3.5, 102),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});

	var infowindow = new google.maps.InfoWindow({});

	var marker, i;

	for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][0], locations[i][1]),
			map: map
		});

		google.maps.event.addListener(marker, 'click', (function (marker, i) {
			return function () {
				infowindow.setContent(locations[i][2]);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}
}

function searchc1(string){
        var xmlhttp;
        if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject("XMLHTTP");
        }
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                document.getElementById("search_cdiv1").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "../Mapping/Search_Supervisor_Name.php?v="+string, true);
        xmlhttp.send(null);
}

function setSName(string) {
    document.getElementById("supervisor").value = string;
    $(".supervisorid").hide();
}

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

$(window).resize(function () {
    var h = $(window).height(),
        offsetTop = 300; // Calculate the top offset
    $('#map2').css('height', (h - offsetTop));
}).resize();

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCd319KPTRzC3mSZezb3T2gwwQTnq2vIRM&callback=initMap"></script>

<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>

<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>


</html>
