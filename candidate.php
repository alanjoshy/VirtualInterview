<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include("includes/common.php");
if($_REQUEST["login"]="login"){
$s="select * from candidate where username='$username' and password='$password'";
$res=$dbs->ExecuteCmd($s);
if(mysqli_num_rows($res)>0){
header("location:candidateleft.php");
}
}
$smarty->display("candidate.tpl");
?>