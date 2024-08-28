<?php 
ob_start();
if(!isset ($webRoot)){
$webRoot="./";
}
include("includes/common.php");


if(!isset($_GET["id"]))
{//1

	if(isset($_REQUEST["submit"]))
	{//2
		if($_REQUEST["password"]==$_REQUEST["reenterpassword"])
		{//3
		$username=$_REQUEST["username"];
		$s="select * from employers where username='$username'";
		$res=$dbs->ExecuteCmd($s);
			if(mysqli_num_rows($res)>0)
			{
			echo "username exist please try another";
			}

			else
			{
			$data=array();
			$data["company_name"]=$_REQUEST["companyname"];
			$data["profile"]=$_REQUEST["profile"];
			$data["address"]=$_REQUEST["address"];
			$data["weburl"]=$_REQUEST["websiteurl"];
			$data["emailid"]=$_REQUEST["emailid"];
			$data["officeno1"]=$_REQUEST["officenum1"];
			$data["officeno2"]=$_REQUEST["officenum2"];
			$data["p_contact"]=$_REQUEST["contactperson"];
			$data["p_address"]=$_REQUEST["address"];
			$data["username"]=$_REQUEST["username"];
			$data["password"]=$_REQUEST["password"];
			$data["flag"]="1";
			$dbs->InsertData($data,"employers");
			//header("location:detailssaved.php");

			$conn=mysqli_connect("localhost","root","","onlineexam");
			$qry="insert into admin(email,password) values('".$data["emailid"]."','".$data["password"]."')";

			mysqli_query($conn,$qry);

			}
		}//3
	else
	{
	echo "password doesn't match";
	}
	}
$smarty->display("employerreg.tpl");


//*************************2
}//1
else
{
$smarty->assign("a",$id);

session_start();
$username=$_SESSION["empusername"];
$q="select * from employers where username='$username'";
$res=$dbs->ExecuteCmd($q);
$row=mysqli_fetch_assoc($res);
$companyname=$row["company_name"];
$profile=$row["profile"];
$address=$row["address"];
$weburl=$row["weburl"];
$emailid=$row["emailid"];
$officeno1=$row["officeno1"];
$officeno2=$row["officeno2"];
$p_contact=$row["p_contact"];
$p_address=$row["p_address"];
$employerid=$row["employerid"];
$_SESSION["employerid"]=$employerid;
//update
$smarty->assign("companyname",$companyname);
$smarty->assign("profile",$profile);
$smarty->assign("address",$address);
$smarty->assign("weburl",$weburl);
$smarty->assign("emailid",$emailid);
$smarty->assign("officeno1",$officeno1);
$smarty->assign("officeno2",$officeno2);
$smarty->assign("p_contact",$p_contact);
$smarty->assign("p_address",$p_address);
$smarty->assign("employerid",$employerid);

if(isset($_REQUEST["submit"]))
{

$data["company_name"]=$_REQUEST["companyname"];
$data["profile"]=$_REQUEST["profile"];
$data["address"]=$_REQUEST["address"];
$data["weburl"]=$_REQUEST["websiteurl"];
$data["emailid"]=$_REQUEST["emailid"];
$data["officeno1"]=$_REQUEST["officenum1"];
$data["officeno2"]=$_REQUEST["officenum2"];
$data["p_contact"]=$_REQUEST["contactperson"];
$data["p_address"]=$_REQUEST["address"];
$dbs->UpdateData($data,"employers","username",$username);
 }



$smarty->display("employeredit.tpl");
}
?>