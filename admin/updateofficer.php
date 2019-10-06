<?php
 include("config.php");
 
session_start();
include("config.php");
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$gender = $_POST['gender'];
$address =$_POST['address'];
$pincode = $_POST['pincode'];
$contactno = $_POST['contactno'];
$emailid= $_POST['emailid'];
$city =$_POST['city'];
$jdate = $_POST['jdate'];
$ldate= $_POST['ldate'];
$psname =$_POST['psname'];
$designation = $_POST['designation'];
$username=$_POST['loginname'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];

$updateloginQuery = "update mstr_login set username = '".$username."', password = '".password."' where username = '".username."'";

$updateQuery = "update mstr_officer set username = '".$username."', Jdate = '".$jdate."',
Ldate = '".$ldate."',desi_name = '".$designation."',policestation_name = '".$psname."'";

$updateQuery1 = "update mstr_profile set  first_name = '".$firstname."', middle_name = '".$middlename."', last_name = '".$lastname."', gender = '".$gender ."', contact_no = '".$contactno."', emailid = '".$emailid."', city_name = '".$city ."', pincode = '".$pincode."'";

if(mysql_query($updateloginQuery)) && (mysql_query($updateQuery)) && (mysql_query($updateQuery1))
{	
	$msg = base64_encode("Updated Successfully");
	header("location:viewofficer.php?msg=$msg");
}
else
{
	$msg = base64_encode("Not Updated");
	header("location:updateofficer.php?msg=$msg");
}
?>
