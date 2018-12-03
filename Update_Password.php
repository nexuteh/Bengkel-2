<?php
$con = mysqli_connect("localhost","root","","mapping");//create a connection to a database 
if(isset($_POST['update']))
{    
   
    $staffid = $_POST['Supervisor_StaffID'];
	$pass = $_POST['Supervisor_Password'];
	$comfirm = $_POST['Supervisor_Comfirm']; 
	
    
    // checking empty fields
    if(empty($pass)|| empty($comfirm)) {           
        
		if(empty($pass)) {
            echo "<font color='red'>Password field is empty.</font><br/>";
        }  
		 if(empty($comfirm)) {
            echo "<font color='red'>Comfirm Password field is empty.</font><br/>";
        }
        
		    
    } else {    
        //updating the table
        $result = mysqli_query($con, "UPDATE supervisor SET Supervisor_Password='$pass',Supervisor_Comfirm='$comfirm' WHERE Supervisor_StaffID=$staffid");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: Sign In.php");
    }
}
?>
<?php
$con = mysqli_connect("localhost","root","","mapping");//create a connection to a database
//getting id from url
$id = $_GET['Supervisor_StaffID'];
 
//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM supervisor WHERE Supervisor_StaffID=$id");
 
while($res = mysqli_fetch_array($result))
{
    $staffid = $res['Supervisor_StaffID'];
	$sq = $res['Supervisor_SQ'];
	$ans = $res['Supervisor_ans'];
    
}

?>

<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="assets/img/favicon.png" />
        <title>Reset Password</title>
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
        padding: 120px 0px;
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
                    <div class="mt-2"><img src="icon/Accept-Male-User.png" alt="Male" class="brand-logo mx-auto d-block img-fluid rounded-circle"/></div>
                    
                    <p class="mt-4 text-white lead text-center">Reset Password</p>
                    <div class="mt-4">
                      <form action="Update_Password.php" method="post" class="form-horizontal"> 
                      <div class="form-group">
                      <div class="col-sm-offset-1 col-sm-10">
                        <div class="checkbox">
                          <div class="form-group1">
                            <label class="control-label col-sm-3" for="Supervisor_Password">Password:</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control1" id="Supervisor_Password"  name="Supervisor_Password" placeholder="Enter password" required />
                            </div>
                          </div>
                          </div>
                          </div>
                           <div class="col-sm-offset-1 col-sm-10">
                        <div class="checkbox">
                          <div class="form-group1">
                            <label class="control-label col-sm-3" for="Supervisor_Comfirm">Comfirm Password:</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control1" id="Supervisor_Comfirm" name="Supervisor_Comfirm" placeholder="Enter Comfirm password" required />
                            </div>
                          </div>
                          </div>
                          </div>
                          <div class="form-group1">
                            <div class="col-sm-offset-6 col-sm-10">
                             <td><input type="hidden" name="Supervisor_StaffID" value=<?php echo $_GET['Supervisor_StaffID'];?>></td>
                              <td><input type="submit" id="update" name="update" value="Update" class="btn btn-default" ></td>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      </form>

                      <div class="clearfix"></div>
              <div class="col-sm-12 mt-5 footer">
                <p class="text-white small text-center"> &copy; Bengkel 2 Group 1</a>, made with love for a better web </p>
              </div>
            </div>
          </div>
    </section>
    </body>
</html>
<script type="text/javascript">
$("#Supervisor_Password").password();
</script>
<script type="text/javascript">
$("#Supervisor_Comfirm").password();
</script>
<script type="text/javascript">
    $(function () {
        $("#update").click(function () {
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

