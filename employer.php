<?php
if(!isset ($webRoot)){
$webRoot="./";
}
include($webRoot."includes/common.php");
if(isset($_REQUEST["login"])){
$uname=$_REQUEST["username"];
session_start();
$_SESSION["empusername"]=$uname;

$upass=$_REQUEST["password"];
$q="select * from employers where username='$uname' and password='$upass'";
$res=$dbs->ExecuteCmd($q);
$row=mysqli_fetch_assoc($res);
$_SESSION["company_name"]=$row["company_name"];

if(mysqli_num_rows($res)>0)
{

header("location:employerhome.php");

}
else
echo "<script>alert('incorrect password')</script>";
}
$smarty->display("employer.tpl");
?>