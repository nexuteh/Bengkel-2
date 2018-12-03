<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="assets/img/favicon.png" />
        <title>Landing Page</title>
        <meta name="description" content="Love UI Kit." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap 4-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <!--icons-->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--vendors-->
        <link rel="stylesheet" href="../js/vendors/daterangepicker/daterangepicker.css" />
        <!--custom css-->
        <link rel="stylesheet" href="css/components.css" />
        <link rel="stylesheet" href="css/colors.css"/>
        <link rel="stylesheet" href="css/demo.css" />
    </head>
    <body>

        <!--header-->
        <nav class="navbar navbar-toggleable-md fixed-top navbar-transparent sticky-navigation">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ion-grid"></span>
            </button>
            <div class="container">
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="StudentLogin.php">Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="SupervisorLogin.php">Supervisor</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <div class="wrapper">

            <!--header section-->
            <section class="hero-header" id="home" style="background:url(icon/7kampus_induk_E.v1.jpg)" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="brand">
                                <h1 class="heading-light">Map Point Of Industrial Company Using Geocoding Techniques</h1>
                                <p class="lead mb-5">
                                   Web Application to Assign supervisor with Industrial Company more easier and faster
                                </p>
                                <a href="Sign In.php" class="btn btn-outline-white btn-round btn-md page-scroll">
                                     Sign In
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--features-->
            <section class="bg-alt" id="features">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="title text-center">
                                <h2 class="heading-semi-bold text-primary">Geocoding Techniques</h2>
                                <p class="lead text-muted">
                                    Geocoding is the process of transforming a description of a location—such as a pair of coordinates, an address, or a name of a place—to a location on the earth's surface. You can geocode by entering one location description at a time or by providing many of them at once in a table. The resulting locations are output as geographic features with attributes, which can be used for mapping or spatial analysis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center mt-4">
                        <div class="col-sm-4">
                            <div class="card border-none">
                                <div class="card-block">
                                    <div class="mb-3">
                                        <em class="ion-ios-checkmark-outline icon-lg text-primary"></em>
                                    </div>
                                    <h4>100% More easier and More Convenient</h4>
                                    <p class="text-muted">
                                       AJK can access the application everywhere and easily to assign a supervisor.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card border-none">
                                <div class="card-block">
                                    <div class="mb-3">
                                        <em class="ion-ios-infinite icon-lg text-success"></em>
                                    </div>
                                    <h4>Mapping</h4>
                                    <p class="text-muted">
                                        Map can be view in mobile and web to know the direction of the company
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card border-none">
                                <div class="card-block">
                                    <div class="mb-3">
                                        <em class="ion-ios-heart-outline icon-lg text-danger"></em>
                                    </div>
                                    <h4>Save Time</h4>
                                    <p class="text-muted">
                                       Student can access using their full name to know the name of supervisor more faster rather than wait for an email from AJK.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--footer-->
            <section class="colored-section bg-inverse footer pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center">
                            <p class="mt-4 text-muted">
                                &copy; Bengkel 2 Group 1</a>, made with love for a better web
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
        <!--vendors-->
        <script src="../js/vendors/moment.min.js"></script>
        <script src="../js/vendors/daterangepicker/daterangepicker.js"></script>
        <!--custom js-->
        <script src="../js/app.js"></script>
    </body>
</html>
