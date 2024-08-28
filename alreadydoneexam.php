<?php 
if(!isset($webRoot))
{
$webRoot="./";
}
include($webRoot."includes/common.php");
$smarty->display("alreadydoneexam.tpl");
?>