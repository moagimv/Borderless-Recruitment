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
                        <a href="studentServices.php">Student Services</a>
                        <a href="#">Student Registrstion</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        <!-- Apply Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Student Application</p>
                    <h2>Apply for student opportunities</h2>
                </div>
                <div class="row">                    
                    <div class="col-md-12">
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
                            <form id="studentApplication" name="studentApplication" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="f-name" name="f-name" placeholder="Your First Name" required="required" data-validation-required-message="Please enter your first name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="l-name" name="l-name" placeholder="Your Last Name" required="required" data-validation-required-message="Please enter your last name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email Address" required="required" data-validation-required-message="Please enter your email address" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Your phone number" required="required" data-validation-required-message="Please enter your phone number" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="country" name="country" placeholder="Your country of Origin" required="required" data-validation-required-message="Please enter your country of Origin" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <select name="university" id="university" type="text" class="form-control" required="required" data-validation-required-message="Please select your University">
                                        <option value="">Select One University</option>
                                        <option value="up">University of Pretoria (UP)</option>
                                        <option value="uj">University of Johannesburg (UJ)</option>
                                        <option value="tut">Tshwane University of Technology (TUT)</option>
                                        <option value="wits">University of Witwatersrand</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <select name="qualification" id="qualification" type="text" class="form-control" required="required" data-validation-required-message="Please select your qualification">
                                        <option value="">Select One Course/Field</option>
                                        <option value="hrm">Human Resource Management</option>
                                        <option value="it">Information Technology</option>
                                        <option value="marketing">Marketing</option>
                                        <option value="electricaleng">Electrical Engineering</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="row">
                                    <div class="control-group col-lg-4 col-md-6">
                                        <p>Copy of Identity</p>
                                        <input type="file" id="id" name="id">
                                    </div>
                                    <div class="control-group col-lg-4 col-md-6">
                                        <p>Copy of Passport</p>
                                        <input type="file" id="passport" name="passport">
                                    </div>
                                    <div class="control-group col-lg-4 col-md-6">
                                        <p>Copy of Results/Certification</p>
                                        <input type="file" id="results" name="results">
                                    </div>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                <p class="help-block text-danger"></p>
                                    <button class="btn btn-custom" type="submit" id="submitStudentAppplication" name="submitStudentAppplication">Submit</button>
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
