<?php
 include("config.php");
$policename = $_POST['txtname'];
$areaname=$_POST['txtarea'];
$address=$_POST['add'];
$contactno=$_POST['txtno'];
$EmailID=$_POST['txtemail'];
$contactperson=$_POST['txtperson'];
$startingdate=$_POST['sdate'];



$updateQuery = "update mstr_police set policename = '".$policename."',areaname = '".$areaname."',address = '".$address."',contact_no = '".$contactno."',Email_id = '".$EmailID."',contact_person = '".$contactperson."',starting_date = '".$startingdate."'

//echo $updateQuery;


if(mysql_query($updateQuery))
{	
	$msg = base64_encode("Updated Successfully");
	header("location:viewpolice.php?msg=$msg");
}
else
{
	$msg = base64_encode("Not Updated");
	header("location:updateempdetail.php?msg=$msg");
}
?>