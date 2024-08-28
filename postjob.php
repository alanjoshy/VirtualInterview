<?php 
if(!isset($webRoot))
{
$webRoot="./";
}
ob_start();
session_start();
$cname=$_SESSION["company_name"];
include($webRoot."includes/common.php");

if(isset($_REQUEST["submit"])){
$data=array();
$data["employerid"]="0";
$username=$_SESSION["username"];
$data["company_name"]=$username;




$data["designation"]=$_REQUEST["jobpost"];
$data["place"]=$_REQUEST["place"];
$data["requirements"]=$_REQUEST["requirements"];
$data["noofposts"]=$_REQUEST["numofpost"];
$data["salary"]=$_REQUEST["salary"];
$data["skillsrequired"]=$_REQUEST["skills"];
$data["qualification"]=$_REQUEST["qualification"];
$data["lastdate"]=$_REQUEST["lastdate"];
$data["dateofpost "]=date('y-m-d');
$dbs->InsertData($data,"postjob");
header("detailssaved.php");
}
$smarty->display("postjobs.tpl");
?>