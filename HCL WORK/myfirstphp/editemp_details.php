<? include ("confing.php");
$emp_id= $_GET['id'];
$selectEmpQuery="select * from emp_details where emp_id=".$emp_id;

$resultset=mysql_query($selectEmpQuery);

$record=mysql_fetch_array($resultset);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form name="" action="updateEmployee.php" method="post">

    Employee Name:<input type="text" value="<? echo $record["emp_name"] ?>" name="txtEmployeeName" />
 <input type="submit" value="Update" />
 <input type="hidden" name="hiddenEmpId" value="<?= $emp_id ?>"/> 
  </form>
</body>
</html>
