<? include("config.php");
$areaname = $_POST['txtarea'];
$pincode1 = $_POST['pin1'];
$cityname = $_POST['txtcity'];
$pincode2 = $_POST['pin2'];

$insertQuery1 = "insert into mstr_area(areaname, pincode) values('".$areaname."','".$pincode."')";

mysql_query($insertQuery1);

$insertQuery= "insert into mstr_city

$msg = base64_encode("Registered Successfully");

if(mysql_query($insertQuery))

{
	header("location:viewemp.php?msg=$msg");
}
else
{
	$msg = base64_encode("Error in registering");
	header("location:info.php?msg=$msg");
}
?>