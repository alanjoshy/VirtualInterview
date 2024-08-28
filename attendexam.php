<?php 
if(!isset($webRoot))
{
$webRoot="./";
}
include($webRoot."includes/common.php");
session_start();
if($_REQUEST["go"]=="go"){
$jobid=$_REQUEST["jobid"];
$candidatename=$_SESSION["candidateusername"];
$r="select scheduleexam from candidate where username='$candidatename'";
$result1=$dbs->ExecuteCmd($r);
$w=mysqli_fetch_assoc($result1);
if($w["scheduleexam"]==1){
$q="select  username from answersheet where username='$candidatename' and jobid='$jobid'";

$resu=$dbs->ExecuteCmd($q);

if(mysqli_num_rows($resu)>0 )
{
//header("location:alreadydoneexam.php");
header("location:startexam.php");

}
else
{
$_SESSION["jobid"]=$_REQUEST["jobid"];

header("location:startexam.php");
}}
else 
{
header("location:noscheduleexam.php?m=$candidatename");
}}
$s="select jobid from postjob";
$res=$dbs->ExecuteCmd($s);
$data=array();
while($row=mysqli_fetch_assoc($res)){
$data[]=$row;}
$smarty->assign("data",$data);
$_SESSION["count"]=NULL;
$_SESSION["mark"]=NULL;
$smarty->display("attendexam.tpl");

?>