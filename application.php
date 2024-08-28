<?php 
if(!isset($webRoot))
{
$webRoot="./";
}

include($webRoot."includes/common.php");
$username=NULL;
session_start();
$_SESSION["count"]=NULL;
$s="select jobid from postjob";
$res=$dbs->ExecuteCmd($s);
$data=array();
while($row=mysqli_fetch_assoc($res)){
$data[]=$row;}
$smarty->assign("data",$data);

if(isset($_REQUEST["result"])){
$jobid=$_REQUEST["jobid"];
$q="select * from application where jobid='$jobid'";
$res1=$dbs->ExecuteCmd($q);
$data1=array();
while($row=mysqli_fetch_assoc($res1))
{
$data1[]=$row;
}

$smarty->assign("data1",$data1);
}

$smarty->display("application.tpl");
?>