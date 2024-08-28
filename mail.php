<?php 
if(!isset($webRoot))
{
$webRoot="./";
}
include($webRoot."includes/common.php");
if(isset($_REQUEST["compose"])){

header("location:compose.php");
}

if(isset($_REQUEST["inbox"]))
{
header("location:inbox.php");
}
$smarty->display("mail.tpl");
?>