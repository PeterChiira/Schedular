<?php



require_once('functions.php');
if(!sessionCheck('level','dean'))
{
    header("Location: ./login.php");
    die();
}
require_once ('connect_db.php');
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Schedular</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
  <link rel="stylesheet" type="text/css" href="css/chosen.css">
  <script type="text/javascript" src="js/jquery.min.js" ></script>
  <script type="text/javascript" src="js/form.js"></script>
  <script type="text/javascript" src="js/chosen.js"></script>
  <script>
  $(function()
  {
      $("#main_menu a").each(function() {
          if($(this).prop('href') == window.location.href || window.location.href.search($(this).prop('href'))>-1)  
          {
              $(this).parent().addClass('current');
              document.title+= " | " + this.innerHTML;
              $("#shadowhead").html(this.innerHTML);
              return false;
          }
      })
      $("select").chosen();
      $("#fac_level").change(function(){
        $("input[value="+ $("option:selected",this).attr('class') +"]",this.parentNode).attr('checked','checked');
      })
  })
  </script>
</head>

<body style="white-space:nowrap">
  <div id="header">
    <div id="account_info">
      <div class="infoTab"><div class="fixer"></div><div class="dashIcon usr"></div><div id="fName"><?=$_SESSION['fName']?></div></div>
      <div class="infoTab"><div class="fixer"></div><a href="logout.php" id="logout"><div class="dashIcon logout"></div><div>Sign out</div></a></div>
    </div>
    <div id="header_text">Schedular</div>
  </div>
  <div id="shadowhead"></div>
  <div id="nav_bar">
    <ul class="main_menu" id="main_menu">
    <li class="limenu"><a href="dashboard.php">Home/ Control Panel</a></li>

      <!-- <li class="limenu"><a href="dashboard.php">Home</a></li>

      <li class="limenu"><a href="dean.php">Manage Timetables</a></li>
      <li class="limenu"><a href="manage.php?action=departments">Manage Departments</a></li>
      <li class="limenu"><a href="manage.php?action=faculty">Manage Faculty</a></li>
      <li class="limenu"><a href="manage.php?action=batches">Manage Batches</a></li>
      <li class="limenu"><a href="manage.php?action=rooms">Manage Rooms</a></li>
      <li class="limenu"><a href="faculty.php">Manage Courses</a></li>
      <li class="limenu"><a href="allocate.php">Allocate Timetable</a></li>
      <li class="limenu"><a href="./">View Timetable</a></li> -->
    </ul>
  </div>
  <div id="content">
  <?php if(valueCheck('action','faculty')) : ?>
    <div class="box">
      <div class="boxbg"></div>
      <div class="avatar"><div class="icon add"></div></div>
      <div class="title">Add Faculty</div>
      <div class="elements">
        <form method="post" action="register.php">
          <input type="text" name="fullName" class="styled uInfo" required pattern=".{6,50}" title="6 to 50 characters" placeholder="Full Name" />
          <input type="text" name="uName" class="styled username" required pattern="[^ ]{3,25}" title="3 to 25 characters without spaces" placeholder="Username" />
          <select  name="dept" class="stretch" data-placeholder="Choose Department..." required>
            <option label="Choose Department..."></option>
            <?php
            foreach($db->query('SELECT * FROM depts') as $dept)
              echo "<option value=\"{$dept['dept_code']}\">{$dept['dept_name']} ({$dept['dept_code']})</option>";
            ?>
          </select>
          <input  type="password" name="pswd" class="styled pwd" required pattern="[^ ]{8,32}" title="8 to 32 characters without spaces" placeholder="Password" />
          <input type="password" class="styled pwd" required pattern="[^ ]{8,32}" title="8 to 32 characters without spaces" placeholder="Confirm password" />
          <div style="text-align: justify;height: 18px">
            <div class="inline">
              <input type="radio" class="styled" name="level" id="addFaculty" value="faculty" checked><label for="addFaculty">Faculty</label>
            </div>
            <div class="inline">
              <input type="radio" class="styled" name="level" id="addHOD" value="hod"><label for="addHOD">HOD</label>
            </div>
            <div class="inline">
              <input type="radio" class="styled" name="level" id="addDean" value="dean"><label for="addDean">Dean</label>
            </div>
            <span class="inline stretch"></span>
          </div>
          <div class="blocktext info"></div>
          <div class="center button">
            <button>Register</button>
          </div>
        </form>
      </div>
    </div>
    <div class="box">
      <div class="boxbg"></div>
      <div class="avatar"><div class="icon key"></div></div>
      <div class="title">Change Faculty Access</div>
      <div class="elements">
        <form method="post" action="register.php?action=changeLevel">
          <select name="uName" id="fac_level" class="updateSelect stretch" data-placeholder="Choose Faculty..." required>
            <option label="Choose Faculty..."></option>
            <?php
            foreach($db->query('SELECT * FROM faculty') as $fac)
              echo "<option value=\"{$fac['uName']}\" class=\"{$fac['level']}\">{$fac['fac_name']} ({$fac['uName']})</option>"
            ?>
          </select>
          <div style="text-align: justify;height: 18px">
            <div class="inline">
              <input type="radio" class="styled" name="level" id="changeFaculty" value="faculty"><label for="changeFaculty">Faculty</label>
            </div>
            <div class="inline">
              <input type="radio" class="styled" name="level" id="changeHOD" value="hod"><label for="changeHOD">HOD</label>
            </div>
            <div class="inline">
              <input type="radio" class="styled" name="level" id="changeDean" value="dean"><label for="changeDean">Dean</label>
            </div>
            <span class="inline stretch"></span>
          </div>
          <div class="blocktext info"></div>
          <div class="center button">
            <button>Change</button>
          </div>
        </form>
      </div>
    </div>
    <div class="box">
      <div class="boxbg"></div>
      <div class="avatar"><div class="icon remove"></div></div>
      <div class="title">Delete Faculty</div>
      <div class="elements">
        <form method="post" action="register.php?action=deleteFaculty" class="confirm">
          <select name="uName" class="updateSelect stretch" data-placeholder="Choose Faculty..." required>
            <option label="Choose Faculty..."></option>
            <?php
            foreach($db->query('SELECT * FROM faculty') as $fac)
              echo "<option value=\"{$fac['uName']}\">{$fac['fac_name']} ({$fac['uName']})</option>"
            ?>
          </select>
          <input type="hidden" id="confirm_msg" value="Are you sure you want to delete the selected faculty?">
          <div class="blocktext info"></div>
          <div class="center button">
            <button>Delete</button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-sm-10 col-sm-offset-1">

    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <div class="panel panel-primary" class="col-sm-10 col-sm-offset-1">
      <div class="panel-body">
      <div class="table-responsive table-sorting">

        <table class=" table table-bordered table-striped" id="tSortable22">
                      <thead>
                          <tr style="width:auto">
                            <th style="width:1%">Username</th>
                            <th style="width:1%">Faculty Name</th>
                            <th style="width:1%">Level</th>
                            <th style="width:1%">Dept. Code</th>
                            <th style="width:1%">Date Registered</th>
                          </tr>
                      </thead>
                      <tbody>
          <?php

            
            $query = $db->prepare("SELECT * FROM faculty");
            $query->execute([$_GET['uName'],$_GET['fac_name'],$_GET['level'],$_GET['dept_code'],$_GET['dateRegd']]);
            while ($row = $query->fetch(PDO::FETCH_ASSOC))
            {                
            echo '<tr>
                    <td>'.$row['uName'].'</td>
                    <td>'.$row['fac_name'].'</td>
                    <td>'.$row['level'].'</td>
                    <td>'.$row['dept_code'].'</td>
                    <td>'.$row['dateRegd'].'</td>

                  </tr>';
            }
            
          ?>
                      </tbody>
                  </table>
              </div>
    
          </div>
