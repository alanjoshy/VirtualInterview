<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include("includes/common.php");


header("Location:activemember.php");
// if(isset($_REQUEST["view"]) && $_REQUEST["memberstatus"]=="active_member")
// {
// header("Location:activemember.php");
// }
// else if(isset($_REQUEST["view"]) && $_REQUEST["memberstatus"]=="inactive_member")
// {
// header("Location:inactivemember.php");

// }
$smarty->display("manageemployer.tpl");

?>
