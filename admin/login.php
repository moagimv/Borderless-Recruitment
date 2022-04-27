<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Borderless Recruitment</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

    <!-- Top Bar Start -->
    <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="../index.php">
                                <img src="img/logo.jpg" alt="Logo" width="40%" height="100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hours</h3>
                                        <p>Mon-Fri, 8:00AM - 5:00PM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>012-383-2136</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p>info@borderlessrecruitment.co.za</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

                <!-- Apply Start -->
                <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Admin Console</p>
                    <h2>Sign In</h2>
                </div>
                <div class="row">  
                    <div class="col-md-4">

                    </div>                
                    <div class="col-md-4">
                        <div class="contact-form">
                            <?php
                                $Msg = "";
                                if(isset($_GET['error'])){
                                    $Msg = "Your application could not be sent right now, please try again later";
                                    echo('<div id="error" class="alert alert-danger">'.$Msg.'</div>');
                                }

                                if(isset($_GET['success'])){
                                    $Msg = "Your application has been sent successfully";
                                    echo('<div id="success" class="alert alert-success">'.$Msg.'</div>');
                                }
                            ?>
                            <form id="adminSingIn" name="adminSingIn" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Your Username" required="required" data-validation-required-message="Please enter your username" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Your Password" required="required" data-validation-required-message="Please enter your password" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                <p class="help-block text-danger"></p>
                                    <button class="btn btn-custom" type="submit" id="submitSingIn" name="submitSingIn"><a href="admin.php" style="color: white">Login</a></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </div>
        <!-- Apply End -->
    
        <!-- footer Start-->
        <?php include('adminFooter.php'); ?>
        <!-- footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>