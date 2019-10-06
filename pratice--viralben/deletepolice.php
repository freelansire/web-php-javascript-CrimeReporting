<?
include("config.php");
$username = $_GET['username'];
$deleteUserQuery = "delete from mstr_police where policeid = '".$police_id."' ";

//echo $deleteUserQuery;
if(mysql_query($deleteUserQuery))
{
	$msg = base64_encode("Deleted Successfully!");
	header("location:viewpolice.php?msg=$msg");
}
else
{
	$msg = base64_encode("Error: in deleting record");
	header("location:viewpolice.php?msg=$msg");
}
?>