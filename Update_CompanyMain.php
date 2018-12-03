<?php
// including the database connection file
$con = mysqli_connect("localhost","root","","mapping");//create a connection to a database

 
if(isset($_POST['update']))
{    
    $id = $_POST['Company_Id'];
    $name = $_POST['Company_Name'];
    $phone = $_POST['Company_Phone'];
    $add = $_POST['Company_Add'];
	$posscode = $_POST['Company_Posscode'];
    $state = $_POST['Company_State'];
	$lat = $_POST['Company_Latitude'];
    $long = $_POST['Company_Longtitude'];
	
	
    
    // checking empty fields
    if(empty($name) || empty($phone) || empty($add) || empty($posscode) || empty($state) || empty($lat) || empty($long)) {                
        if(empty($name)) {
            echo "<font color='red'>Company Name field is empty.</font><br/>";
        }
        
        if(empty($phone)) {
            echo "<font color='red'>Company Phone No field is empty.</font><br/>";
        }
        
        if(empty($add)) {
            echo "<font color='red'>Company Address field is empty.</font><br/>";
        }
		 if(empty($posscode)) {
            echo "<font color='red'>Company Postcode field is empty.</font><br/>";
        }
		 
        if(empty($state)) {
            echo "<font color='red'>Company State field is empty.</font><br/>";
		}
		if(empty($lat)) {
            echo "<font color='red'>Company Latitude field is empty.</font><br/>";
        }
		 
        if(empty($long)) {
            echo "<font color='red'>Company Longtitude field is empty.</font><br/>";
		}
          
    } else {    
        //updating the table
        $result = mysqli_query($con, "UPDATE company SET Company_Name='$name', Company_Phone='$phone',Company_Add='$add', Company_Posscode='$posscode', Company_State='$state',Company_Latitude='$lat',Company_Longtitude='$long' WHERE Company_Id=$id");
       
	    header("Location: Update_CompanyMain.php?Company_Id=".$id);
		
		
    }
}
?>
<?php
$con = mysqli_connect("localhost","root","","mapping");//create a connection to a database
//getting id from url
$id = $_GET['Company_Id'];
 
//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT student.Student_Matric, stud_attachment.Stud_AttachmentID , company.Company_Id,company.Company_Name, company.Company_Phone,company.Company_Add,company.Company_Posscode,company.Company_Posscode,company.Company_State,company.Company_Latitude,company.Company_Longtitude FROM `stud_attachment`INNER JOIN `company` ON stud_attachment.Company_Id=company.Company_Id INNER JOIN `student` ON stud_attachment.Student_Id=student.Student_Id WHERE company.Company_Id=$id");
 
while($res = mysqli_fetch_array($result))
{
	$idm = $res['Student_Matric'];
	$id = $res['Company_Id'];
    $name = $res['Company_Name'];
    $phone = $res['Company_Phone'];
    $add = $res['Company_Add'];
    $posscode = $res['Company_Posscode'];
	$state = $res['Company_State'];
    $lat = $res['Company_Latitude'];
	$long = $res['Company_Longtitude'];
    
}
?>
<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="assets/img/favicon.png" />
        <title>Student Profile</title>
        <meta name="description" content="Love Authority." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="bootstrap-show-password-master/bootstrap-show-password.js"></script>
      
          <!--     Fonts and icons     -->
          <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
          <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
          <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
       
        <style>
		body {
    width: 100%;
    height: 100%;
}
body{
    
    background:url(icon/7kampus_induk_E.jpg);
	background-size: cover;
    color: #fff;
}

