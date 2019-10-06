<?
include("confing.php");
$selectQuery="select * from emp_details";
$selectQuery1="select emp_id,emp_name,dept_name,dept_id from emp_details,department where department.dept_id=emp_details.emp_id";
$resultset=mysql_query($selectQuery1);

echo base64_decode($_GET['msg']);
?>
<table width="548" border="1">
  <tr>
    <td width="76">emp_id</td>
    <td width="75">emp_name</td>
    <td width="93">Department</td>
	<td width="55">Dno</td>
    <td width="87">Edit</td>
    <td width="122">Delete</td>
  </tr>
  

<?
while ($record = mysql_fetch_array($resultset))
{
?>
<tr>
    <td><? echo $record["emp_id"]; ?></td>
    <td><? echo $record["emp_name"]; ?></td>
   <td><? echo $record["dept_name"];?> </td>
	 <td><? echo $record["dept_id"];?> </td>
	 <td><a href="editemp_details.php?id=<? echo $record["emp_id"]; ?>">Edit</a></td>
	 
	 <td><a href="deleteemp_details.php">Delete</a></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
</tr>
<?
}?>	
</table>

