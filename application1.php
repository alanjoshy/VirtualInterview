<?php 
if(!isset($webRoot))
{
$webRoot="./";
}
include($webRoot."includes/common.php");
session_start();

if(isset($_SESSION["empusername"]))
{
if(isset($_GET["m"]))
{
$_SESSION["candidatename"]=$_GET["m"];
$username=$_SESSION["candidatename"];
}

if(isset($_REQUEST["delete"])){
$s="delete from scheduledcandidate where employerusername='$us
+ername' && candidateusername='$username'";
$dbs->ExecuteCmd($s);
}

if(isset($_REQUEST["scheduleexam"])){
 $username=$_SESSION['candidatename'];
 header("location:scheduleexam.php");
}
$data=array();
$s="select fname,lname,address,country,state,district,place,emailid,qualification,expirence,resume,photo from candidate where username='$username'";
$res=$dbs->ExecuteCmd($s);
while($row=mysqli_fetch_assoc($res)){
$photo=$row["photo"];
$resume=$row["resume"];
$row["photo"]=NULL;
$row["resume"]=NULL;
$data[]=$row;
}
$path="resume/".$resume;
$smarty->assign("path",$path);

$smarty->assign("data",$data);
$smarty->display("application1.tpl");
}
?>