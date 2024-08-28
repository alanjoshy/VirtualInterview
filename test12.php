
<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include("includes/common.php");

$s="select * from admins";
$res=$dbs->ExecuteCmd($s);

while($row=mysqli_fetch_assoc($res))
{
$datas[] =$row;
}




$smarty->assign("datas",$datas);

$smarty->display("test12.tpl");
?>