<?php 
if(!isset($webRoot))
{
$webRoot="./";
}
include($webRoot."includes/common.php");
$id=$_GET["id"];
$s="select designation,place,salary,dateofpost,lastdate,qualification,skillsrequired,requirements from postjob where designation='$id'";

$res=$dbs->ExecuteCmd($s);
$data=array();
while($row=mysqli_fetch_assoc($res))
{
$data[]=$row;
}
$smarty->assign("data",$data);
$smarty->display("jobsearchcandidate.tpl");
?>