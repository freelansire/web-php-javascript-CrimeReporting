<?php
 include("config.php");
$policename = $_POST['txtname'];
$areaname=$_POST['txtarea'];
$address=$_POST['add'];
$contactno=$_POST['txtno'];
$EmailID=$_POST['txtemail'];
$contactperson=$_POST['txtperson'];
$startingdate=$_POST['sdate'];


$insertQuery= "insert into mstr_police values('".$policename."','".$areaname."','".$address."','".$contactno."','".$EmailID."','".$contactperson."','".$startingdate."')";

$msg = base64_encode("Registered Successfully");

if(mysql_query($insertQuery))

{
	header("location:viewpolice.php?msg=$msg");
}
else
{
	$msg = base64_encode("Error in registering");
	header("location:police.php?msg=$msg");
}
?>