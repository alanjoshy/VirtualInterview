<?php 
if(!isset($webRoot))
{
$webRoot="./";
}
include($webRoot."includes/common.php");
$id=$_GET["id"];
session_start();
$_SESSION["jobid"]=$id;
$s="select jobid,designation,place,salary,dateofpost,lastdate,qualification,skillsrequired,requirements from postjob where jobid='$id'";
$res=$dbs->ExecuteCmd($s);
$data=array();
while($row=mysqli_fetch_assoc($res))
{
$data[]=$row;
}
$uname=$_SESSION["username"];
// $ss="select phone from `candidate` where username='$uname'";
// $res=$dbs->ExecuteCmd($ss);
// $row=mysqli_fetch_assoc($res);
// $ph=$row["phone"];
// $mob="";
// $msg="Asesorar recruitment: your application has been received.";
//  SendSMS($mob,$msg);
// 	function SendSMS($mob,$msg)
// 		{
// 				$request =""; //initialise the request variable
// 				$param["method"]= "sendMessage";
// 				$param["send_to"] = $mob;
// 				$param["msg"] = $msg;
// 				$param["userid"] = "2000022557";
// 				$param["password"] = "54321@lcc";
// 				$param["v"] = "1.1";
// 				$param["msg_type"] = "TEXT"; //Can be "FLASH”/"UNICODE_TEXT"
// 				$param["auth_scheme"] = "PLAIN";
// 				//Have to URL encode the values
// 				foreach($param as $key=>$val) {
// 						$request.= $key."=".urlencode($val);
// 							//we have to urlencode the values
// 						$request.= "&";

// 				}
// 				$request = substr($request, 0, strlen($request)-1);
// //remove final (&) sign from the request
// 			$url ="http://enterprise.smsgupshup.com/GatewayAPI/rest?".$request;
// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $curl_scraped_page = curl_exec($ch);
// curl_close($ch);
// //echo $curl_scraped_page;

//         }
$smarty->assign("data",$data);
$smarty->display("jobsearchcandidate.tpl");
?>