<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include($webRoot."includes/common.php");
$id=$_GET["id"];
$smarty->assign("j",$id);
$s="select * from employers where username='$id'";
$res=$dbs->ExecuteCmd($s) ;
$row=mysqli_fetch_assoc($res);
if($_REQUEST["delete"]=="delete")
{
$id=$_REQUEST["employerid"];

$s="delete from employers where username='$id'";
$dbs->ExecuteCmd($s);
echo "deleted successfully";
}
if($_REQUEST["accept"]=="accept")
{
$id=$_REQUEST["employerid"];
$s="update employers set flag=1 where username='$id'";
echo $s;
$dbs->ExecuteCmd($s);
echo "accepted your request";
}
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
$smarty->display("inactivemember1.tpl");
?>