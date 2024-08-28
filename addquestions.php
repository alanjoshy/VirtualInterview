<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include($webRoot."includes/common.php");
if(isset($_REQUEST["create"]))
{
$branch=$_REQUEST["branch"];//********* drop down values******
}
$s="select  jobid from postjob ";
$res=$dbs->ExecuteCmd($s);
$data=array();
while($row=mysqli_fetch_assoc($res)){
$data[]=$row;
}
$smarty->assign("data",$data);
$lastqtnno=0;
if(isset($_REQUEST["add"]))
{
// to get last question number
$jobid=$_REQUEST["branch"];
$f="select count(questionno) from addquestions where jobid=$jobid";
$r=$dbs->ExecuteCmd($f);
$re=mysqli_fetch_assoc($r);
$lastqtnno=$re["count(questionno)"];
$data=array();
$data["jobid"]=$jobid;
$t="select  designation from postjob where jobid='$jobid' ";
$rest=$dbs->ExecuteCmd($t);
$rest1=mysqli_fetch_assoc($rest);
$data["designation"]=$rest1["designation"];
$data["question"]=$_REQUEST["question"];
$data["option1"]=$_REQUEST["option1"];
$data["option2"]=$_REQUEST["option2"];
$data["option3"]=$_REQUEST["option3"];
$data["option4"]=$_REQUEST["option4"];
$data["answer"]=$_REQUEST["answer"];
$lastqtnno=$lastqtnno+1;
$data["questionno"]=$lastqtnno;
$dbs->InsertData($data,"addquestions");
echo "<script>alert('questions added successfully')</script>";
}
$smarty->display("addquestion.tpl");

?>