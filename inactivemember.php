<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include("includes/common.php");

$s="select username,address,company_name from employers where flag='0' ";
$res=$dbs->ExecuteCmd($s) ;
$data=array();
while($row=mysqli_fetch_assoc($res))
{
$data[]=$row;

}
$smarty->assign("datas",$data);

$smarty->display("inactivemember.tpl");
?>