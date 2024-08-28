<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include($webRoot."includes/common.php");
session_start();
//$id=$_REQUEST["id"];
$username=$_SESSION["username"];
if(isset($_REQUEST["ok"])){
$password=$_REQUEST["opassword"];
$s="select username,password from candidate where username='$username' and password='$password'";
$res=$dbs->ExecuteCmd($s);
if(mysqli_num_rows($res)>0){
if($_REQUEST["npassword"]==$_REQUEST["cpassword"])
{
$password=$_REQUEST["npassword"];
$s="update candidate set password='$password' where username='$username'";
$dbs->ExecuteCmd($s);
echo "password changed successfully";
}
else
echo "password doesn't match";
}
else 
echo "username and password doesn't match or is incorrect";
}
$smarty->display("changepassword.tpl");
?>