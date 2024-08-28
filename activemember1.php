<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include($webRoot."includes/common.php");
if(isset($_GET["id"]))
{
$id=$_GET["id"];

$smarty->assign("j",$id);
$s="select * from employers where username='$id'";
$res=$dbs->ExecuteCmd($s) ;
$row=mysqli_fetch_assoc($res);

$smarty->assign("company_name",$row["company_name"]);
$smarty->assign("profile",$row["profile"]);
$smarty->assign("address",$row["address"]);
$smarty->assign("weburl",$row["weburl"]);
$smarty->assign("emailid",$row["emailid"]);
$smarty->assign("officeno1",$row["officeno1"]);
$smarty->assign("officeno2",$row["officeno2"]);
$smarty->assign("p_contact",$row["p_contact"]);
$smarty->assign("p_address",$row["p_address"]);
$smarty->assign("employerid",$row["employerid"]);
}

if(isset($_REQUEST["delete"])){
	$uname=$_REQUEST["uname"];
$s="delete from employers where username='$uname'";
$dbs->ExecuteCmd($s);
echo "deleted successfully";
header("Location:activemember.php");

}
if(isset($_REQUEST["update"]))
{
$company_name=$_REQUEST["name"];
$profile=$_REQUEST["profile"];
$address=$_REQUEST["address"];
$weburl=$_REQUEST["weburl"];
$emailid=$_REQUEST["emailid"];
$officeno1=$_REQUEST["officeno1"];
$officeno2=$_REQUEST["officeno2"];
$p_contact=$_REQUEST["p_contact"];
$p_address=$_REQUEST["p_address"];
$employerid=$_REQUEST["employerid"];
$uname=$_REQUEST["uname"];
$s="update employers set company_name='$company_name',profile='$profile',address='$address',weburl='$weburl',emailid='$emailid',officeno1='$officeno1',officeno2='$officeno2',p_contact='$p_contact',p_address='$p_address',employerid='$employerid' where username='$uname'";

$dbs->ExecuteCmd($s);
echo "detailes updated";
header("Location:activemember.php");
}



//$smarty->assign("datas",$data);
$smarty->display("activemember1.tpl");
?>