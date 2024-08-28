<?php 
ob_start();
if(!isset($webRoot))
{
$webRoot="./";
}
$i=2;
include($webRoot."includes/common.php");
session_start();
$jobid=$_SESSION["jobid"];
$i++;
$s="select question,option1,option2,option3,option4,answer,designation from addquestions where jobid='$jobid'";
$cusername="po";
$res=$dbs->ExecuteCmd($s);
$n=mysqli_num_rows($res);

if(!isset($_SESSION["count"]))
{
$_SESSION["count"]=0;
}
else
$count=$_SESSION["count"];
$i=0;
while($i<=$count){
$row=mysqli_fetch_assoc($res);
$i++;

}
$smarty->assign("question",$row["question"]);
$smarty->assign("option1",$row["option1"]);
$smarty->assign("option2",$row["option2"]);
$smarty->assign("option3",$row["option3"]);
$smarty->assign("option4",$row["option4"]);
$answer=$row["answer"];
$des=$row["designation"];
echo $des;
if(isset($_REQUEST["r"]))
{
echo "haiii";
$_SESSION["mark"]=$_SESSION["mark"]+1;
}
if($n==$count){
$m=$_SESSION["mark"];
$q="insert into answersheet(username,totalmarks,jobid,designation) values('$cusername','$m','$jobid','$des')";
header("location:finish.php");
$dbs->ExecuteCmd($q);
//header("location:finish.php");
}
else
{
	header("location:finish.php");
}
$_SESSION["count"]=$count+1;



$smarty->display("exam.tpl");
?>