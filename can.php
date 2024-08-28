
<?php
$webroot="./";
include($webroot."includes/common.php");
$smarty->display("candidate.tpl");
$a=$_REQUEST["candidate"];
{
$data=array[];
$data["fnme"]=$_REQUEST["First Name"];
$data["lnme"]=$_REQUEST["Last Name"];
$data["Frnme"]=$_REQUEST["Fathers Name"];
$data["mnme"]=$_REQUEST["Mothers Name"];
$data["hnme"]=$_REQUEST["House Name"];
$data["adrs"]=$_REQUEST["Address"];
$data["cnry"]=$_REQUEST["Country"];
$data["ste"]=$_REQUEST["State"];
$data["dist"]=$_REQUEST["District"];
$data["plc"]=$_REQUEST["Place"];
$data["eid"]=$_REQUEST["E-mail ID"];
$data["qfn"]=$_REQUEST["Qualification"];
$data["expc"]=$_REQUEST["Experience"];
$data["unme"]=$_REQUEST["User name"];
$data["pswd"]=$_REQUEST["Password"];
$data["cpswd"]=$_REQUEST["confirm Password"];
}
echo $a;
?>