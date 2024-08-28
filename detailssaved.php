<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include("includes/common.php");


$smarty->display("employerleft.tpl");

echo "DETAILS SAVED";

?>