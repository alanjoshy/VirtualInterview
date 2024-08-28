<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include("includes/common.php");
$smarty->display("candidateleft.tpl");
?>