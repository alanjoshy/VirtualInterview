<?php 
session_start();
if(isset($_SESSION["username"]))
{

if(!isset ($webRoot)){
$webRoot="./";
}
include($webRoot."includes/common.php");
$smarty->display("adminleft.tpl");

}
else

echo "pls login again";

?>