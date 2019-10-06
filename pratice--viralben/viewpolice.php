<?php
include("sessionHandler.php");
include("header.php");
$selectAllUserQuery = "select *from mstr_police";
$resultSet = mysql_query($selectAllUserQuery) or die(mysql_error());
?>

 
      <h1>View police </h1>  <a href="police.php">Add police</a> | <?=base64_decode($_GET['msg'])?></strong>
      <table width="85%">
        <tr>
          <th colspan="8" class="first"><strong>List of police</strong></th>
        </tr>
        <tr class="row-a">
          	<td width="7%">No.</td>
			<td width="7%">policename	</td>
			<td width="7%">areaname	</td>
			<td width="7%">address</td>
			<td width="6%">contactno</td>
			<td width="8%">EmailID</td>
			<td width="7%">contactperson</td>
			<td width="7%">startingdate</td>
			<td width="5%">Edit</td>
			<td width="5%">Delete</td>
        </tr>
        <?
	$i=1;
	while($record = mysql_fetch_array($resultSet))
	{
	?>
	<tr class="row-a">
		<td>
		<?=$i++></td>
		<td><?=$record["policename"];?></td>
		<td><?=$record["areaname"];?></td>
		<td><?=$record["address"];?></td>
		<td><?=$record["contact_no"];?></td>
		<td><?=$record["Email_id"];?></td>
		<td><?=$record["contact_person"];?></td>
		<td><?=$record["starting_date"];?></td>
		<td><a href="editpolice.php?empcode=<?=$record["areaname"];?>">Edit</a></td>
	    <td><a href="deletepolice.php?username=<?=$record["username"];?>">Delete</a></td>
  </tr>
<?
}
?>
</table>     
    </div>
  </div>
<? include("footer.php");?>
