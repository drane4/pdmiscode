<?php
require 'session.php';
                                    ini_set('display_errors', 0);
                                    $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `patientprofile` where `Hospital_Id` = '$_GET[id]' ") or die(mysqli_error());
                                    $fetch = $query ->fetch_array();
                                    $id = $fetch['Hospital_Id'];
 date_default_timezone_set('Asia/Manila');
?>

    <!DOCTYPE html>
    <html>

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>PDMIS</title>
        <!-- Favicon-->
        <link rel="icon" href="../../favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- Waves Effect Css -->
        <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />
          <!-- JQuery DataTable Css -->
    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- Morris Chart Css-->
        <link href="../../plugins/morrisjs/morris.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="../../css/style2.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../../css/themes/theme-indigo.css" rel="stylesheet" />
    </head>

    <body class="theme-indigo">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-indigo">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->

        <!-- #END# Search Bar -->
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <center>
                        <a class="navbar-brand" href="index.html">
                            <div class="title">Teresita Jalandoni Provincial Hospital <br> Dialysis Department</div>
                        </a>
                    </center>

                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <!-- Call Search -->

                        <!-- #END# Call Search -->
                        <!-- Notifications -->

                        <!-- #END# Notifications -->
                        <!-- Tasks -->

                        <!-- #END# Tasks -->
                        <!--  <li class="pull-right"><a class="navbar-brand" href="index.html">Sign-Out</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="../../images/nurse.png" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $name; ?>
                        </div>
                        <div class="email">
                            <?php echo $position; ?>
                        </div>
                        <div class="btn-group user-helper-dropdown">


                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">

                        <li class="header">MAIN NAVIGATION</li>

                        <li id="transaction">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">folder</i>
                                <span>Transaction</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="transaction">
                                    <a href="transaction.php">HemoTreatment</a>
                                </li>
                                <li id="Schedule">
                                    <a href="LT.php">Schedule</a>
                                </li>
                                <li id="Immunization">
                                    <a href="P.php">Immunization</a>
                                </li>
                                <li id="PatientMedicalHistory">
                                    <a href="D.php">Patient Medical History</a>
                                </li>
                            </ul>

                        </li>
                       <li id="profile" class="active">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">people</i>
                                <span>Profile</span>
                            </a>
                            <ul class="ml-menu" class ="active">
                                <li id="patientprofile">
                                    <a href="PatientProfile.php">Patient Profile</a>
                            <ul class="active" class="ml-menu">
                                <li id="laboratory" >
                                    <a href="laboratory.php">Hemodialysis Laboratory</a>
                                </li>
                                <li id="patientdrugprofile">
                                    <a href="PatientDrugProfile.php">Patient Drug Profile</a>
                                </li>
                                <li id="hemodialysisorder">
                                    <a href="hemodialysisorder.php">Hemodialysis Order</a>
                                </li>
                                <li id="dietaryassessment" >
                                    <a href="dietaryassessment.php">Dietary Assessment</a>
                                </li>
                                <li id="hemodialysisunit">
                                    <a href="hemodialysisunit.php">Hemodialysis Unit</a>
                                </li>
                                <li id="confinementproblem">
                                    <a href="confinementproblem.php">Confinement Record and Problem List</a>
                                </li>
                                <li id="hepatitisimmunization" class="active"   >
                                    <a href="Hepatitisimmunization.php">Hepatitis and Immunization Profile</a>
                                </li>
                           </ul>
                                </li>
                                <li id="employeeprofile">
                                    <a href="EmployeeProfile.php">Employee Profile</a>
                                </li>
                                
                                <li id="nephrologist">
                                    <a href="nephrologist.php">Nephrologist</a>
                                </li>
                                <li id="descriptors">
                                    <a href="D.php">Descriptors</a>
                                </li>  
                            </ul>
                        </li>
                        <li id="maintenance">

                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">settings</i>
                                <span>Maintenance</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="userprofile">
                                    <a href="UserProfile.php">User Profile</a>
                                </li>
                                <li id="systemmaintenance">
                                    <a href="maintenance.php">System Maintenance</a>
                                </li>
                            </ul>
                        </li>
                        <li id="reports">
                            <a href="R.php">
                                <i class="material-icons">assignment</i>
                                <span>Reports</span>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="material-icons">input</i>
                                <span>Exit</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2016 - 2017 <a href="javascript:void(0);">Dynamic Explorers</a>.
                    </div>

                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
            <!-- Right Sidebar -->
            <aside id="rightsidebar" class="right-sidebar">
                <a> <i class="material-icons">input</i></a>

                <!-- tab content (header right)-->
                <!-- tab content -->
            </aside>
            <!-- #END# Right Sidebar -->
        </section>


       <section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-indigo">
                                <h2>
                                    Hepatitis Profile
                                </h2>

                            </div>
                            <div class="body">
                                <form class="form-horizontal" form method="POST" action="saveuser.php">
                                    <div class="row clearfix">
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                            <label>Hospital ID</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" sclass="form-control" name="employeeid" value=" <?php echo $fetch['Hospital_Id']?>" placeholder=" <?php echo $fetch['Hospital_Id']?>" id="employeeid" readonly>
                                                </div>
                                                <span class="input-group-addon">
                                                 <button style="color:blue" type="button" class="btn btn-xs" data-toggle="modal" data-target="#patients">...</button>
                                                 
                                            </span>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row clearfix">
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                            <label>FullName</label>
                                        </div>
                                        <div class="col-lg-3 col-md-5 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" value=" <?php echo $fetch['P_Lname'].' '.$fetch['P_Fname'].' '.$fetch['P_Mname']?>" name="employeeid" value="" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label" style="margin-left:0px; margin-top:40px;">
                                            <label>Hepatitis Profile</label>
                                        </div>
                                         <div class="col-md-2 col-sm-5 col-xs-4 form-control-label" style="margin-left:-580px; margin-top:90px;">
                                            <label>HBsAg:<label>
                                        </div>
                                         <div class="col-lg-1 col-md-1 col-sm-2 col-xs-5 form-control-label"style="margin-left:-280px; margin-top:90px;">
                                            <label for="">Date</label>
                                        </div>
                                        <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3" style="margin-left:-200px; margin-top:90px;">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="date" class="form-control unstyled" name="birthdate" id="birthdate" value="" style="padding-right:0" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-1 col-sm-2 col-xs-3 form-control-label" style="margin-left:-100px; margin-top:90px;">
                                            <label for="email_address_2">Result</label>
                                        </div>
                                        <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3" style="margin-left: -14px; margin-top:90px;">
                                            <select class="form-control show-tick" id="gender" name="gender" title="&nbsp;">
                                                      
                                        <option value="R" <?php if($fetch['O_Frequency']== 'R') echo "selected"; ?>>R</option>
                                        <option Value="NR" <?php if($fetch['O_Frequency']== 'NR') echo "selected"; ?>>NR</option>  
                                            </select>
                                        </div>
                                         <div class="col-md-2 col-sm-5 col-xs-4 form-control-label" style="margin-left:-874px; margin-top:150px;">
                                            <label>Anti-HBs:<label>
                                        </div>
                                         <div class="col-lg-1 col-md-1 col-sm-2 col-xs-5 form-control-label"style="margin-left:-575px; margin-top:150px;">
                                            <label for="">Date</label>
                                        </div>
                                        <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3" style="margin-left:-495px; margin-top:150px;">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="date" class="form-control unstyled" name="birthdate" id="birthdate" value="" style="padding-right:0" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-1 col-sm-2 col-xs-3 form-control-label" style="margin-left:-393px; margin-top:150px;">
                                            <label for="email_address_2">Result</label>
                                        </div>
                                        <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3" style="margin-left: -14px; margin-top:3px;">
                                            <select class="form-control show-tick" id="gender" name="gender" title="&nbsp;">
                                                      
                                        <option value="R" <?php if($fetch['O_Frequency']== 'R') echo "selected"; ?>>R</option>
                                        <option Value="NR" <?php if($fetch['O_Frequency']== 'NR') echo "selected"; ?>>NR</option>  
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label" style="margin-left:-874px; margin-top:65px;">
                                            <label>HCV:</label>
                                        </div>
                                         <div class="col-lg-1 col-md-1 col-sm-2 col-xs-5 form-control-label"style="margin-left:-576px; margin-top:65px;">
                                            <label for="">Date</label>
                                        </div>
                                        <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3" style="margin-left:-495px; margin-top:65px;">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="date" class="form-control unstyled" name="birthdate" id="birthdate" value="" style="padding-right:0" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-1 col-sm-2 col-xs-3 form-control-label" style="margin-left:-393px; margin-top:65px;">
                                            <label for="email_address_2">Result</label>
                                        </div>
                                        <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3" style="margin-left: -14px; margin-top:12px;">
                                            <select class="form-control show-tick" id="gender" name="gender" title="&nbsp;">
                                                      
                                        <option value="R" <?php if($fetch['O_Frequency']== 'R') echo "selected"; ?>>R</option>
                                        <option Value="NR" <?php if($fetch['O_Frequency']== 'NR') echo "selected"; ?>>NR</option>  
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label" style="margin-left:-874px; margin-top:75px;">
                                            <label>HIV:</label>
                                        </div>
                                         <div class="col-lg-1 col-md-1 col-sm-2 col-xs-5 form-control-label"style="margin-left:-576px; margin-top:75px;">
                                            <label for="">Date</label>
                                        </div>
                                        <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3" style="margin-left:-500px; margin-top:75px;">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="date" class="form-control unstyled" name="birthdate" id="birthdate" value="" style="padding-right:0" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-1 col-sm-2 col-xs-3 form-control-label" style="margin-left:-393px; margin-top:75px;">
                                            <label for="email_address_2">Result</label>
                                        </div>
                                        <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3" style="margin-left: -14px; margin-top:12px;">
                                            <select class="form-control show-tick" id="gender" name="gender" title="&nbsp;">
                                                      
                                        <option value="R" <?php if($fetch['O_Frequency']== 'R') echo "selected"; ?>>R</option>
                                        <option Value="NR" <?php if($fetch['O_Frequency']== 'NR') echo "selected"; ?>>NR</option>  
                                            </select>
                                        </div>
                                    
                                            </label>
                                                </div>
                                             </label>
                                                </div>
                                             </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
           

                                  
      







        </section>


        <!-- Jquery Core Js -->


        <script src="../../plugins/jquery/jquery.min.js"></script>
        <script src="../../plugins/jquery/jquery.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="../../plugins/node-waves/waves.js"></script>

        <!-- Jquery CountTo Plugin Js -->
        <script src="../../plugins/jquery-countto/jquery.countTo.js"></script>

        <!-- Morris Plugin Js -->
        <script src="../../plugins/raphael/raphael.min.js"></script>
        <script src="../../plugins/morrisjs/morris.js"></script>

        <!-- ChartJs -->
        <script src="../../plugins/chartjs/Chart.bundle.js"></script>

     <!-- Jquery DataTable Plugin Js -->
        <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
         <script src="../../js/pages/tables/jquery-datatable.js"></script>
        <!-- Sparkline Chart Plugin Js -->
        <script src="../../plugins/jquery-sparkline/jquery.sparkline.js"></script>

 
  
        <!-- Custom Js -->
        <script src="../../js/admin.js"></script>
        <script src="../../js/pages/index.js"></script>
        
        <!-- Demo Js -->
        <script src="../../js/demo.js"></script>
        <script>
            $(window).load(function() {
                var module = '<?php echo $transaction_a; ?>';
                var module1 = '<?php echo $patientprofile_a; ?>';
                var module2 = '<?php echo $employeeprofile_a; ?>';
                var module3 = '<?php echo $labtest_a; ?>';
                var module4 = '<?php echo $nephrologist_a; ?>';
                var module5 = '<?php echo $descriptors_a; ?>';
                var module6 = '<?php echo $userprofile_a; ?>';
                var module7 = '<?php echo $maintenance_a; ?>';
                var module8 = '<?php echo $reports_a; ?>';
                var module8 = '<?php echo $hemodialysisunit_a; ?>';
                var module8 = '<?php echo $dietaryassessment_a; ?>';
                var module8 = '<?php echo $confinementproblem_a; ?>';
                
                if (module == '0') {
                    $('#transaction').hide();
                }
                 if (module == '0') {
                    $('#hemodialysisunit').hide();
                }
                if (module == '0') {
                    $('#confinementproblem').hide();
                }
                 if (module == '0') {
                    $('#dietaryassessment').hide();
                }
                if (module1 == '0') {
                    $('#patientprofile').hide();
                }
                if (module2 == '0') {
                    $('#employeeprofile').hide();
                }
                if (module3 == '0') {
                    $('#labtest').hide();
                }
                if (module4 == '0') {
                    $('#nephrologist').hide();
                }
                if (module5 == '0') {
                    $('#descriptors').hide();
                }
                if (module6 == '0') {
                    $('#userprofile').hide();
                }
                if (module7 == '0') {
                    $('#systemmaintenance').hide();
                }
                if (module8 == '0') {
                    $('#reports').hide();
                }
                if (module1 == '0' && module2 == '0' && module3 == '0' && module4 == '0' && module5 == '0') {
                    $('#profile').hide();
                }
                if (module6 == '0' && module7 == '0') {
                    $('#maintenance').hide();
                }
            });
        </script>

    </body>

    </html>