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
         <!-- header Start-->
        <?php include('template/header.php'); ?>
        <!-- header End -->
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Student Registrstion</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="service.php">Services</a>
                        <a href="employerServices.php">Employer Services</a>
                        <a href="#">Employer Job Opportunity</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        <!-- Apply Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Employment Opportunity</p>
                    <h2>Post job opportunities</h2>
                </div>
                <div class="row">                    
                    <div class="col-md-12">
                        <div class="contact-form">
                            <?php
                                $Msg = "";
                                if(isset($_GET['error'])){
                                    $Msg = "Your post could not be sent right now, please try again later";
                                    echo('<div id="error" class="alert alert-danger">'.$Msg.'</div>');
                                }

                                if(isset($_GET['success'])){
                                    $Msg = "Your post has been sent successfully";
                                    echo('<div id="success" class="alert alert-success">'.$Msg.'</div>');
                                }
                            ?>
                            <form id="jobPost" name="jobPost" method="post" action="server/employer.php" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="position" name="position" placeholder="The availbale position" required="required" data-validation-required-message="Please enter the available position" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="organization" name="organization" placeholder="Your organization name" required="required" data-validation-required-message="Please enter your organization name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="salary" name="salary" placeholder="The salary range (eg: 1200 to 1500)" required="required" data-validation-required-message="Please enter the salary range (eg: 1200 to 1500)" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="person" name="person" placeholder="The contact person's full names" required="required" data-validation-required-message="Please enter the contact person's full names" />
                                    <p class="help-block text-danger"></p>
                                </div>                                
                                <div class="control-group">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="The contact person's phone number" required="required" data-validation-required-message="Please enter the contact person's phone number" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" name ="email" placeholder="The contact person's email address" required="required" data-validation-required-message="Please enter the contact person's email address" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="location" name="location" placeholder="The employment location" required="required" data-validation-required-message="Please enter the employer location" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="row">
                                    <div class="control-group col-lg-12 col-md-6">
                                        <p>Copy of Job Attachment</p>
                                        <input type="file" id="attachment" name="attachment">
                                    </div>                                    
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                <p class="help-block text-danger"></p>
                                    <button class="btn btn-custom" type="submit" id="submitJobPost" name="submitJobPost">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Apply End -->
        
        <!-- facts Start-->
        <?php include('template/facts.php'); ?>
        <!-- facts End -->

        <!-- Partners Start-->
        <?php include('template/partners.php'); ?>
        <!-- Partners End -->

        <!-- footer Start-->
        <?php include('template/footer.php'); ?>
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
