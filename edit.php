<?php
include 'functions.php';
// include 'yolkpay.php';
// $yolk = new YolkPay();

checker();
$user = members();
//  var_dump($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">


<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:18:05 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Profile | GNACC -  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon2.ico">

    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <?php include "navbar.php" ?>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Logo Light -->
            <a href="index-2.php" class="logo logo-light">
                <span class="logo-lg">
                    <img src="assets/images/logo.png" alt="logo" height="22">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="small logo" height="22">
                </span>
            </a>

            <!-- Logo Dark -->
            <a href="index-2.php" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="dark logo" height="22">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo-dark-sm.png" alt="small logo" height="22">
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <button type="button" class="bg-transparent button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                <i class="ri-checkbox-blank-circle-line align-middle"></i>
            </button>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!-- Leftbar User -->
                <div class="leftbar-user">
                    <a href="pages-profile.php">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                        <span class="leftbar-user-name"><strong><?php echo $user['name']; ?></strong></span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <?php include "sidebar.php" ?>

                <!-- Help Box -->
                <!-- <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-end close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="assets/images/svg/help-icon.svg" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Unlimited Access</h5>
                        <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-soft-dark btn-sm">Upgrade</a>
                    </div> -->
                <!-- end Help Box -->

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">GNACC</a></li>
                                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Edit Info</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Edit Info</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->



                    <!-- Form row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Edit Info</h4>
                                    <p class="text-muted font-14">
                                        Edit Your Info
                                    </p>

                                    <!-- <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="#form-row-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#form-row-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                Code
                                            </a>
                                        </li>
                                    </ul>  -->
                                    <!-- end nav -->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="form-row-preview">
                                        <form action="dashboard.php" novalidate method="get" class="register" enctype='multipart/form-data'>
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Title</label>
                                    <select class="form-select" id="example-select" name="title">
                                        <option selected></option>
                                        <option>Rev.</option>
                                        <option>Mr.</option>
                                        <option>Mrs.</option>
                                        <option>Miss</option>
                                        <option>Dr.</option>
                                        <option>Sis.</option>
                                        <option>Fr.</option>
                                        <option>Ps.</option>
                                        <option>Others</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="fullname" class="form-label">First Name</label>
                                    <input class="form-control" type="text" id="fullname" placeholder="Enter your First Name" required name="fname">
                                </div>
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Last Name</label>
                                    <input class="form-control" type="text" id="fullname" placeholder="Enter your Last Name" required name="lname">
                                </div>
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Other Names</label>
                                    <input class="form-control" type="text" id="fullname" placeholder="Other Name" required name="oname">
                                </div>
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Gender</label>
                                    <select class="form-select" id="example-select" name="gender">
                                        <option selected></option>
                                        <option>Male</option>
                                        <option>Female</option>

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="example-date" class="form-label">Date</label>
                                    <input class="form-control" id="example-date" type="date" name="tdate">
                                </div>



                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Contact Number</label>
                                    <input class="form-control" type="text" id="contact" required placeholder="Enter your phone Number" name="contact">
                                </div>
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">WhatsApp Number</label>
                                    <input class="form-control" type="text" id="whatsapp" required placeholder="Enter your WhatsApp Number" name="wnumber">
                                </div>

                                <div class="mb-3">
                                    <label for="Emergency Contact Number" class="form-label">Emergency Contact Number</label>
                                    <input class="form-control" type="text" id="emergency" required placeholder="Enter your Emergency contact Number" name="enumber">
                                </div>

                                <div class="mb-3">
                                    <label for="Emergency Contact Number" class="form-label">Residential Digital Address</label>
                                    <input class="form-control" type="text" id="emergency" required placeholder="Enter your GPS Address" name="address">
                                </div>

                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Occupation</label>
                                    <input class="form-control" type="text" id="occupation" required placeholder="Enter your Occupation" name="occupation">
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Marital Status</label>
                                    <select class="form-select" id="example-select" name="mstatus">
                                        <option selected></option>
                                        <option>Single</option>
                                        <option>Married</option>

                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Region</label>
                                    <select class="form-select" id="example-select" name="region">
                                        <option selected value="">
                                        </option>

                                        <option value="Greater Accra">Greater Accra</option>
                                        <option value="Ashanti Region">Ashanti Region</option>
                                        <option value="Ahafo Region">Ahafo Region</option>
                                        <option value="Bono Region">Bono Region</option>
                                        <option value="Bono East Region">Bono East Region</option>
                                        <option value="Central Region">Central Region</option>
                                        <option value="Eastern Region">Eastern Region</option>
                                        <option value="Northern Region">Northern Region</option>
                                        <option value="North East Region">North East Region</option>
                                        <option value="Oti Region">Oti Region</option>
                                        <option value="Savannah Region">Savannah Region</option>
                                        <option value="Upper East Region">Upper East Region</option>
                                        <option value="Upper West Region">Upper West Region</option>
                                        <option value="Volta Region">Volta Region</option>
                                        <option value="Western Region">Western Region</option>
                                        <option value="Western North Region">Western North Region</option>

                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Nationality</label>
                                    <select class="form-select" id="example-select" name="nationality">
                                        <option selected></option>
                                        <option>Ghanaian</option>
                                        <option>Foreigner</option>

                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="example-fileinput" class="form-label">Passport Size Picture</label>
                                    <input type="file" id="example-fileinput" class="form-control" name="passport">
                                </div>

                                <div id="form-row-code" class="mb-3">
                                    <label for="example-select" class="form-label">Educational Level</label>
                                    <select class="form-select" id="example-select" name="edulevel">
                                        <option selected></option>
                                        <option>Senior High Certificate</option>
                                        <option>Diploma Certificate</option>
                                        <option>Bachelor's Degree</option>
                                        <option>Master's Degree</option>
                                        <option>Doctorate Degree</option>
                                        <option>Others</option>

                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Specialised Area Of Counselling</label>
                                    <select class="form-select" id="example-select" name="area">
                                        <option selected></option>
                                        <option >Marriage and Family</option>
                                        <option >Guidance and Career</option>


                                        <option >Rehabilitaion</option>
                                        <option >Mental Health</option>
                                        <option >Substance Abuse</option>


                                        <option >School and Careets</option>
                                        <option >Others</option>

                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Do you have Physical Challenge(s)?</label>
                                    <select class="form-select" id="example-select" name="challenge">
                                        <option selected></option>
                                        <option>Yes</option>
                                        <option>No</option>


                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">T-Shirt Colour Preference</label>
                                    <select class="form-select" id="example-select" name="color">
                                        <option selected></option>
                                        <option>Any</option>
                                        <option>White</option>
                                        <option>Blue</option>
                                        <option>Black</option>
                                        <option>Orange</option>


                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">T-Shirt Size Preference</label>
                                    <select class="form-select" id="example-select" name="size">
                                        <option selected></option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                        <option>XXL</option>
                                        <option>XXXL</option>


                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Are you a Student?</label>
                                    <select class="form-select" id="example-select" name="student">
                                        <option selected></option>
                                        <option>Yes</option>
                                        <option>No</option>


                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Name of Institution / School</label>
                                    <input class="form-control" type="text" id="school" required placeholder="Enter the Name of your Institution" name="school">
                                </div>
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Programme Of Study</label>
                                    <input class="form-control" type="text" id="programme" required placeholder="Enter your programme of study" name="programme">
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="datepicker-preview">
                                        <div class="col-lg-6">
                                            <div class="mb-3 position-relative" id="datepicker6">
                                                <label class="form-label">Year Of Entry</label>
                                                <input type="text" class="form-control" data-provide="datepicker" data-date-min-view-mode="2" data-date-container="#datepicker6" name="year">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-fileinput" class="form-label">Upload Student ID Card</label>
                                            <input type="file" id="example-fileinput" class="form-control" name="idcard">
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-select" class="form-label">How did you hear/Know of this association</label>
                                            <select class="form-select" id="example-select" name="heard">
                                                <option selected></option>
                                                <option>GNACC Website</option>
                                                <option>Facebook</option>
                                                <option>WhatsApp</option>
                                                <option>Instagram</option>
                                                <option>Friend</option>
                                                <option>News Papers</option>
                                                <option>TUCEE Institute of Counselling and Technology Website</option>


                                            </select>
                                        </div>









                                        <!-- <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                                            <small id="emailHelp" class="form-text text-muted">Please make sur you remember the password to the email you are providing</small>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="password" class="form-control" placeholder="Enter your password" name="password">
                                                <div class="input-group-text" data-password="false">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Confirm Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="password" class="form-control" placeholder="Enter your password" name="repass">
                                                <div class="input-group-text" data-password="false">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div> -->

                                        <!-- <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                        <label class="form-check-label" for="checkbox-signup">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                    </div>
                                </div> -->

                                        <div class="mb-3 text-center">
                                            <button class="btn btn-primary" type="submit"> Update </button>
                                        </div>

                            </form>
                                        </div> <!-- end preview-->

                                        <div class="tab-pane" id="form-row-code">
                                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form&gt;
                                                            &lt;div class=&quot;row g-2&quot;&gt;
                                                                &lt;div class=&quot;mb-3 col-md-6&quot;&gt;
                                                                    &lt;label for=&quot;inputEmail4&quot; class=&quot;form-label&quot;&gt;Email&lt;/label&gt;
                                                                    &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail4&quot; placeholder=&quot;Email&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;mb-3 col-md-6&quot;&gt;
                                                                    &lt;label for=&quot;inputPassword4&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
                                                                    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword4&quot; placeholder=&quot;Password&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label for=&quot;inputAddress&quot; class=&quot;form-label&quot;&gt;Address&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress&quot; placeholder=&quot;1234 Main St&quot;&gt;
                                                            &lt;/div&gt;
                                                            
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label for=&quot;inputAddress2&quot; class=&quot;form-label&quot;&gt;Address 2&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress2&quot; placeholder=&quot;Apartment, studio, or floor&quot;&gt;
                                                            &lt;/div&gt;
                
                                                            &lt;div class=&quot;row g-2&quot;&gt;
                                                                &lt;div class=&quot;mb-3 col-md-6&quot;&gt;
                                                                    &lt;label for=&quot;inputCity&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
                                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputCity&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;mb-3 col-md-4&quot;&gt;
                                                                    &lt;label for=&quot;inputState&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
                                                                    &lt;select id=&quot;inputState&quot; class=&quot;form-select&quot;&gt;
                                                                        &lt;option&gt;Choose&lt;/option&gt;
                                                                        &lt;option&gt;Option 1&lt;/option&gt;
                                                                        &lt;option&gt;Option 2&lt;/option&gt;
                                                                        &lt;option&gt;Option 3&lt;/option&gt;
                                                                    &lt;/select&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;mb-3 col-md-2&quot;&gt;
                                                                    &lt;label for=&quot;inputZip&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
                                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputZip&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;mb-2&quot;&gt;
                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck11&quot;&gt;
                                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;customCheck11&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                
                                                            &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
                                                        &lt;/form&gt;  
                                                    </span>
                                                </pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->

                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <?php include "footer.php" ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
            <h5 class="text-white m-0">Theme Settings</h5>
            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="card mb-0 p-3">
                    <h5 class="mt-0 font-16 fw-bold mb-3">Choose Layout</h5>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                                <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Vertical</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-flex p-1 align-items-center border-bottom">
                                            <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                            <span class="d-block border border-3 ms-auto"></span>
                                            <span class="d-block border border-3 ms-1"></span>
                                            <span class="d-block border border-3 ms-1"></span>
                                            <span class="d-block border border-3 ms-1"></span>
                                        </span>
                                        <span class="bg-light d-block p-1"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Horizontal</h5>
                        </div>
                    </div>

                    <h5 class="my-3 font-16 fw-bold">Color Scheme</h5>

                    <div class="colorscheme-cardradio">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-theme" id="layout-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-color-light">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-theme" id="layout-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100 bg-black" for="layout-color-dark">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light-lighten d-flex h-100 flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-light-lighten rounded mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-lighten d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h5 class="my-3 font-16 fw-bold">Layout Mode</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-fluid" value="fluid">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-fluid">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Fluid</h5>
                            </div>
                            <div class="col-4" id="layout-boxed">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-boxed" value="boxed">
                                    <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-mode-boxed">
                                        <span class="d-flex h-100 border-start border-end">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end flex-column p-1">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Boxed</h5>
                            </div>

                            <div class="col-4" id="layout-detached">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="data-layout-detached" value="detached">
                                    <label class="form-check-label p-0 avatar-md w-100" for="data-layout-detached">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 align-items-center border-bottom">
                                                <span class="d-block p-1 bg-dark-lighten rounded me-1"></span>
                                                <span class="d-block border border-3 ms-auto"></span>
                                                <span class="d-block border border-3 ms-1"></span>
                                                <span class="d-block border border-3 ms-1"></span>
                                                <span class="d-block border border-3 ms-1"></span>
                                            </span>
                                            <span class="d-flex h-100 p-1 px-2">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column p-1 px-2">
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100 mb-1"></span>
                                                        <span class="d-block border border-3 w-100"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                        </span>

                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Detached</h5>
                            </div>
                        </div>
                    </div>

                    <h5 class="my-3 font-16 fw-bold">Topbar Color</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-light" value="light">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                    <span class="d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                                <span class="d-block border border-3 w-100 mb-1"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-dark d-block p-1"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                        </div>
                    </div>

                    <div id="sidebar-color">
                        <h5 class="my-3 font-16 fw-bold">Sidebar Color</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-color" id="leftbar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-light">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-color" id="leftbar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-dark">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-dark d-flex h-100 flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-light-lighten rounded mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-color" id="leftbar-color-default" value="default">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-color-default">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-primary bg-gradient d-flex h-100 flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-light-lighten rounded mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                    <span class="d-block border opacity-25 border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Brand</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h5 class="my-3 font-16 fw-bold">Sidebar Size</h5>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="leftbar-size-default" value="default">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-default">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Default</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="leftbar-size-compact" value="compact">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-compact">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column p-1">
                                                    <span class="d-block p-1 bg-dark-lighten rounded mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Compact</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="leftbar-size-small" value="condensed">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-small">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column">
                                                    <span class="d-block p-1 bg-dark-lighten mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Condensed</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="leftbar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-small-hover">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 border-end  flex-column">
                                                    <span class="d-block p-1 bg-dark-lighten mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                    <span class="d-block border border-3 w-100 mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Hover View</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="leftbar-size-full" value="full">
                                    <label class="form-check-label p-0 avatar-md w-100" for="leftbar-size-full">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="d-flex h-100 border-end  flex-column">
                                                    <span class="d-block p-1 bg-dark-lighten mb-1"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Full Layout</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h5 class="my-3 font-16 fw-bold">Layout Position</h5>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>

                    <div id="sidebar-user">
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <label class="font-16 fw-bold m-0" for="sidebaruser-check">Sidebar User Info</label>
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" name="sidebar-user" id="sidebaruser-check">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary w-100">Buy Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- Chart.js -->
    <script src="assets/vendor/chart.js/chart.min.js"></script>

    <!-- Profile Demo App js -->
    <script src="assets/js/pages/demo.profile.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 09:18:07 GMT -->

</html>