<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include($webRoot."includes/common.php");
$data=$_GET["id"];
$s="select designation,place,salary,dateofpost from postjob where employerid='$data'";
$res=$dbs->ExecuteCmd($s);
$data=array();
while($row=mysqli_fetch_assoc($res))
{
$data[]=$row;
}
$smarty->assign("data",$data);
$smarty->display("viewjobpost2.tpl");
?>