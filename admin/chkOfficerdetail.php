<?php
//session_start();
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
$pincode = $_POST['pincode'];
$jdate = $_POST['jdate'];
$ldate= $_POST['ldate'];
$pstationname =$_POST['psname'];
$designation = $_POST['designation'];
$username=$_POST['loginname'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];

 if($password == $rpassword)
 {
	$insertQuery = "insert into mstr_profile(first_name,middle_name,last_name,gender,address,
	                                         contact_no,emailid,username,city_id,pincode) 
		                              values ('".$firstname."','".$middlename."','".$lastname."',
									          '".$gender."','".$address."','".$contactno."',
											  '".$emailid."','".$username."'
											  '".$city."','".$pincode."' )";	
	
	
	$insertloginQuery = "insert into mstr_login(username,password) 
	                                   values ('".$username."','".$password."')";
									   	
	$insertOfficer = "insert into mstr_officer(username,Jdate,Ldate,desi_id,policestation_id)
	                                   values('".$username."','".$jdate."','".$ldate."',
									   '".$designation."','".$pstationname."')";
    //$_SESSION['claim_id'] = $claim_id;
	
	$msg = base64_encode("Registered Successfully");
	echo "$insertOfficer";
	if(mysql_query($insertQuery) && mysql_query($insertloginQuery) && mysql_query($insertOfficer))
	{
		  header("location:home.php?msg=$msg");	  
	 }
	else
	 {
		header("location:officerdetail.php?msg=Not Registered");
	 }
 }
 else
 {
   echo "Error:Password missmatch";
  }
?>