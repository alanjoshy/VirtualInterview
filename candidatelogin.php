<?php 
if(!isset($webRoot))
{
$webRoot="./";
}
include($webRoot."includes/common.php");
session_start();

if(isset($_REQUEST["login"])){
	$_SESSION["candidateusername"]=$_REQUEST["username"];
$username=$_REQUEST["username"];

$password=$_REQUEST["password"];

$s="select * from candidate where username='$username ' and password='$password'";
$res=$dbs->ExecuteCmd($s);
if(mysqli_num_rows($res)>0){
header("location:candidateleft.php?m=$username");
}
else 
echo "<script>alert('incorrect password')</script>";
}
$smarty->display("candidatelogin.tpl");
?>