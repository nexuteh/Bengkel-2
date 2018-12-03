<?php
 include("Connections/Check.php"); 
?>
 
<?php
$conn = new mysqli('localhost','root','','mapping');

$ajk = $conn -> query("Select*From supervisor WHERE Supervisor_St = 'AJK'");
$supervisor = $conn -> query("Select*From supervisor WHERE Supervisor_St = 'Supervisor'");

$totalAJK = mysqli_num_rows($ajk);
$totalSupervisor = mysqli_num_rows($supervisor);
?>
<?php
$conn = new mysqli('localhost','root','','mapping');

$active = $conn -> query("Select*From supervisor WHERE Supervisor_Status = 'Active'");
$nonactive = $conn -> query("Select*From supervisor WHERE Supervisor_Status = 'Non Active'");

$totalActive = mysqli_num_rows($active);
$totalNonActive = mysqli_num_rows($nonactive);
?>
<?php
$conn = new mysqli('localhost','root','','mapping');

$bitd = $conn -> query("SELECT student.Student_Course FROM `stud_attachment` INNER JOIN `student` ON stud_attachment.Student_Id = student.Student_Id WHERE stud_attachment.Intern_Status = 'Internship' && student.Student_Course = 'BITD' ");
$bits = $conn -> query("SELECT student.Student_Course FROM `stud_attachment` INNER JOIN `student` ON stud_attachment.Student_Id = student.Student_Id WHERE stud_attachment.Intern_Status = 'Internship' && student.Student_Course = 'BITS' ");
$bitm = $conn -> query("SELECT student.Student_Course FROM `stud_attachment` INNER JOIN `student` ON stud_attachment.Student_Id = student.Student_Id WHERE stud_attachment.Intern_Status = 'Internship' && student.Student_Course = 'BITM' ");
$biti = $conn -> query("SELECT student.Student_Course FROM `stud_attachment` INNER JOIN `student` ON stud_attachment.Student_Id = student.Student_Id WHERE stud_attachment.Intern_Status = 'Internship' && student.Student_Course = 'BITI' ");
$bite = $conn -> query("SELECT student.Student_Course FROM `stud_attachment` INNER JOIN `student` ON stud_attachment.Student_Id = student.Student_Id WHERE stud_attachment.Intern_Status = 'Internship' && student.Student_Course = 'BITE' ");
$bitc = $conn -> query("SELECT student.Student_Course FROM `stud_attachment` INNER JOIN `student` ON stud_attachment.Student_Id = student.Student_Id WHERE stud_attachment.Intern_Status = 'Internship' && student.Student_Course = 'BITC' ");
$bitz = $conn -> query("SELECT student.Student_Course FROM `stud_attachment` INNER JOIN `student` ON stud_attachment.Student_Id = student.Student_Id WHERE stud_attachment.Intern_Status = 'Internship' && student.Student_Course = 'BITZ' ");
$totalbitd = mysqli_num_rows($bitd);
$totalbits = mysqli_num_rows($bits);
$totalbitm = mysqli_num_rows($bitm);
$totalbiti = mysqli_num_rows($biti);
$totalbite = mysqli_num_rows($bite);
$totalbitc = mysqli_num_rows($bitc);
$totalbitz = mysqli_num_rows($bitz);

?>
<?php
$conn = new mysqli('localhost','root','','mapping');

