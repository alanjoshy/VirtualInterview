<?php 
if(!isset($webRoot)){
$webRoot="./";
}
session_start();
include($webRoot."includes/common.php");
$cuername=$_SESSION["username"];
$q="select * from application  where cuername='$cuername'";
$res=$dbs->ExecuteCmd($q);
$data=array();
while($row=mysqli_fetch_assoc($res))
{
$data[]=$row;
}
$smarty->assign("data",$data);
$smarty->display("viewcandidateapplications.tpl");
?>