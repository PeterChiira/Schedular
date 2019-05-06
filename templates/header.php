<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Schedular | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <!-- <link rel="stylesheet" href="../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css"> -->
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">




    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <!-- <link href="../assets/css/style.css" rel="stylesheet" /> -->
    <link href="../assets/css/main-style.css" rel="stylesheet" />
    <link href="../assets/css/datatables.css" rel="stylesheet"/>
    <link href="../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

            <header class="main-header">
                    <!-- Logo -->
                    <a href="dashboard.php" class="logo">
                      <!-- mini logo for sidebar mini 50x50 pixels -->
                      <span class="logo-mini"><b>S</b>CH</span>
                      <!-- logo for regular state and mobile devices -->
                      <span class="logo-lg"><b>Schedular</b></span>
                    </a>
                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class="navbar navbar-static-top">
                      <!-- Sidebar toggle button-->
                      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                      </a>
                
                      <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                          <!-- Messages: style can be found in dropdown.less-->
                          <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-envelope-o"></i>
                              <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                              <li class="header">You have 4 messages</li>
                              <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                  <li><!-- start message -->
                                    <a href="#">
                                      <div class="pull-left">
                                        <img src="../../assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                      </div>
                                      <h4>
                                        Support Team
                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                      </h4>
                                      <p>Why not buy a new awesome theme?</p>
                                    </a>
                                  </li>
                                  <!-- end message -->
                                  <li>
                                    <a href="#">
                                      <div class="pull-left">
                                        <!-- <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image"> -->
                                      </div>
                                      <h4>
                                        AdminLTE Design Team
                                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                      </h4>
                                      <p>Why not buy a new awesome theme?</p>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <div class="pull-left">
                                        <img src="../../assets/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                      </div>
                                      <h4>
                                        Developers
                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                      </h4>
                                      <p>Why not buy a new awesome theme?</p>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <div class="pull-left">
                                        <img src="../../assets/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                      </div>
                                      <h4>
                                        Sales Department
                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                      </h4>
                                      <p>Why not buy a new awesome theme?</p>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <div class="pull-left">

                                        <!-- <img src="../../assets/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image"> -->
                                      </div>
                                      <h4>
                                        Reviewers
                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                      </h4>
                                      <p>Why not buy a new awesome theme?</p>
                                    </a>
                                  </li>
                                </ul>
                              </li>
                              <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                          </li>
                          <!-- Notifications: style can be found in dropdown.less -->
                          <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-bell-o"></i>
                              <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                              <li class="header">You have 10 notifications</li>
                              <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                  <li>
                                    <a href="#">
                                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                      page and may cause design problems
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <i class="fa fa-users text-red"></i> 5 new members joined
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <i class="fa fa-user text-red"></i> You changed your username
                                    </a>
                                  </li>
                                </ul>
                              </li>
                              <li class="footer"><a href="#">View all</a></li>
                            </ul>
                          </li>
                         
                        <!-- <a > -->
                          <li class="dropdown user user-menu" >
                            <!-- <a  class="dropdown-toggle" data-toggle="dropdown"> -->
                              <a href=logout.php span class="hidden-xs">Sign Out</span>
                            </a>
                        
                          </li>                          
                        </ul>
                      </div>
                    </nav>
                  </header>


                   
    </div>

<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../assets/bower_components/raphael/raphael.min.js"></script>
<script src="../assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../assets/bower_components/moment/min/moment.min.js"></script>
<script src="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>


<!-- <script src="../assets/plugins/jquery-1.10.2.js"></script> -->
<script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../assets/plugins/pace/pace.js"></script>
<script src="../assets/scripts/siminta.js"></script>
<script src="../assets/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="../assets/plugins/morris/morris.js"></script>
<script src="../assets/scripts/dashboard-demo.js"></script>



</body>
</html>