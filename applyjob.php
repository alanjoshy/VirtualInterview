<?php 
session_start();
ob_start();
if(!isset ($webRoot))
{
$webRoot="./";
}
include("includes/common.php");
if(isset($_GET["id"]))
{
$jobid=$_GET["id"];

$cuername=$_SESSION["username"];
$date=date('y-m-d');
$q="insert into application values('$jobid','$cuername','$date')";
$dbs->ExecuteCmd($q);
header("Location:startexam.php");
echo "you can find the application details in application tab";
if(isset($_REQUEST["b1"]))
{
header("Location:searchjob.php");
}
}
$smarty->display("applyjob.tpl");
?>

