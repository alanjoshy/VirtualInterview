<?php 
ob_start();
if(!isset($webRoot))
{
$webRoot="./";
}
include($webRoot."includes/common.php");
$s="select jobid from postjob";
$res=$dbs->ExecuteCmd($s);
$data=array();
while($row=mysqli_fetch_assoc($res)){
$data[]=$row;}
$smarty->assign("data",$data);
if(isset($_REQUEST["view"])){

$jobid=$_REQUEST["jobid"];
$cutofmark=$_REQUEST["cutofmark"];
$s="select username,totalmarks from answersheet where totalmarks>='$cutofmark' ";
$res1=$dbs->ExecuteCmd($s);
$data1=array();
while($row1=mysqli_fetch_assoc($res1))
{
$data1[]=$row1;
}
$smarty->assign("data1",$data1);

}
if(isset($_REQUEST["send"]))
{

$hidden=$_REQUEST["hidden"];
echo $hidden;
$z=1;
$data=array();
while($z<=$hidden){

if(isset($_REQUEST[$z])){
$data[]=$_REQUEST["$z"];
}

$z++;
}

print_r($data);
$empusername=$_SESSION["empusername"];
echo $_REQUEST["candidatename"];
$subject=$_REQUEST["subject"];
$message=$_REQUEST["message"];
foreach($data as $x){
$q="insert into mailbox (touser,fromuser,subject,message) values('$x','$empusername','$subject','$message')";
echo $data;
$dbs->ExecuteCmd($q);}
header("location:msg.php");
}

$smarty->display("callletter.tpl");
?>