<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include($webRoot."includes/common.php");
//$s="select employerid,company_name from employers where flag=1";
//$res=$dbs->ExecuteCmd($s);
///*$data=array();
//while($row=mysqli_fetch_assoc($res))
//{
//$data[]=$row;
//}*/
//
//$data="<table><tr><td>";
//$i=1;
//while($row=mysqli_fetch_assoc($res))
//{
//$empid=$row["employerid"];
//$data=$data."<a href='viewjobpost2.php?id=$empid' >".$row["company_name"]."</a>";
//$i++;
//if($i%5==0)
//$data=$data."<br/>";
//}
//$data=$data."</td></tr></table>";

$s="select designation,employerid from postjob";
$res=$dbs->ExecuteCmd($s);
$data=array();
$data="<table><tr>";
$i=1;
while($row=mysqli_fetch_assoc($res)){
$empid=$row['employerid'];
$data="<td>".$data;
$data=$data."<a href='jobs1.php?id=$empid'>".$row['designation']."</a></td>";
$i++;
if($i%4){
$data=$data."<br>";
}
}
$smarty->assign("data",$data);
$smarty->display("viewjobpost.tpl");
?>