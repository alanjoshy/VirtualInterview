<?php 
if(!isset($webRoot))
{
$webRoot="./";
}
include($webRoot."includes/common.php");
session_start();
$touser=$_SESSION["empusername"];
$s="select fromuser,subject,message from mailbox where touser='$touser'";
$res=$dbs->ExecuteCmd($s);
if(mysqli_num_rows($res)==0){
header("location:nomail.php");
}
else
{
$row=mysqli_fetch_assoc($res);

$smarty->assign("subject",$row["subject"]);
$smarty->assign("message",$row["message"]);
$smarty->assign("from",$row["fromuser"]);
}
$smarty->display("inbox.tpl");
?>