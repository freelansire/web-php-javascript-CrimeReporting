<?php
 include("config.php");
$pstationname = $_POST['psname'];
$areaname = $_POST['area'];
$address =$_POST['address'];
$pincode = $_POST['pincode'];
$contactno = $_POST['contactno'];
$emailid= $_POST['emailid'];
$city =$_POST['city'];
$sdate = $_POST['sdate'];
$contactperson =$_POST['contactperson'];


$updateQuery = "update mstr_police set policestation_name = '".$policename."',area_name = '".$areaname."',address = '".$address."',contact_no = '".$contactno."',Email_id = '".emailid."',contact_person = '".$contactperson."',starting_date = '".$startingdate."'

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