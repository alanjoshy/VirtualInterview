<?php 
if(!isset($webRoot))
{
$webRoot="./";
}
include($webRoot."includes/common.php");
session_start();
$id=$_GET["id"];

$i=1;
while($i==1)
{
$jobid=$_SESSION["jobid"];

$s="select question,option1,option2,option3,option4,answer,designation from addquestions";
$cusername=$_SESSION["username"];
$res=$dbs->ExecuteCmd($s);
$n=mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);
$i++;
$smarty->assign("question",$row["question"]);
$smarty->assign("option1",$row["option1"]);
$smarty->assign("option2",$row["option2"]);
$smarty->assign("option3",$row["option3"]);
$smarty->assign("option4",$row["option4"]);
}
//
if(isset($_REQUEST["next"])) {
while($i<=$n){
$jobid=$_SESSION["jobid"];
$s="select question,option1,option2,option3,option4,answer,designation from addquestions where id='$i' ";
echo $s;
$cusername=$_SESSION["candidateusername"];
$res=$dbs->ExecuteCmd($s);
$n=mysqli_num_rows($res);

$row=mysqli_fetch_assoc($res);
$i++;
$smarty->assign("question",$row["question"]);
$smarty->assign("option1",$row["option1"]);
$smarty->assign("option2",$row["option2"]);
$smarty->assign("option3",$row["option3"]);
$smarty->assign("option4",$row["option4"]);

}
}
$smarty->display("exam.tpl");
?>