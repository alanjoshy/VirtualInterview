<?php 
if(!isset($webRoot))
{
$webRoot="./";
}
include($webRoot."includes/common.php");
session_start();
$fromuser=$_SESSION["empusername"];
$touser=$_REQUEST["to"];
$subject=$_REQUEST["subject"];
$message=$_REQUEST["message"];

if($_REQUEST["send"]=="send"){
$s="insert into mailbox(touser,fromuser,message,subject) values('$touser','$fromuser','$message','$subject')";

$dbs->ExecuteCmd($s);
}
$smarty->display("compose.tpl");


?>