<?php 
if(!isset($webRoot))
{
$webRoot="./";
}
include($webRoot."includes/common.php");
session_start();
$empusername=$_SESSION["empusername"];
$candidatename=$_SESSION["candidatename"];
$smarty->assign("candidatename",$candidatename);
$s="select  jobid from postjob ";
$res=$dbs->ExecuteCmd($s);
$data=array();
while($row=mysqli_fetch_assoc($res)){
$data[]=$row;}
$smarty->assign("data",$data);
if(isset($_REQUEST["schedule"])){
$w="update candidate set scheduleexam=1 where username='$candidatename'";
$dbs->ExecuteCmd($w);
$date=$_REQUEST["examdate"];
$postcode=$_REQUEST["jobid"];
$noofquestion=$_REQUEST["numberofquestions"];
$time=$_REQUEST["time"];
$q="insert into scheduledcandidate(noofquestion,time,examdate,employerusername,candidateusername,postcode) values('$noofquestion','$time','$date','$empusername','$candidatename','$postcode')";
$result=$dbs->ExecuteCmd($q);
echo "<script>alert('success')</script>";
}
$smarty->display("scheduleexam.tpl");

?>