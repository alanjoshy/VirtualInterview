<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include("includes/common.php");
	session_start();
		$username=$_SESSION["username"];

			$s="select * from candidate where username='$username'";
$res=$dbs->ExecuteCmd($s);
$row=mysqli_fetch_assoc($res);
$smarty->assign("fname",$row["fname"]);
$smarty->assign("lname",$row["lname"]);
$smarty->assign("fathername",$row["fathername"]);
$smarty->assign("mothername",$row["mothername"]);
$smarty->assign("housename",$row["housename"]);
$smarty->assign("address",$row["address"]);
$smarty->assign("country",$row["country"]);
$smarty->assign("state",$row["state"]);
$smarty->assign("district",$row["district"]);
$smarty->assign("place",$row["place"]);
$smarty->assign("emailid",$row["emailid"]);
$smarty->assign("qualification",$row["qualification"]);
$smarty->assign("expirence",$row["expirence"]);
$smarty->assign("resume",$row["resume"]);
$smarty->assign("photo",$row["photo"]);

	if(isset($_REQUEST["submit"]))
	{//2
	
		$res=$dbs->ExecuteCmd($s);
			$data=array();
$data["fname"]=$_REQUEST["firstname"];
$data["lname"]=$_REQUEST["lastname"];
$data["fathername"]=$_REQUEST["fathersname"];
$data["mothername"]=$_REQUEST["mothersname"];
$data["housename"]=$_REQUEST["housename"];
$data["address"]=$_REQUEST["address"];
$data["country"]=$_REQUEST["country"];
$data["state"]=$_REQUEST["state"];
$data["district"]=$_REQUEST["district"];
$data["place"]=$_REQUEST["place"];
$data["emailid"]=$_REQUEST["emailid"];
$data["qualification"]=$_REQUEST["qualification"];
$data["expirence"]=$_REQUEST["expirence"];
			//for resume

$fresume=$_FILES["resume"];
$fname=$fresume["name"];
$source=$fresume["tmp_name"];
$target="resume/".$fname;
copy($source,$target);
$data["resume"]=$fname;
//for photo


$fimage=$_FILES["photo"];
$fname=$fimage["name"];
$source=$fimage["tmp_name"];
$data["photo"]=$fname;

$target="photo/".$fname;
copy($source,$target);

			$dbs->UpdateData($data,"candidate","username",$username);
			//header("location:detailssaved.php");

	}



$smarty->display("candidateeditprofile.tpl");
?>