<!DOCTYPE html>
    <html lang="en">

    
<!-- Mirrored from themesdesign.in/jobya/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 00:21:08 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jobya - Responsive Job Board HTML Template</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Themesdesign" />
    
        <link rel="shortcut icon" href="images/favicon.ico">
    
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    
        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
    
        <link rel="stylesheet" type="text/css" href="css/selectize.css" />
    
        <link rel="stylesheet" type="text/css" href="css/nice-select.css" />
    
        <!-- Custom  Css -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />

    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        
        <div class="back-to-home rounded d-none d-sm-block">
            <a href="/" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-home"></i></a>
        </div>

        <!-- Hero Start -->
        <section class="vh-100" style="background: url('images/user.jpg') center center;">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="login_page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                        <h4 class="mb-4">Signup</h4>  
                                    </div>
                                    <form action="registerr/create" class="login-form" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">                                               
                                                    <label>NISN<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="NISN" name="nisn" id="name" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">                                               
                                                    <label>Your Name<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Name" name="nama_lengkap" id="name" required="">
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6">
                                                <div class="form-group position-relative">                                               
                                                    <label>NISN<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="NISN" name="nisn" id="nisn" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">                                               
                                                    <label>Year Graduate <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="2000" name="talus" id="talus" required="">
                                                </div>
                                            </div> --}}
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Your Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" placeholder="Confirm Password" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="custom-control m-0 custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="submit" value="Register" class="btn btn-primary w-100">
                                            </div>
                                            <div class="col-lg-12 mt-4 text-center">
                                                <h6>Or Signup With</h6>
                                                <ul class="list-unstyled social-icon mb-0 mt-3">
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-github-circle" title="Github"></i></a></li>
                                                </ul><!--end icon-->
                                            </div>
                                            <div class="mx-auto">
                                                <p class="mb-0 mt-3"><small class="text-dark mr-2">Already have an account ?</small> <a href="/login" class="text-dark font-weight-bold">Sign in</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div> <!--end container-->
                </div>
            </div>
        </section><!--end section-->
        <!-- Hero End -->

        <!-- javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/plugins.js"></script>

        <!-- selectize js -->
        <script src="js/selectize.min.js"></script>

        <script src="js/jquery.nice-select.min.js"></script>

        <script src="js/app.js"></script>
    </body>

<!-- Mirrored from themesdesign.in/jobya/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 00:21:08 GMT -->
</html>
