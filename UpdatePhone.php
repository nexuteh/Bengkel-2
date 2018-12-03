<?php
// including the database connection file
include("Connections/Connection.php");
 
if(isset($_POST['update']))
{    
  
	$phone = $_POST['Supervisor_Phone'];
	$staffid = $_POST['Supervisor_StaffID'];

	
    
        //updating the table
        $result = mysqli_query($db, "UPDATE supervisor SET  Supervisor_Phone='$phone'  WHERE Supervisor_StaffID=$staffid");
        
        //redirectig to the display page. In our case, it is index.php
      
		
		 echo "<script>
		  alert('Successfully Updated');
		  window.location.href='SupervisorMain.php?Supervisor_StaffID=$staffid';
		  </script>"; 
  
}
?>

<?php
$con = mysqli_connect("localhost","root","","mapping");//create a connection to a database
//getting id from url
$id = $_GET['Supervisor_StaffID'];
 
//selecting data associated with this particular id
$result = mysqli_query($con, 'SELECT * FROM supervisor WHERE Supervisor_StaffID = "'.$id.'"');
 
while($res = mysqli_fetch_array($result))
{
	$sid =$res['Supervisor_Id'];
	$svname = $res['Supervisor_Name'];
	$sdept = $res['Supervisor_Department'];
	$sphone = $res['Supervisor_Phone'];
	$st = $res['Supervisor_St'];
	$role = $res['Supervisor_Status'];
	$staffid = $res['Supervisor_StaffID'];

    
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Supervisor Main</title>
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
                 <h6 class="text-center"><strong><?php echo $svname; ?></strong></h6>
              <h6 class="text-center"><strong>1-2017/2018</strong></h6>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
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
                    <li>
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
                        <a class="navbar-brand" href="#"> Supervisor Profile </a>
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
       <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title"><?php echo $svname; ?></h4>
                                  
                                </div>
                                <div class="card-content">
                                    <form action="UpdatePhone.php" method="post">
                                        <div class="row">
                                            <div class="col-md-5">
                                             <div class="form-group label-floating">
                                             <label class="control-label">Staff Id</label>
    <input type="text" class="form-control" value="<?php echo $staffid; ?>" disabled>
                                                </div> 
  													</div>
                                                    <div class="col-md-3">
                                         <div class="form-group label-floating">
                                                    <label class="control-label">Status</label>
          <input type="text" class="form-control" value="<?php echo $st; ?>" disabled>
                                                </div>   </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Role</label>
                                                    <input type="text" class="form-control" value="<?php echo $role; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" class="form-control" value="<?php echo $svname; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Department</label>
                                                    <input type="text" class="form-control" value="<?php echo $sdept ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="Supervisor_Phone"  name="Supervisor_Phone"value="<?php echo $sphone; ?>">
                                                </div>
                                            </div> 
                                            </div>
                                             <div class="row">
                                        <div class="col-md-8">
                                        <input type="hidden" name="Supervisor_StaffID" value=<?php echo  $_GET['Supervisor_StaffID'];?>>
										<input type="submit" id="update" name="update" value="Update" class="btn btn-default">
                                        </div>
                                        </div>
                                             
                                       
 <div class="clearfix"></div>
                                    </form>
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
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>


</html>