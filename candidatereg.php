<?php 
if(!isset ($webRoot)){
$webRoot="./";
}
include("includes/common.php");
$smarty->display("candidatereg.tpl");
if(isset($_REQUEST["submit"]))
{
if($_REQUEST["confirmpassword"]==$_REQUEST["password"])
{
	echo "<script>alert('hai')</script>";
$data=array();
$data["fname"]=$_REQUEST["firstname"];
$data["lname"]=$_REQUEST["lastname"];
$data["fathername"]=$_REQUEST["fathersname"];
$data["mothername"]=$_REQUEST["mothersname"];
$data["housename"]=$_REQUEST["housename"];
$data["address"]=$_REQUEST["address"];
$data["phone"]=$_REQUEST["phonenumber"];
$data["country"]=$_REQUEST["country"];
$data["state"]=$_REQUEST["state"];
$data["district"]=$_REQUEST["district"];
$data["place"]=$_REQUEST["place"];
$data["emailid"]=$_REQUEST["emailid"];
$data["qualification"]=$_REQUEST["qualification"];
$data["expirence"]=$_REQUEST["expirence"];
$data["username"]=$_REQUEST["username"];
$data["password"]=$_REQUEST["password"];
$data["scheduleexam"]="0";
//for resume

$fresume=$_FILES["resume"];
$fname=$fresume["name"];
$source=$fresume["tmp_name"];
$target="resume/".$fname;
copy($source,$target);
$data["resume"]=$fname;
//for photo
echo "<script>alert('".$data["fname"]."')</script>";

$fimage=$_FILES["photo"];
$fname=$fimage["name"];
$source=$fimage["tmp_name"];
$data["photo"]=$fname;

$target="photo/".$fname;
copy($source,$target);

$dbs->InsertData($data,"candidate");
echo "Details saved";

}
else
{
echo "password doesn't match";
}
}
?>