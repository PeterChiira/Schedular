
<html>

<body>


        <script type="text/javascript">
            $(document).ready(function () {
                setTimeout(function(){
                    $(".alert").fadeTo(700,0).slideUp(700, function(){
                        $(this).remove();
                    });
            },2000);
            });		
                
        </script>

<?php include("header.php")?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../images/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
       <!-- </div><div id="fName"><?=$_SESSION['fName']?></div></div> -->

          <!-- <p>User</p> -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <span class="pull-right-container">
             <!-- ? <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
          
        </li>
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Timetable</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="dean.php"><i class="fa fa-circle-o"></i> Manage</a></li>
            <li><a href="allocate.php"><i class="fa fa-circle-o"></i> Allocate</a></li>
            <li><a href="index.php"><i class="fa fa-circle-o"></i> View</a></li>

          </ul>
        </li>
       
        <li><a href="manage.php?action=batches"><i class="fa fa-copy"></i> <span>Batches</span></a></li>

        <li><a href="manage.php?action=rooms"><i class="fa fa-home"></i> <span>Rooms</span></a></li>
        <!-- <li class="limenu"><a href="manage.php?action=rooms">Manage Rooms</a></li> -->


        <li><a href="faculty.php?action=courses"><i class="fa fa-laptop"></i> <span>Courses</span></a></li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Schools/Depts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="manage.php?action=faculty"><i class="fa fa-circle-o"></i> Faulty</a></li>
            <li><a href="manage.php?action=departments"><i class="fa fa-circle-o"></i> Departments</a></li>

          </ul>
        </li>
        <li><a href="manage.php?action=students"><i class="fa fa-users"></i> <span>Students</span></a></li>

        <li><a href="manage.php?action=lecturers"><i class="fa fa-user"></i> <span>Lecturers</span></a></li>

       
        <li><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

</body>

</html>