<script src="../assets/js/dataTable/jquery.dataTables.min.js"></script>
  <?php elseif(valueCheck('action','departments')) : ?>
    <div class="box">
      <div class="boxbg"></div>
      <div class="information"><div class="icon add"></div></div>
      <div class="title">Add Department</div>
      <div class="elements">
        <form method="post" action="depts.php?action=add">
          <input type="text" name="dept_code" class="styled details" required pattern="[^ ]{2,5}" title="2 to 5 characters" placeholder="Department Code" />
          <input type="text" name="dName" class="styled details" required pattern=".{6,50}" title="6 to 50 characters" placeholder="Department Name" />
          <div class="blocktext info"></div>
          <div class="center button">
            <button>Add</button>
          </div>
        </form>
      </div>
    </div>
    <div class="box">
      <div class="boxbg"></div>
      <div class="information"><div class="icon remove"></div></div>
      <div class="title">Delete Department</div>
      <div class="elements">
        <form method="post" action="depts.php?action=delete">
          <select name="dept_code" class="updateSelect stretch"  data-placeholder="Choose Department..." required>
            <option label="Choose Department..."></option>
            <?php
            foreach($db->query('SELECT * FROM depts') as $dept)
              echo "<option value=\"{$dept['dept_code']}\">{$dept['dept_name']} ({$dept['dept_code']})</option>";
            ?>
          </select>
          <div class="blocktext info"></div>
          <div class="center button">
            <button>Delete</button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-sm-10 col-sm-offset-1">

    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <div class="panel panel-primary" class="col-sm-10 col-sm-offset-1">
          <div class="panel-body">
          <div class="table-responsive table-sorting">

            <table class=" table table-bordered table-striped" id="tSortable22">
                          <thead>
                              <tr style="width:auto">
                <th style="width:1%">Dept. Code</th>
                <th style="width:1%">Dept. Name</th>

                
                              </tr>
                          </thead>
                          <tbody>
              <?php

                
                $query = $db->prepare("SELECT * FROM depts");
                $query->execute([$_GET['dept_code'],$_GET['dept_name']]);
                while ($row = $query->fetch(PDO::FETCH_ASSOC))
                {                
                echo '<tr>
                        <td>'.$row['dept_code'].'</td>
                        <td>'.$row['dept_name'].'</td>

                      </tr>';
                }
                
              ?>
                          </tbody>
                      </table>
                  </div>
        
              </div>
  <script src="../assets/js/dataTable/jquery.dataTables.min.js"></script>
  
  <?php elseif(valueCheck('action','batches')) : ?>
    <div class="box">
      <div class="boxbg"></div>
      <div class="information"><div class="icon add"></div></div>
      <div class="title">Add Batch</div>
      <div class="elements">
        <form method="post" action="batches.php?action=add">
          <input type="text" name="batch_name" class="styled uInfo" required pattern="[^:]{2,30}" title="2 to 30 alphanumeric characters" placeholder="Batch Name" />
          <select name="dept" class="stretch" data-placeholder="Choose Department..." required>
            <option label="Choose Department..."></option>
            <?php
            foreach($db->query('SELECT * FROM depts') as $dept)
              echo "<option value=\"{$dept['dept_code']}\">{$dept['dept_name']} ({$dept['dept_code']})</option>";
            ?>
          </select>
          <input type="text" name="size" class="styled details" required pattern="[0-9]{1,3}" title="Number less than 1000, this will be used to suggest rooms" placeholder="Batch Size" />
          <div class="blocktext info"></div>
          <div class="center button">
            <button>Add</button>
          </div>
        </form>
      </div>
    </div>
    <div class="box">
      <div class="boxbg"></div>
      <div class="information"><div class="icon remove"></div></div>
      <div class="title">Delete Batch</div>
      <div class="elements">
        <form method="post" action="batches.php?action=delete" class="confirm">
          <select name="batch" class="updateSelect stretch"  data-placeholder="Choose Batch..." required>
            <option label="Choose Batch..."></option>
            <?php
            foreach($db->query('SELECT * FROM batches') as $batch)
              echo "<option value=\"{$batch['batch_name']} : {$batch['batch_dept']}\">{$batch['batch_name']} : {$batch['batch_dept']} ({$batch['size']})</option>";
            ?>
          </select>
          <input type="hidden" id="confirm_msg" value="Are you sure you want to delete the selected batch?">
          <div class="blocktext info"></div>
          <div class="center button">
            <button>Delete</button>
          </div>
 
    
        </form>
      </div>
    </div>
    <div class="col-sm-10 col-sm-offset-1">

    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <div class="panel panel-primary" class="col-sm-10 col-sm-offset-1">
          <div class="panel-body">
          <div class="table-responsive table-sorting">

            <table class=" table table-bordered table-striped" id="tSortable22">
                          <thead>
                              <tr style="width:auto">
                <th style="width:1%">Batch No.</th>
                <th style="width:1%">Department</th>

                <th style="width:1%">Size</th>
                
                              </tr>
                          </thead>
                          <tbody>
              <?php

                
                $query = $db->prepare("SELECT * FROM batches");
                $query->execute([$_GET['batch_name'],$_GET['batch_dept'],$_GET['size']]);
                while ($row = $query->fetch(PDO::FETCH_ASSOC))
                {                
                echo '<tr>
                        <td>'.$row['batch_name'].'</td>
                        <td>'.$row['batch_dept'].'</td>
                        <td>'.$row['size'].'</td>

                      </tr>';
                }
                
              ?>
                          </tbody>
                      </table>
                  </div>
        
              </div>
  <script src="../assets/js/dataTable/jquery.dataTables.min.js"></script>
  <?php elseif (valueCheck('action','students')) : ?>
    <div class="box">
      <div class="boxbg"></div>
      <div class="information"><div class="icon add"></div></div>
      <div class="title">Add Students</div>
      <div class="elements">
        <form method="post" action="students.php?action=add">
          <select name="course_id" class="stretch" data-placeholder="Choose Course ID..." required>
            <option label="Choose Course..."></option>
            <?php
            foreach($db->query('SELECT * FROM courses') as $cId)
              echo "<option value=\"{$cId['course_id']}\">{$cId['course_name']} ({$cId['course_id']})</option>";
            ?>
          </select>
          <!-- <input type="text" name="department" class="styled uInfo" required pattern="[^:]{2,30}" title="2 to 30 alphanumeric characters" placeholder="Batch Name" /> -->
          <select name="dept" class="stretch" data-placeholder="Choose Department..." required>
            <option label="Choose Department..."></option>
            <?php
            foreach($db->query('SELECT * FROM depts') as $dept)
              echo "<option value=\"{$dept['dept_code']}\">{$dept['dept_name']} ({$dept['dept_code']})</option>";
            ?>
          </select>
          <input type="email" name="email" class="styled details" placeholder="Email" />

          <input type="text" name="total" class="styled details" required pattern="[0-9]{1,3}" title="Number less than 1000, this will be used to suggest rooms" placeholder=" Total Number" />
          <div class="blocktext info"></div>
          <div class="center button">
            <button>Add</button>
          </div>
        </form>
      </div>
    </div>
    <div class="box">
      <div class="boxbg"></div>
      <div class="information"><div class="icon remove"></div></div>
      <div class="title">Delete Students</div>
      <div class="elements">
        <form method="post" action="students.php?action=delete" class="confirm">
          <select name="course_id" class="updateSelect stretch"  data-placeholder="Choose course code..." required>
            <option label="Choose course code..."></option>
            <?php
            foreach($db->query('SELECT * FROM students') as $student)
              echo "<option value=\"{$student['course_id']} : {$student['course_id']}\">{$student['course_id']}</option>";
            ?>
          </select>
          <input type="hidden" id="confirm_msg" value="Are you sure you want to delete the selected batch?">
          <div class="blocktext info"></div>
          <div class="center button">
            <button>Delete</button>
          </div>
 
    
        </form>
      </div>
    </div>
    <div class="col-sm-10 col-sm-offset-1">

    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <div class="panel panel-primary" class="col-sm-10 col-sm-offset-1">
          <div class="panel-body">
          <div class="table-responsive table-sorting">

            <table class=" table table-bordered table-striped" id="tSortable22">
                          <thead>
                              <tr style="width:auto">
                <th style="width:1%">Course ID.</th>
                <th style="width:1%">Department</th>
                <th style="width:1%">Email</th>

                <th style="width:1%">Total</th>
                
                              </tr>
                          </thead>
                          <tbody>
              <?php

                
                $query = $db->prepare("SELECT * FROM students");
                $query->execute([$_GET['course_id'],$_GET['department'],$_GET['email'],$_GET['total']]);
                while ($row = $query->fetch(PDO::FETCH_ASSOC))
                {                
                echo '<tr>
                        <td>'.$row['course_id'].'</td>
                        <td>'.$row['department'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['total'].'</td>
                      </tr>';
                }
                
              ?>
                          </tbody>
                      </table>
                  </div>
        
              </div>
  <script src="../assets/js/dataTable/jquery.dataTables.min.js"></script>
 


  <?php elseif (valueCheck('action','lecturers')) : ?>
    <div class="box">
      <div class="boxbg"></div>
      <div class="information"><div class="icon add"></div></div>
      <div class="title">Add Lecturers</div>
      <div class="elements">
        <form method="post" action="students.php?action=add">
        
          <input type="text" name="lec_id" class="styled uInfo" required pattern="[^:]{2,30}" title="2 to 30 alphanumeric characters" placeholder="Lecturer ID" />
          <input type="text" name="lec_name" class="styled uInfo" required pattern="[^:]{2,30}" title="2 to 30 alphanumeric characters" placeholder="Lecturer Name" />

          <select name="dept" class="stretch" data-placeholder="Choose Department..." required>
            <option label="Choose Department..."></option>
            <?php
            foreach($db->query('SELECT * FROM depts') as $dept)
              echo "<option value=\"{$dept['dept_code']}\">{$dept['dept_name']}</option>";
            ?>
          </select>
          
          <div class="blocktext info"></div>
          <div class="center button">
            <button>Add</button>
          </div>
        </form>
      </div>
    </div>
    <div class="box">
      <div class="boxbg"></div>
      <div class="information"><div class="icon remove"></div></div>
      <div class="title">Delete Lecturers</div>
      <div class="elements">
        <form method="post" action="lecturers.php?action=delete" class="confirm">
          <select name="lec_id" class="updateSelect stretch"  data-placeholder="Choose Lec. Code..." required>
            <option label="Choose Lec. Code..."></option>
            <?php
            foreach($db->query('SELECT * FROM lecturers') as $lec)
              echo "<option value=\"{$lec['lec_id']} : {$lec['lec_id']}\">{$lec['lec_id']}</option>";
            ?>
          </select>
          <input type="hidden" id="confirm_msg" value="Are you sure you want to delete the selected Lecturer?">
          <div class="blocktext info"></div>
          <div class="center button">
            <button>Delete</button>
          </div>
 
    
        </form>
      </div>
    </div>
    <div class="col-sm-10 col-sm-offset-1">

    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <div class="panel panel-primary" class="col-sm-10 col-sm-offset-1">
          <div class="panel-body">
          <div class="table-responsive table-sorting">

            <table class=" table table-bordered table-striped" id="tSortable22">
                          <thead>
                              <tr style="width:auto">
                <th style="width:1%">Lecturer Number.</th>
                <th style="width:1%">Name</th>
                <th style="width:1%">Department</th>

                
                              </tr>
                          </thead>
                          <tbody>
              <?php

                
                $query = $db->prepare("SELECT * FROM lecturers");
                $query->execute([$_GET['lec_id'],$_GET['lec_name'],$_GET['department']]);
                while ($row = $query->fetch(PDO::FETCH_ASSOC))
                {                
                echo '<tr>
                        <td>'.$row['lec_id'].'</td>
                        <td>'.$row['lec_name'].'</td>
                        <td>'.$row['department'].'</td>
                        </tr>';
                }
                
              ?>
                          </tbody>
                      </table>
                  </div>
        
              </div>
  <script src="../assets/js/dataTable/jquery.dataTables.min.js"></script>
  <?php else: ?>
    <div class="box">
      <div class="boxbg"></div>
      <div class="information"><div class="icon add"></div></div>
      <div class="title">Add Room</div>
      <div class="elements">
        <form method="post" action="rooms.php?action=add">
          <input type="text" name="room_name" class="styled details" required pattern="[^:]{2,25}" title="2 to 25 alphanumeric characters" placeholder="Room Name" />
          <input type="text" name="capacity" class="styled details" required pattern="[0-9]{1,3}" title="Number less than 1000" placeholder="Capacity" />
          <div class="blocktext info"></div>
          <div class="center button">
            <button>Add</button>
          </div>
        </form>
      </div>
    </div>
    <div class="box">
      <div class="boxbg"></div>
      <div class="information"><div class="icon remove"></div></div>
      <div class="title">Delete Room</div>
      <div class="elements">
        <form method="post" action="rooms.php?action=delete" class="confirm">
          <select name="room_name" class="updateSelect stretch"  data-placeholder="Choose Room..." required>
            <option label="Choose Room..."></option>
            <?php
            foreach($db->query('SELECT * FROM rooms') as $room)
              echo "<option value=\"{$room['room_name']}\">{$room['room_name']} ({$room['capacity']})</option>";
            ?>
          </select>
          <div class="blocktext info"></div>
          <input type="hidden" id="confirm_msg" value="Are you sure you want to delete the selected room?">
          <div class="center button">
            <button>Delete</button>
          </div>
        </form>
      </div>
    </div>
  
    <div class="col-sm-10 col-sm-offset-1">
 
    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <div class="panel panel-primary" class="col-sm-10 col-sm-offset-1">
          <div class="panel-body">
          <div class="table-responsive table-sorting">

            <table class=" table table-bordered table-striped" id="tSortable22">
                          <thead>
                              <tr style="width:auto">
                <th style="width:1%">Room No.</th>
                <th style="width:1%">Capacity</th>
                
                              </tr>
                          </thead>
                          <tbody>
              <?php

                
                $query = $db->prepare("SELECT * FROM rooms");
                $query->execute([$_GET['room_name'],$_GET['capacity']]);
                while ($row = $query->fetch(PDO::FETCH_ASSOC))
                {                
                echo '<tr>
                        <td>'.$row['room_name'].'</td>
                        <td>'.$row['capacity'].'</td>
                       
                      </tr>';
                }
                
              ?>
                          </tbody>
                      </table>
                  </div>
        
              </div>
    </div>
    
<?php endif; ?>
<script src="../assets/js/dataTable/jquery.dataTables.min.js"></script>
</body>
</html>
