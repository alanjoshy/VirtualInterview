<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include("includes/common.php");
if(isset($_REQUEST["go"]) && $_REQUEST["radio"]=="byname")
{
$search=$_REQUEST["search"];
$s="select fname,lname,address,emailid from candidate where fname like '%$search%' or lname like '%$search%'";
$res=$dbs->ExecuteCmd($s);
$data=array();
while($row=mysqli_fetch_assoc($res))
{
$data[]=$row;
}
$smarty->assign("data",$data);
}
else if(isset($_REQUEST["go"]) && $_REQUEST["radio"]=="byqualification")
{
$search=$_REQUEST["search"];
$s="select fname,lname,address,emailid from candidate where qualification like '%$search%'";
$res=$dbs->ExecuteCmd($s);
$data=array();
while($row=mysqli_fetch_assoc($res))
{
$data[]=$row;
}
$smarty->assign("data",$data);
}
$smarty->display("managecandidate.tpl");
?>