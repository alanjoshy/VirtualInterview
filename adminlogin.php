<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include($webRoot."includes/common.php");
if(isset($_REQUEST["login"]))
{
$username=$_REQUEST["username"];
session_start();
$_SESSION["username"]=$username;
$password=$_REQUEST["password"];
$s="select * from admins where username='$username' and password='$password'";
//echo "<br>$s";
$res=$dbs->ExecuteCmd($s);
//$passwordd=$row["password"];
if(mysqli_num_rows($res)>0)
{
header("Location:adminhome.php");

}
$s="select * from employers where username='$username' and password='$password'";
//echo "<br>$s";
$res=$dbs->ExecuteCmd($s);
//$passwordd=$row["password"];
if(mysqli_num_rows($res)>0)
{
	$s="select * from employers where username='$username' and password='$password'";
	

//echo "<br>$s";
$conn=mysqli_connect("localhost","root","","virtual_db");

$res=mysqli_query($conn,$s);
//$passwordd=$row["password"];

$dataa=mysqli_fetch_array($res);

$_SESSION["employerid"]=$dataa["employerid"];
$_SESSION["company_name"]=$dataa["company_name"];
echo $_SESSION["company_name"];
header("location:employerhome.php");

}



$s="select * from candidate where username='$username ' and password='$password'";
$res=$dbs->ExecuteCmd($s);
if(mysqli_num_rows($res)>0){
header("location:candidateleft.php?m=$username");
}

else
{
echo "<script>alert('incorrect username or password')</script>";
}
}

$smarty->display("adminlogin.tpl");




?>