$johor = $conn -> query("SELECT company.Company_State FROM `stud_attachment` INNER JOIN `company` ON stud_attachment.Company_Id = company.Company_Id WHERE stud_attachment.Intern_Status = 'Internship' && company.Company_State = 'JOHOR' ");
$melaka = $conn -> query("SELECT company.Company_State FROM `stud_attachment` INNER JOIN `company` ON stud_attachment.Company_Id = company.Company_Id WHERE stud_attachment.Intern_Status = 'Internship' && company.Company_State = 'MELAKA' ");
$ns = $conn -> query("SELECT company.Company_State FROM `stud_attachment` INNER JOIN `company` ON stud_attachment.Company_Id = company.Company_Id WHERE stud_attachment.Intern_Status = 'Internship' && company.Company_State = 'N.SEMBILAN' ");
$kl = $conn -> query("SELECT company.Company_Id FROM `stud_attachment` INNER JOIN `company` ON stud_attachment.Company_Id = company.Company_Id WHERE stud_attachment.Intern_Status = 'Internship' && company.Company_State = 'KUALA LUMPUR' ");
$sel = $conn -> query("SELECT company.Company_State FROM `stud_attachment` INNER JOIN `company` ON stud_attachment.Company_Id = company.Company_Id WHERE stud_attachment.Intern_Status = 'Internship' && company.Company_State = 'SELANGOR' ");
$per = $conn -> query("SELECT company.Company_State FROM `stud_attachment` INNER JOIN `company` ON stud_attachment.Company_Id = company.Company_Id WHERE stud_attachment.Intern_Status = 'Internship' && company.Company_State = 'PERAK' ");
$pp = $conn -> query("SELECT company.Company_State FROM `stud_attachment` INNER JOIN `company` ON stud_attachment.Company_Id = company.Company_Id WHERE stud_attachment.Intern_Status = 'Internship' && company.Company_State = 'PULAU PINANG' ");
$kedah = $conn -> query("SELECT company.Company_State FROM `stud_attachment` INNER JOIN `company` ON stud_attachment.Company_Id = company.Company_Id WHERE stud_attachment.Intern_Status = 'Internship' && company.Company_State = 'KEDAH' ");
$perlis = $conn -> query("SELECT company.Company_State FROM `stud_attachment` INNER JOIN `company` ON stud_attachment.Company_Id = company.Company_Id WHERE stud_attachment.Intern_Status = 'Internship' && company.Company_State = 'PERLIS' ");
$sabah = $conn -> query("SELECT company.Company_State FROM `stud_attachment` INNER JOIN `company` ON stud_attachment.Company_Id = company.Company_Id WHERE stud_attachment.Intern_Status = 'Internship' && company.Company_State = 'SABAH' ");
$sarawak = $conn -> query("SELECT company.Company_State FROM `stud_attachment` INNER JOIN `company` ON stud_attachment.Company_Id = company.Company_Id WHERE stud_attachment.Intern_Status = 'Internship' && company.Company_State = 'SARAWAK' ");
$pahang = $conn -> query("SELECT company.Company_State FROM `stud_attachment` INNER JOIN `company` ON stud_attachment.Company_Id = company.Company_Id WHERE stud_attachment.Intern_Status = 'Internship' && company.Company_State = 'PAHANG' ");
$kelantan = $conn -> query("SELECT company.Company_State FROM `stud_attachment` INNER JOIN `company` ON stud_attachment.Company_Id= company.Company_Id WHERE stud_attachment.Intern_Status = 'Internship' && company.Company_State = 'KELANTAN' ");
$terengganu = $conn -> query("SELECT company.Company_State FROM `stud_attachment` INNER JOIN `company` ON stud_attachment.Company_Id = company.Company_Id WHERE stud_attachment.Intern_Status = 'Internship' && company.Company_State = 'TERENGGANU' ");
$totalM = mysqli_num_rows($johor);
$totalJ = mysqli_num_rows($melaka);
$totalNS = mysqli_num_rows($ns);
$totalKL = mysqli_num_rows($kl);
$totalSEL = mysqli_num_rows($sel);
$totalPER = mysqli_num_rows($per);
$totalPP = mysqli_num_rows($pp);
$totalKED = mysqli_num_rows($kedah);
$totalPERL = mysqli_num_rows($perlis);
$totalSAB = mysqli_num_rows($sabah);
$totalSAR = mysqli_num_rows($sarawak);
$totalPAH = mysqli_num_rows($pahang);
$totalKEL = mysqli_num_rows($kelantan);
$totalTER = mysqli_num_rows($terengganu);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="icon/sidebar.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    --> 
            <div class="logo">
              
               <h6 class="text-center"><strong><?php echo $login_name; ?></strong></h6>
              <h6 class="text-center"><strong>1-2017/2018</strong></h6>
              
                
                </a>
               </div>   
            
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="Dashboard.php">
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
                                        <a href="Student/Student.php">Add Student</a>
                                    </li>
                                    <li>
                                        <a href="Student/View_Student.php">View Student</a>
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
                                        <a href="Company/Company.php">Add Company</a>
                                    </li>
                                    <li>
                                        <a href="Company/View_CompanyALL.php">View Company</a>
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
                                        <a href="Lecturer/Supervisor.php">Add Lecturer</a>
                                    </li>
                                    <li>
                                        <a href="Lecturer/View_Supervisor.php">View Lecturer</a>
                                    </li>
                                </ul>
                            </li>
                    <li>
                        <a href="Mapping/View_Map.php">
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
                                        <a href="Mapping/Student_Attachment.php">Add Student Internship</a>
                                    </li>
                                    <li>
                                        <a href="Student/view_SA2017.php">View Student Attachment</a>
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
                                        <a href="Mapping/Grouping_Company.php">Group Company</a>
                                    </li>
                                    <li>
                                        <a href="Mapping/View_Company_Grouping.php">View Company Group</a>
                                    </li>
                                </ul>
                                </li>
                                <li>
                                 <a href="Mapping/Supervisor_Attachment.php">
                                 <i class="material-icons">style</i>
                                 <p>Supervisor Attachment</p>
                                 </a>
                                </li>
                                  <li>
                        <a href="Session/View_Session.php">
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
                        <a class="navbar-brand" href="#"> Admin Dashboard </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="Dashboard.php" class="dropdown-toggle" data-toggle="dropdown">
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
                                        <a href="Profile.php">View Account</a>
                                    </li>
                                    <li>
                                        <a href="Connections/Logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Status', 'Percentage'],
          ['AJK',     <?php echo $totalAJK; ?>],
          ['Supervisor',   <?php echo $totalSupervisor; ?>]
        ]);

        var options = {
          title: 'Lecturer Status'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart.draw(data, options);
      }
    </script>    
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["State", "No. Of Student", { role: "style" } ],
        ["JOHOR",  <?php echo $totalJ; ?>,"#33FFE6"],
        ["MELAKA", <?php echo $totalM; ?>, "#33FFE6"],
        ["N.SEMBILAN", <?php echo $totalNS; ?>, "#33FFE6"],
        ["KUALA LUMPUR", <?php echo $totalKL; ?>, "#33FFE6"],
		["SELANGOR", <?php echo $totalSEL; ?>, "#33FFE6"],
        ["PERAK", <?php echo $totalPER; ?>, "#33FFE6"],
		["PULAU PINANG", <?php echo $totalPP; ?>, "#33FFE6"],
		["KEDAH", <?php echo $totalKED; ?>, "#33FFE6"],
        ["PERLIS",  <?php echo $totalPERL; ?>,"#33FFE6"],
        ["SABAH", <?php echo $totalSAB; ?>, "#33FFE6"],
        ["SARAWAK", <?php echo $totalSAR; ?>, "#33FFE6"],
        ["PAHANG", <?php echo $totalPAH; ?>, "#33FFE6"],
		["KELANTAN", <?php echo $totalKEL; ?>, "#33FFE6"],
        ["TERENGGANU", <?php echo $totalTER; ?>, "#33FFE6"],
		
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Student Internship Company By State",
        width: 900,
        height:300,
        bar: {groupWidth: "95%"},
        legend: { position: "center" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values1"));
      chart.draw(view, options);
	}
  </script> 
         
   
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Status', 'Percentage'],
          ['Active',     <?php echo $totalActive; ?>],
          ['Non Active',   <?php echo $totalNonActive; ?>]
        ]);

        var options = {
          title: 'Lecturer Status'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>   
    
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Course", "No. Of Student", { role: "style" } ],
        ["BITD",  <?php echo $totalbitd; ?>,"gold"],
        ["BITS", <?php echo $totalbits; ?>, "gold"],
        ["BITI", <?php echo $totalbiti; ?>, "gold"],
        ["BITM", <?php echo $totalbitm; ?>, "gold"],
		["BITZ", <?php echo $totalbitz; ?>, "gold"],
        ["BITE", <?php echo $totalbite; ?>, "gold"],
		["BITC", <?php echo $totalbitc; ?>, "gold"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Number Of Student Intership From Course",
        width: 900,
        height: 300,
        bar: {groupWidth: "95%"},
        legend: { position: "center" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
	}
  </script>               
      
          <div class="content">
                <div class="container-fluid">
                    <div class="row">
                     <form method="post" role="form" class="form-inline" action="ViewAll.php">
                		<button type="submit" style="left:400px;" class="btn btn-danger navbar-btn">View All Internship Details</button>
                  </form>
                  <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Company State</h4>
                                    <p class="category">Company Internship By Student</p>
                                </div>
                                <div class="card-content table-responsive">
                                  <div id="columnchart_values1" style="width: 500px; height: 300px;"></div> 
                              </div>
                        </div>
                        </div>
                        
                   
                   <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                <h4 class="title"> Number Of Student Intership By Course</h4>
                                <p class="category"> Current Student Internship</p>
                                </div>
                                  <div id="columnchart_values" style="width: 500px; height: 300px;"></div> 
                     </div>
                   </div>
                 
                 
                     
                   
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Lecturer Status</h4>
                                <p class="category">Current Lecturer Status Active or Non Active</p>
                          </div>
    							 <div id="piechart" style="width: 500px; height: 400px;"></div>
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
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>


</html>