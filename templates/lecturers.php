<?php


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
    $query = $db->prepare('INSERT INTO lecturers(lec_id,lec_name,department) values (?,?,?)');
    $query->execute([$_POST['lec_id'],$_POST['lec_name'],$_POST['department']]);
   
    postResponse("addOpt","Lecturer Added",[$_POST['lec_id'],$_POST['lec_name'],$_POST['department']]);  
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
  $query = $db->prepare('DELETE FROM lecturers where lec_id =?');
  $query->execute([$_POST['lec_id']]);
  postResponse("removeOpt","Lecturer deleted");
}

?>