.brand-logo{
    width: 120px;
}
.hero{
  
    background-image:url(../icon/7kampus_induk_E.jpg);
    background-size: cover;
    background-position: center center;
    min-height: 100%;
    min-width: 100%;
    width: auto;
    height: auto;
    margin: 0;
    position: absolute;
}
.hero:after{
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 100%;
    display: block;
    left: 0;
    top: 0;
    content: "";
    background-color: rgba(0, 0, 0, 0.4);
}
.hero .container{
    z-index: 3;
    position: relative;
}
.hero .card{
    background: rgba(0,0,0,0.7);
}
a, a:hover{
    color: #fff;
    text-decoration: underline;
}
@media (min-width:576px){
    section{
        padding: 30px 0px;
    }
    .hero .card .card-block{
        padding-left: 4rem;
        padding-right: 4rem;
    }
}
@media (max-width:576px){
    section{
        padding: 20px;
    }
}
.bg-alt {
    background-color: #fff;
}
.btn{
    -webkit-transition: 350ms ease all;
    transition: 350ms ease all;
    text-transform: uppercase;
    font-weight: 500;
    padding: .6rem 1.5rem;
    cursor: pointer;
}
.btn:hover, .btn:focus {
    box-shadow: 6px 6px 25px rgba(0, 0, 0, 0.15);
}
.btn-primary{
    background-color: #ff5722 !important;
    border-color: #ff5722 !important;
}
.btn-primary:hover, .btn-primary:focus{
    color: #fff !important;
}
.form-group {
    margin-bottom: 1.5rem;
}
.form-control{
    height: 45px;
    font-size: 16px;
    background-color: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.5);
    color: #FFFFFF; 
}
.form-control:focus {
    border-color: #FFFFFF;
    background-color: transparent;
    color: #FFFFFF; 
}
.border-none{
    border: none !important;
    border-color: transparent !important;
}
.text-primary{
    color: #ff5722 !important;
}
.custom-control-input:checked~.custom-control-indicator {
    color: #fff;
    background-color: #ff5722;
    outline-color: #ff5722; 
}
.content-divider.center {
    text-align: center;
}
.content-divider {
    position: relative;
    z-index: 1;
}
.content-divider > span, .content-divider > a {
    background-color: #000;
    color: #fff;
    display: inline-block;
    padding: 2px 12px;
    border-radius: 3px;
    text-transform: uppercase;
    font-weight: 500;
}
.content-divider > span:before, .content-divider > a:before {
    content: "";
    position: absolute;
    top: 50%;
    left: 0;
    height: 1px;
    background-color: #ddd;
    width: 100%;
    z-index: -1;
}
		
		.btn1 {    -webkit-transition: 350ms ease all;
    transition: 350ms ease all;
    text-transform: uppercase;
    font-weight: 500;
    padding: .6rem 1.5rem;
    cursor: pointer;
}
.form-control1 {    height: 45px;
    font-size: 16px;
    background-color: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.5);
    color: #FFFFFF; 
}
.form-group1 {    margin-bottom: 1.5rem;
}
        </style>
    </head>
<body>
        <!--hero section-->
        <section class="hero">
          <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12">
                <div class="card border-none">
          <div class="card-block">
                    <div class="material-icons"><img src="icon/usergroup.png" alt="Male" class="brand-logo mx-auto d-block img-fluid rounded-circle"/></div>
                    
                    <p class="mt-4 text-white lead text-center">Student Company Internship Details</p>
                   
                    <div class="mt-4">
                      <form method="post" action="Update_CompanyMain.php" name="form1">
                                        <div class="row">
                                            <div class="col-md-12">
                                             <div class="form-group label-floating">
                                             <label class="control-label">Name</label>
    <input type="text" class="form-control" id="Company_Name" name="Company_Name" value="<?php echo $name; ?>" >
                                                </div> 
 										 </div><div class="col-md-12">
                                         <div class="form-group label-floating">
                                                    <label class="control-label">Address</label>
          <input type="text" class="form-control"id="Company_Add" name="Company_Add" value="<?php echo $add; ?>" >
                                                </div>   </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Postcode</label>
                                                    <input type="text" class="form-control" id="Company_Posscode" name="Company_Posscode" value="<?php echo $posscode; ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">State</label>
                                                    <input type="text" class="form-control" id="Company_State" name="Company_State" value="<?php echo $state; ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="Company_Phone" name="Company_Phone" value="<?php echo $phone; ?>" >
                                                </div>
                                            </div>
                                        </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Latitude</label>
                                                    <input type="text" class="form-control" id="Company_Latitude" name="Company_Latitude" value="<?php echo $lat; ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Longtitude</label>
                                                    <input type="text" class="form-control" id="Company_Longtitiude" name="Company_Longtitude" value="<?php echo $long; ?>" >
                                                </div>
                                            </div>
                                            </div>
                                              <div class="form-group1">
                            <div class="form-group1">
                            <div class="col-sm-offset-6 col-sm-10">
                              <p>&nbsp;</p>
                                <input type="hidden" id="Company_Id" name="Company_Id" value="<?php echo $id;?>">
                                <input type="submit" name="update" value="Update" class="btn btn-default">
                            </div>
                          </div>                                        
 <div class="clearfix"></div>
                                    </form>
                                    <form>
                                    <div class="col-md-12 " style="left: 5px; top: -30px; ">
                		<a class="btn btn-primary btn-sm " href="StudentMain.php?Student_Matric=<?php echo $idm; ?>">VIEW INTERNSHIP DETAILS</a>
                        </div>
                 </form>
                 <form method="post" role="form" class="form-inline" action="StudentLogin.php">
                                    <div class="col-md-12 " style="left: -25px; top: -42px; ">
                		<button type="submit" class="btn btn-danger navbar-btn pull-right">Logout</button>
                        </div>
                 </form>
                                    


                      <div class="clearfix"></div>
              <div class="col-sm-12 mt-5 footer">
                <p class="text-white small text-center">  &copy; Bengkel 2 Group 1</a>, made with love for a better web </p>
              </div>
            </div>
          </div>
    </section>
    </body>
</html>

