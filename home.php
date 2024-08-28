<?php 

if(!isset ($webRoot)){
$webRoot="./";
}
include("includes/common.php");
$smarty->display("home.tpl");

?>