<?php

/**
 * Back end routines to add/delete courses, invoked by faculty.php
 * @author Avin E.M
 */

require_once('functions.php');
if(!sessionCheck('logged_in'))
  postResponse("error","Your session has expired, please login again");
require_once('connect_db.php');



if(!isset($_SESSION['faculty']))
  $_SESSION['faculty'] = $_SESSION['uName'];
if(!sessionCheck('level','faculty') && !empty($_GET['faculty']))
  $_SESSION['faculty'] = $_GET['faculty'];
if(valueCheck('action','add'))
{
  try
  {
    $query = $db->prepare('INSERT INTO students(course_id,department,email,total) values (?,?,?,?)');
    $query->execute([$_POST['course_id'],$_POST['department'],$_POST['email'],$_POST['total']]);
   
    postResponse("addOpt","Student Added",[$_POST['course_id'],$_POST['department'],$_POST['email'],$_POST['total']]);  
  }
  catch(PDOException $e)
  {
    if($e->errorInfo[0]==23000)
      postResponse("error","");
    else
      postResponse("error",$e->errorInfo[2]);
  }
}
elseif(valueCheck('action','delete'))
{
  $query = $db->prepare('DELETE FROM students where course_id =?');
  $query->execute([$_POST['course_id']]);
  postResponse("removeOpt","Student Group deleted");
}

?>

