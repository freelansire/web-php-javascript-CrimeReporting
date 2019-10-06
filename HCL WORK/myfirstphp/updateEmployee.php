<? 
include ("confing.php");
$empName=$_POST["txtEmployeeName"];
$emp_id=$_POST['hiddenEmpId'];
$updateEmpQuery="update emp_details set emp_name='".$empName."' where emp_id=$emp_id";

//echo $updateEmpQuery;
$msg=base64_encode("Record update successfully");
if (mysql_query($updateEmpQuery))
	header("location:viewuser.php?msg=$msg");
	else
	echo "error:inupdating the employee record";
?>